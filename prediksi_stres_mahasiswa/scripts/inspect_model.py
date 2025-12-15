import joblib
import sys
import os

path = os.path.join(os.path.dirname(__file__), '../models/scaler_stress_FIXED.joblib')

try:
    obj = joblib.load(path)
    print(f"Type: {type(obj)}")
    print(f"Object: {obj}")
    
    if hasattr(obj, 'feature_names_in_'):
        print(f"Features: {list(obj.feature_names_in_)}")
    elif hasattr(obj, 'n_features_in_'):
        print(f"Number of features: {obj.n_features_in_}")
        
except Exception as e:
    print(f"Error: {e}")
