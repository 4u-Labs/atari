
import os

file_path = r'c:\Users\fab\Downloads\4u\app\atari\jogar\index.html'

with open(file_path, 'r', encoding='utf-8', errors='ignore') as f:
    content = f.read()

# Print lines 270 to 290
lines = content.splitlines()
for i in range(270, min(295, len(lines))):
    print(f"{i+1}: |{lines[i]}|")
