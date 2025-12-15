from flask import Flask, request, jsonify
from flask_cors import CORS
import pandas as pd
import joblib
import os
import traceback
import sys

app = Flask(__name__)
CORS(app) # Enable CORS for all routes

# CONFIGURATION - Support Multiple Models
MODEL_PATHS = {
    'voting': {
        'model': os.path.join(os.path.dirname(__file__), 'models_Voting', 'model_stress_voting (5).joblib'),
        'scaler': os.path.join(os.path.dirname(__file__), 'models_Voting', 'scaler_stress_FIXED (2).joblib')
    },
    'catboost': {
        'model': os.path.join(os.path.dirname(__file__), 'models_Catboost', 'model_stress_voting.joblib'),
        'scaler': os.path.join(os.path.dirname(__file__), 'models_Catboost', 'scaler_stress_FIXED.joblib')
    },
    'bagging': {
        'model': os.path.join(os.path.dirname(__file__), 'models_bagging', 'model_stress_bagging.joblib'),
        'scaler': os.path.join(os.path.dirname(__file__), 'models_bagging', 'scaler_stress_bagging.joblib')
    }
}

# GLOBAL VARIABLES TO STORE MODEL
model = None
scaler = None
model_status = "Not Loaded"
current_model_name = "voting"  # Default model

# REQUIRED RAW INPUTS (13 Features)
RAW_FEATURES = [
    'Tekanan_Akademik', 'Kesulitan_Akumulasi', 'Stres_Tugas_Deadline',
    'Tekanan_Eksternal', 'Kurang_Kendali', 'Rasa_Tidak_Sanggup',
    'Stres_Pribadi', 'Marah_Eksternal_Studi', 'Stres_Perubahan_Akademik',
    'Tekanan_IPK', 'Cemas_Karir', 'Kebiasaan_Buruk', 'Proses_Sesuai_Harapan'
]

# FINAL FEATURE ORDER (15 Features)
FINAL_FEATURES = [
    'Academic_Stress_Score', 'Tekanan_Akademik', 'Kesulitan_Akumulasi',
    'Stres_Tugas_Deadline', 'Tekanan_Eksternal', 'Kurang_Kendali',
    'Rasa_Tidak_Sanggup', 'Stres_Pribadi', 'Marah_Eksternal_Studi',
    'Stres_Perubahan_Akademik', 'Tekanan_IPK', 'Cemas_Karir',
    'Kebiasaan_Buruk', 'Proses_Sesuai_Harapan', 'Academic_Confidence_Score'
]

def load_models(model_name='voting'):
    global model, scaler, model_status, current_model_name
    print(f"\n{'='*60}")
    print(f"ATTEMPTING TO LOAD MODEL: {model_name}")
    print(f"{'='*60}")
    try:
        current_model_name = model_name
        model_config = MODEL_PATHS.get(model_name)
        
        if not model_config:
            model_status = f"Unknown model: {model_name}"
            print(model_status)
            return False
            
        MODEL_PATH = model_config['model']
        SCALER_PATH = model_config['scaler']
        
        print(f"Model path: {MODEL_PATH}")
        print(f"Scaler path: {SCALER_PATH}")
        print(f"Model file exists: {os.path.exists(MODEL_PATH)}")
        print(f"Scaler file exists: {os.path.exists(SCALER_PATH)}")
        
        # Load Scaler
        if os.path.exists(SCALER_PATH):
            scaler = joblib.load(SCALER_PATH)
            print(f"Scaler loaded from {SCALER_PATH}")
        else:
            print(f"Scaler not found at {SCALER_PATH}")

        # Load Model
        if os.path.exists(MODEL_PATH):
            model = joblib.load(MODEL_PATH)
            model_status = "OK"
            print(f"MODEL LOADED: {model_name.upper()} from {MODEL_PATH}")
            
            # Verify model type
            if hasattr(model, 'named_estimators_'):
                print("Active Estimators in Voting Model:")
                for name, est in model.named_estimators_.items():
                     print(f"   - {name}: {type(est).__name__}")
            elif hasattr(model, 'estimators_'):
                 print(f"Ensemble with {len(model.estimators_)} estimators loaded.")
            else:
                 print(f"Single Model: {type(model).__name__}")
            
            return True
        else:
            model_status = f"Model file not found at {MODEL_PATH}"
            print(model_status)
            return False
            
    except Exception as e:
        model_status = f"Error loading model: {str(e)}"
        print(model_status)
        traceback.print_exc()
        return False

def calculate_derived_features(data):
    # Ensure all inputs are int/float
    for f in RAW_FEATURES:
        if f not in data:
            data[f] = 3 # Default middle value
        else:
            data[f] = float(data[f])

    # 1. Calculate Academic_Stress_Score
    stress_components = [
        'Tekanan_Akademik', 'Kesulitan_Akumulasi', 'Stres_Tugas_Deadline',
        'Tekanan_Eksternal', 'Stres_Perubahan_Akademik', 'Tekanan_IPK'
    ]
    data['Academic_Stress_Score'] = sum(data[f] for f in stress_components) / len(stress_components)

    # 2. Calculate Academic_Confidence_Score
    conf_sum = data['Proses_Sesuai_Harapan']
    negatives = ['Kurang_Kendali', 'Rasa_Tidak_Sanggup', 'Kebiasaan_Buruk', 'Cemas_Karir']
    for f in negatives:
        conf_sum += (6 - data[f])
        
    data['Academic_Confidence_Score'] = conf_sum / 5.0
    
    return data

@app.route('/')
def home():
    return jsonify({
        "status": "Stress Prediction API is Running",
        "model_status": model_status
    })

@app.route('/predict', methods=['POST'])
def predict():
    global model, scaler
    
    try:
        input_data = request.json
        if not input_data:
            return jsonify({"error": "No input data provided"}), 400
            
        # Preprocessing
        processed_data = calculate_derived_features(input_data)
        
        # DataFrame creation
        df = pd.DataFrame([processed_data])
        df = df[FINAL_FEATURES]
        
        # Mock Response if Model Unloaded (e.g. CatBoost Error)
        if model_status != "OK":
            return jsonify({
                "mock": True,
                "message": f"Using mock prediction because model failed to load. Reason: {model_status}",
                "level": "Sedang",
                "score": 60,
                "probability": [0.2, 0.6, 0.2]
            })

        # Scaling
        X_scaled = df
        if scaler:
            try:
                X_scaled = scaler.transform(df)
            except Exception as e:
                print(f"Scaler warning: {e}")

        # Prediction
        prediction = model.predict(X_scaled)[0]
        
        try:
            proba = model.predict_proba(X_scaled)[0].tolist()
        except:
            proba = None

        # Mapping Output
        label_mapping = {0: 'Rendah', 1: 'Sedang', 2: 'Tinggi'}
        
        # Handle numpy types
        if hasattr(prediction, 'item'): prediction = prediction.item()
        
        label = label_mapping.get(int(prediction), str(prediction))
        
        # Calculate Score (0-100)
        score = 0
        if proba and len(proba) == 3:
            score = round(proba[0]*20 + proba[1]*50 + proba[2]*90)
        else:
            # Fallback
            if label == 'Rendah': score = 25
            elif label == 'Sedang': score = 50
            elif label == 'Tinggi': score = 85
            else: score = 50

        return jsonify({
            "level": label,
            "score": score,
            "probability": proba,
            "derived_features": processed_data,
            "mock": False
        })
        
    except Exception as e:
        traceback.print_exc()
        return jsonify({"error": str(e), "trace": traceback.format_exc()}), 500

@app.route('/set_model', methods=['POST'])
def set_model():
    global current_model_name
    try:
        data = request.json
        model_name = data.get('model', 'voting').lower()
        
        if model_name not in MODEL_PATHS:
            return jsonify({
                "error": f"Invalid model name. Choose from: {list(MODEL_PATHS.keys())}"
            }), 400
        
        success = load_models(model_name)
        
        if success:
            return jsonify({
                "status": "success",
                "model": current_model_name,
                "message": f"Model switched to {current_model_name}"
            })
        else:
            return jsonify({
                "status": "error",
                "message": f"Failed to load model: {model_status}"
            }), 500
            
    except Exception as e:
        traceback.print_exc()
        return jsonify({"error": str(e)}), 500

@app.route('/get_model', methods=['GET'])
def get_model():
    return jsonify({
        "current_model": current_model_name,
        "model_status": model_status,
        "available_models": list(MODEL_PATHS.keys())
    })

if __name__ == '__main__':
    load_models('voting')  # Load default model
    app.run(host='0.0.0.0', port=5000)
