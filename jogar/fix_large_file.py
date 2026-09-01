import os

path = r'c:\Users\fab\Downloads\4u\app\atari\jogar\index.html'
with open(path, 'r', encoding='utf-8') as f:
    content = f.read()

# Fix the script tag leakage
# We want to find where the footer ends and the script begins
# and ensure there's a <script> tag there.
# Also we need to make sure the previous script (Javatari) is closed.

# Let's find the end of the Javatari engine
# It's a huge block, so we search for a specific marker near the end.
search_str = '</footer>'
replace_str = '</footer>\n    <script>'

if 'async function fetchRomList' in content and '<script>' not in content.split('async function fetchRomList')[0][-100:]:
    # The logic is not inside a script tag
    content = content.replace('</footer>', '</footer>\n    <script>')
    # Add a closing tag just before </body> if missing
    if '</script>\n</body>' not in content:
        content = content.replace('</body>', '</script>\n</body>')

# Update version
content = content.replace('v5.1.0', 'v5.1.1')

with open(path, 'w', encoding='utf-8') as f:
    f.write(content)

print("Fix applied successfully.")
