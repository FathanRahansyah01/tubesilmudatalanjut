import sys
from unittest.mock import MagicMock

# MOCK CATBOOST
sys.modules['catboost'] = MagicMock()

import joblib
import os
import pandas as pd

model_path = os.path.join(os.path.dirname(__file__), '../models/model_stress_voting.joblib')

print("Attempting to load model with mocked catboost...")
try:
    model = joblib.load(model_path)
    print(f"Model loaded! Type: {type(model).__name__}")
    
    if hasattr(model, 'estimators_'):
        print(f"Estimators found: {len(model.estimators_)}")
        for i, est in enumerate(model.estimators_):
            print(f"Estimator {i}: {type(est).__name__}")
            
except Exception as e:
    print(f"Failed to load: {e}")
