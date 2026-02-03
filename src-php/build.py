import os
import re

# Logic:
# 1. Scan current directory for .php files.
# 2. For each .php file (ignoring partials starting with digit_ or in subfolders if any, though here everything seems flat in src-php),
#    read content.
# 3. Replace `<?php require_once 'filename.php'; ?>` with content of filename.php.
#    (Simple approach: recursive replacement or just single level if that's all there is. Repo seems single level for head/nav/footer).
# 4. Save as .html.

SRC_DIR = "."
partials = {}

print("Scanning for partials...")
# Pre-load likely partials
for filename in os.listdir(SRC_DIR):
    if filename.endswith(".php") and (filename[0].isdigit() or filename.startswith("utility-")):
        with open(os.path.join(SRC_DIR, filename), 'r', encoding='utf-8') as f:
            partials[filename] = f.read()
            print(f"Loaded partial: {filename}")

print("Building pages...")
for filename in os.listdir(SRC_DIR):
    if filename.endswith(".php") and not (filename[0].isdigit() or filename.startswith("utility-") or filename == "build.py"):
        try:
            with open(os.path.join(SRC_DIR, filename), 'r', encoding='utf-8') as f:
                content = f.read()

            # Replace require_once
            # Pattern: <?php require_once '1_head.php'; ?>  (allowing for spaces/quotes variation)
            def replace_match(match):
                fname = match.group(1)
                if fname in partials:
                    return partials[fname]
                else:
                    # Try to load it on demand if not pre-loaded
                    try:
                        with open(os.path.join(SRC_DIR, fname), 'r', encoding='utf-8') as pf:
                            return pf.read()
                    except FileNotFoundError:
                        print(f"  Warning: Could not find required file {fname} in {filename}")
                        return ""

            # Standardize regex for require_once
            # Matches: <?php require_once 'filename.php'; ?>
            new_content = re.sub(r"<\?php\s+require_once\s+['\"](.+?)['\"];\s*\?>", replace_match, content)
            
            # Simple fix for any remaining php tags if necessary (repo seems clean otherwise)
            
            output_filename = filename.replace(".php", ".html")
            with open(os.path.join(SRC_DIR, output_filename), 'w', encoding='utf-8') as f:
                f.write(new_content)
            
            print(f"Generated: {output_filename}")
            
        except Exception as e:
            print(f"Error processing {filename}: {e}")

print("Build complete.")
