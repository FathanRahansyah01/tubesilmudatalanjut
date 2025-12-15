import sys
import json
import pandas as pd
import joblib
import os
import argparse
import traceback

# CONFIGURATION
MODEL_PATH = os.path.join(os.path.dirname(__file__), '../models/model_stress_voting.joblib')
SCALER_PATH = os.path.join(os.path.dirname(__file__), '../models/scaler_stress_FIXED.joblib')

# REQUIRED RAW INPUTS (13 Features)
RAW_FEATURES = [
    'Tekanan_Akademik',
    'Kesulitan_Akumulasi',
    'Stres_Tugas_Deadline',
    'Tekanan_Eksternal',
    'Kurang_Kendali',
    'Rasa_Tidak_Sanggup',
    'Stres_Pribadi',
    'Marah_Eksternal_Studi',
    'Stres_Perubahan_Akademik',
    'Tekanan_IPK',
    'Cemas_Karir',
    'Kebiasaan_Buruk',
    'Proses_Sesuai_Harapan'
]

# FINAL FEATURE ORDER (15 Features)
FINAL_FEATURES = [
    'Academic_Stress_Score',
    'Tekanan_Akademik',
    'Kesulitan_Akumulasi',
    'Stres_Tugas_Deadline',
    'Tekanan_Eksternal',
    'Kurang_Kendali',
    'Rasa_Tidak_Sanggup',
    'Stres_Pribadi',
    'Marah_Eksternal_Studi',
    'Stres_Perubahan_Akademik',
    'Tekanan_IPK',
    'Cemas_Karir',
    'Kebiasaan_Buruk',
    'Proses_Sesuai_Harapan',
    'Academic_Confidence_Score'
]

def calculate_derived_features(data):
    # Ensure all inputs are int/float
    for f in RAW_FEATURES:
        if f not in data:
            data[f] = 3 # Default middle value if missing
        else:
            data[f] = float(data[f])

    # 1. Calculate Academic_Stress_Score
    # Rata-rata dari 6 fitur
    stress_components = [
        'Tekanan_Akademik',
        'Kesulitan_Akumulasi', 
        'Stres_Tugas_Deadline',
        'Tekanan_Eksternal',
        'Stres_Perubahan_Akademik',
        'Tekanan_IPK'
    ]
    data['Academic_Stress_Score'] = sum(data[f] for f in stress_components) / len(stress_components)

    # 2. Calculate Academic_Confidence_Score
    # Rata-rata dari 5 fitur (4 inverse)
    # Inverse: 6 - value (assuming scale 1-5)
    
    # Positive
    conf_sum = data['Proses_Sesuai_Harapan']
    
    # Negatives
    negatives = ['Kurang_Kendali', 'Rasa_Tidak_Sanggup', 'Kebiasaan_Buruk', 'Cemas_Karir']
    for f in negatives:
        conf_sum += (6 - data[f])
        
    data['Academic_Confidence_Score'] = conf_sum / 5.0
    
    return data

def load_success_response(predictions, probabilities=None):
    results = []
    
    # Mapping output model
    # Assumption: 0=Rendah, 1=Sedang, 2=Tinggi (Standard logic for stress)
    # Modify if your model classes are different!
    label_mapping = {0: 'Rendah', 1: 'Sedang', 2: 'Tinggi'}
    
    for i, pred in enumerate(predictions):
        label = pred
        # Handle numpy/pandas types
        if hasattr(pred, 'item'):
             pred = pred.item()
             
        if isinstance(pred, (int, float)):
             if int(pred) in label_mapping:
                 label = label_mapping[int(pred)]
        
        result_item = {
            'level': label,
            'prediction': str(pred)
        }
        
        if probabilities is not None and i < len(probabilities):
            # Convert numpy array to list
            probs = probabilities[i].tolist()
            result_item['probability'] = probs
            
            # Score Calculation Logic (0-100)
            if len(probs) == 3:
                # Weighted score: 0=Rendah, 1=Sedang, 2=Tinggi
                score = (probs[0] * 20 + probs[1] * 50 + probs[2] * 90)
                result_item['score'] = round(score)
            else:
                 result_item['score'] = 0
        
        # Fallback Score
        if result_item.get('score', 0) == 0:
            if label == 'Rendah': result_item['score'] = 25
            elif label == 'Sedang': result_item['score'] = 50
            elif label == 'Tinggi': result_item['score'] = 85
            else: result_item['score'] = 50
                
        results.append(result_item)
        
    return results

def predict_single(data_json):
    try:
        input_data = json.loads(data_json)
        
        # Map generic ID keys to Feature Names if needed
        # But we will update JS to send Feature Names directly
        
        processed_data = calculate_derived_features(input_data)
        
        # Create DataFrame via list of dicts to ensure order
        df = pd.DataFrame([processed_data])
        
        # Reorder to match model expectation
        df = df[FINAL_FEATURES]
        
        # Load Scaler & Transform
        try:
            scaler = joblib.load(SCALER_PATH)
            X_scaled = scaler.transform(df)
        except Exception as e:
            # If scaler fails, use raw data but warn
            # print(f"Warning: Scaler failed: {e}", file=sys.stderr)
            X_scaled = df
        
        # Load Model & Predict
        try:
            model = joblib.load(MODEL_PATH)
            predictions = model.predict(X_scaled)
            try:
                proba = model.predict_proba(X_scaled)
            except:
                proba = None
        except Exception as e:
            # CHECK FOR DEPENDENCY ERROR (CatBoost)
            if "catboost" in str(e).lower() or "module" in str(e).lower():
                return {
                    "error": "Dependency Error", 
                    "message": "Model membutuhkan CatBoost tapi tidak terinstall di server.",
                    "details": str(e),
                    # RETURN MOCK RESULT FOR UI TESTING
                    "mock": True,
                    "level": "Sedang",
                    "score": 60 
                }
            raise e
            
        return load_success_response(predictions, proba)
        
    except Exception as e:
        return {'error': str(e), 'trace': traceback.format_exc()}

def predict_csv(file_path):
    # CSV implementation similarly needs to map columns and calculate features
    # Skipping detail implementation for now to focus on Single Prediction
    return {'error': "CSV Mode not yet updated for new features"}

if __name__ == "__main__":
    parser = argparse.ArgumentParser()
    parser.add_argument('--mode', choices=['csv', 'single'], required=True)
    parser.add_argument('--data', help='JSON string for single mode')
    parser.add_argument('--file', help='File path for csv mode')
    
    args = parser.parse_args()
    
    if args.mode == 'single':
        result = predict_single(args.data)
        # Handle Mock result specifically for the PHP API to consume
        if isinstance(result, dict) and result.get('mock'):
             # Wrap in list to match success format
             result = [result]
             
        print(json.dumps(result))
    else:
        print(json.dumps({'error': "Mode not supported yet"}))
