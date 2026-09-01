
file_path = r'c:\Users\fab\Downloads\4u\app\atari\jogar\index.html'
with open(file_path, 'r', encoding='utf-8', errors='ignore') as f:
    for i, line in enumerate(f):
        if 'id="footer"' in line:
            print(f"Linha {i+1}: {line.strip()}")
