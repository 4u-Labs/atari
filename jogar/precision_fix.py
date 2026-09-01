
import os

file_path = r'c:\Users\fab\Downloads\4u\app\atari\jogar\index.html'

with open(file_path, 'r', encoding='utf-8', errors='ignore') as f:
    lines = f.readlines()

# We want to keep:
# 1. Start to the end of the Javatari engine script (around line 423)
# 2. Skip the duplicated HTML (424 to 496)
# 3. Keep the logic script (497 to end)

new_lines = []
for i, line in enumerate(lines):
    line_num = i + 1
    # Keep the first part
    if line_num <= 423:
        new_lines.append(line)
    # Skip 424 to 496
    elif line_num >= 424 and line_num <= 496:
        continue
    # Keep the rest
    else:
        new_lines.append(line)

with open(file_path, 'w', encoding='utf-8') as f:
    f.writelines(new_lines)

print("Sucesso: Elementos HTML duplicados removidos. Scripts de lógica preservados.")
