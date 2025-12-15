import joblib
import sys
import os
import traceback

names_path = os.path.join(os.path.dirname(__file__), '../models/feature_names.joblib')

print("READING FEATURE NAMES ONLY:")
try:
    names = joblib.load(names_path)
    if isinstance(names, (list, tuple)):
        for i, n in enumerate(names):
            print(f"FEATURE_{i}: {n}")
    else:
        print(f"Loaded object is {type(names)}")
        print(names)
except:
    print("Failed to load names")
    traceback.print_exc()
