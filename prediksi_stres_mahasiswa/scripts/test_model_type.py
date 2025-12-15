import joblib
import sys
import os
import pandas as pd
import numpy as np

path = os.path.join(os.path.dirname(__file__), '../models/scaler_stress_FIXED.joblib')

try:
    obj = joblib.load(path)
    print(f"Type: {type(obj).__name__}")
    
    has_predict = hasattr(obj, 'predict')
    has_transform = hasattr(obj, 'transform')
    
    print(f"Has predict: {has_predict}")
    print(f"Has transform: {has_transform}")
    
    if hasattr(obj, 'feature_names_in_'):
        print("Features found:")
        for f in obj.feature_names_in_:
            print(f"- {f}")
            
except Exception as e:
    print(f"Error: {e}")
