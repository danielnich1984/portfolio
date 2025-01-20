#!/usr/bin/env python3

from PIL import Image
import os

# Define the directory containing the images
image_dir = 'images/'

#List all files in the directory
image_files = [f for f in os.listdir(image_dir)]

# Loop through each image to edit properties
for image_file in image_files: 
  # Path to image
  image_path = os.path.join(image_dir, image_file)

  try:
    # Open image
    with Image.open(image_path) as im:
      new_im = im.rotate(90).resize((128, 128))
      new_im = new_im.convert("RGB")
      output_path = os.path.join( "reformated-icons/", f"{os.path.splitext(image_file)[0]}")
      new_im.save(output_path + ".jpg", "JPEG")

      print(output_path)

  except Exception as e:
    # Print a message and skip the current file
    print(f"Skipped {image_file}: {e}")

