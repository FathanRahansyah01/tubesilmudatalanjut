import joblib
import sys
import os
import json

names_path = os.path.join(os.path.dirname(__file__), '../models/feature_names.joblib')

try:
    names = joblib.load(names_path)
    with open('names.json', 'w') as f:
        json.dump(list(names), f, indent=2)
except Exception as e:
    with open('names.json', 'w') as f:
        f.write(str(e))
