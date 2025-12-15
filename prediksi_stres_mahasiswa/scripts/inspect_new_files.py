import joblib
import sys
import os

model_path = os.path.join(os.path.dirname(__file__), '../models/model_stress_voting.joblib')
names_path = os.path.join(os.path.dirname(__file__), '../models/feature_names.joblib')

print("--- MODEL INFO ---")
try:
    model = joblib.load(model_path)
    print(f"Type: {type(model).__name__}")
    if hasattr(model, 'estimators_'):
        print(f"Estimators: {len(model.estimators_)}")
    
    # Try to find expected features
    if hasattr(model, 'feature_names_in_'):
        print(f"Model Features: {list(model.feature_names_in_)}")
    elif hasattr(model, 'n_features_in_'):
        print(f"Model N Features: {model.n_features_in_}")
except Exception as e:
    print(f"Error loading model: {e}")

print("\n--- FEATURE NAMES INFO ---")
try:
    names = joblib.load(names_path)
    print(f"Type: {type(names)}")
    print(f"Content: {names}")
except Exception as e:
    print(f"Error loading names: {e}")
