#!/usr/bin/env python3

import os
import requests
from PIL import Image

# This example shows how a file can be uploaded us$
# The Python Requests module

url = "http://localhost/upload/"
image_dir = "reformatted-icons"

image_files = [f for f in os.listdir(image_dir)]

for image_file in image_files:
    image_path = os.path.join(image_dir, image_fil$

    if image_path.endswith("jpeg"):
        try:
            print("working")
            with open(image_path, 'rb') as opened:
               r = requests.post(url, files={'file$
        except Exception as e:
            print("Error in script")
