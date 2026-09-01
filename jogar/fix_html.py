
import os

file_path = r'c:\Users\fab\Downloads\4u\app\atari\jogar\index.html'

with open(file_path, 'r', encoding='utf-8', errors='ignore') as f:
    lines = f.readlines()

# 1. Update CSS for centering and better background visibility
css_start = -1
css_end = -1
for i, line in enumerate(lines):
    if '<style>' in line:
        css_start = i
    if '</style>' in line and css_start != -1:
        css_end = i
        break

if css_start != -1 and css_end != -1:
    css_content = """
        <style>
            :root {
                --neon-purple: #9d50bb;
                --neon-blue: #6e48aa;
                --glass-bg: rgba(255, 255, 255, 0.08);
                --glass-border: rgba(255, 255, 255, 0.15);
                --accent-red: #ff416c;
                --accent-orange: #ff4b2b;
            }

            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
                font-family: 'Outfit', sans-serif;
                background: #0d0d0d;
                overflow-x: hidden;
                color: #fff;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .bg-animation {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(to bottom, #000 0%, #1a0a2e 50%, #2e0d54 100%);
                z-index: -1;
                overflow: hidden;
            }

            .grid {
                position: absolute;
                bottom: 0;
                left: 50%;
                width: 200%;
                height: 80%;
                background-image: 
                    linear-gradient(rgba(157, 80, 187, 0.3) 1px, transparent 1px),
                    linear-gradient(to right, rgba(157, 80, 187, 0.3) 1px, transparent 1px);
                background-size: 50px 50px;
                transform: translateX(-50%) perspective(500px) rotateX(65deg);
                animation: grid-move 2s linear infinite;
                opacity: 0.8;
            }

            @keyframes grid-move {
                0% { background-position: 0 0; }
                100% { background-position: 0 50px; }
            }

            .sun {
                position: absolute;
                bottom: 15%;
                left: 50%;
                width: 500px;
                height: 500px;
                background: linear-gradient(to bottom, #ff416c, #ff4b2b, transparent);
                border-radius: 50%;
                transform: translateX(-50%);
                filter: blur(2px);
                box-shadow: 0 0 100px rgba(255, 65, 108, 0.6);
                opacity: 0.7;
            }

            #topbar {
                width: 100%;
                height: 70px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 40px;
                background: var(--glass-bg);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-bottom: 1px solid var(--glass-border);
                box-sizing: border-box;
                z-index: 100;
            }

            #logo {
                height: 45px;
                filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.3));
            }

            #desc span {
                font-family: 'Orbitron', sans-serif;
                font-size: 1.2rem;
                font-weight: 700;
                background: linear-gradient(45deg, #fff, var(--neon-purple));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                text-transform: uppercase;
                letter-spacing: 2px;
            }

            #rom-selector-container {
                margin: 40px auto 20px auto;
                padding: 25px;
                background: var(--glass-bg);
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                border: 1px solid var(--glass-border);
                border-radius: 20px;
                display: flex;
                gap: 20px;
                align-items: center;
                justify-content: center;
                max-width: 800px;
                width: 90%;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
                animation: fadeInDown 0.8s ease-out;
            }

            @keyframes fadeInDown {
                from { opacity: 0; transform: translateY(-20px); }
                to { opacity: 1; transform: translateY(0); }
            }

            #rom-select {
                flex: 1;
                background: rgba(0, 0, 0, 0.4);
                border: 1px solid var(--glass-border);
                border-radius: 10px;
                padding: 12px 15px;
                color: #fff;
                font-family: 'Outfit', sans-serif;
                font-size: 1rem;
                outline: none;
                transition: all 0.3s ease;
                cursor: pointer;
            }

            #rom-select:focus {
                border-color: var(--neon-purple);
                box-shadow: 0 0 10px rgba(157, 80, 187, 0.4);
            }

            #load-rom-button {
                padding: 12px 30px;
                background: linear-gradient(45deg, var(--accent-red), var(--accent-orange));
                color: white;
                border: none;
                border-radius: 10px;
                font-size: 1rem;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1px;
                transition: all 0.3s ease;
                cursor: pointer;
                box-shadow: 0 4px 15px rgba(255, 65, 108, 0.3);
            }

            #load-rom-button:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(255, 65, 108, 0.5);
                filter: brightness(1.1);
            }

            #javatari {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-bottom: 120px;
            }

            #javatari-screen {
                border: 4px solid #1a1a1a;
                border-radius: 15px;
                box-shadow: 0 0 50px rgba(0, 0, 0, 0.6), 0 0 20px rgba(157, 80, 187, 0.2);
                background: #000;
                transition: transform 0.3s ease;
            }

            .info {
                margin-top: 20px;
                color: rgba(255, 255, 255, 0.6);
                font-size: 0.9rem;
            }

            #footer {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background: rgba(0, 0, 0, 0.7);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-top: 1px solid var(--glass-border);
                padding: 15px 0;
                z-index: 100;
            }

            #footer .container {
                display: flex;
                justify-content: center;
                gap: 30px;
                font-size: 0.85rem;
                color: rgba(255, 255, 255, 0.7);
            }

            #footer a { color: var(--accent-red); text-decoration: none; font-weight: 600; }
            #footer a:hover { color: var(--accent-orange); }

            @media (max-width: 600px) {
                #rom-selector-container { flex-direction: column; }
                #topbar { padding: 0 20px; }
                .sun { width: 300px; height: 300px; }
            }
        </style>
"""
    lines[css_start:css_end+1] = [css_content + "\\n"]

# 2. Delete duplicated/old elements between javatari and scripts
# Specifically targeting the block around line 470
new_lines = []
skip = False
for i, line in enumerate(lines):
    # Target the duplicated javatari and matrix-footer
    if '<!-- Footer Estilo Tech Sbrio -->' in line or ('<div id="javatari">' in line and i > 400):
        skip = True
    if skip and '</footer>' in line:
        # Continue skipping until we close the footer, but also skip the next few divs if any
        continue
    if skip and '</div>' in line and i > 490:
        skip = False
        continue
    
    if not skip:
        new_lines.append(line)

with open(file_path, 'w', encoding='utf-8') as f:
    f.writelines(new_lines)

print("Sucesso: CSS atualizado, duplicatas removidas e centralização aplicada.")
