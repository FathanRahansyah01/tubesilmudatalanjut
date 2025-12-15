import joblib
import sys
import os
import traceback

names_path = os.path.join(os.path.dirname(__file__), '../models/feature_names.joblib')
model_path = os.path.join(os.path.dirname(__file__), '../models/model_stress_voting.joblib')

print("READING FEATURE NAMES:")
try:
    names = joblib.load(names_path)
    for n in names:
        print(f"FEATURE: {n}")
except:
    print("Failed to load names")
    traceback.print_exc()

print("\nREADING MODEL:")
try:
    model = joblib.load(model_path)
    print("Model loaded successfully")
    print(f"Model Type: {type(model)}")
except:
    print("Failed to load model")
    
    # Sometimes it fails if scikit-learn version is different
    # or if it relies on other modules.
    traceback.print_exc()
