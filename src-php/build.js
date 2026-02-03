const fs = require('fs');
const path = require('path');

const SRC_DIR = '.';

// Define partials map
const partials = {};

console.log("Scanning for partials...");
// Pre-load likely partials
fs.readdirSync(SRC_DIR).forEach(filename => {
    if (filename.endsWith('.php') && (filename.match(/^\d+/) || filename.startsWith('utility-'))) {
        const content = fs.readFileSync(path.join(SRC_DIR, filename), 'utf8');
        partials[filename] = content;
        console.log(`Loaded partial: ${filename}`);
    }
});

console.log("Building pages...");
fs.readdirSync(SRC_DIR).forEach(filename => {
    // Process only .php files, ignore partials and the build script itself
    if (filename.endsWith('.php') &&
        !filename.match(/^\d+/) &&
        !filename.startsWith('utility-') &&
        filename !== 'build.js') {

        try {
            let content = fs.readFileSync(path.join(SRC_DIR, filename), 'utf8');

            // Replace <?php require_once 'filename.php'; ?>
            // Regex handles optional whitespace and quoting styles
            content = content.replace(/<\?php\s+require_once\s+['"](.+?)['"];\s*\?>/g, (match, fname) => {
                if (partials[fname]) {
                    return partials[fname];
                } else {
                    try {
                        // Load on demand
                        const partialPath = path.join(SRC_DIR, fname);
                        if (fs.existsSync(partialPath)) {
                            return fs.readFileSync(partialPath, 'utf8');
                        } else {
                            console.warn(`  Warning: Could not find required file ${fname} in ${filename}`);
                            return "";
                        }
                    } catch (e) {
                        console.warn(`  Error loading ${fname}: ${e.message}`);
                        return "";
                    }
                }
            });

            const outputFilename = filename.replace('.php', '.html');
            fs.writeFileSync(path.join(SRC_DIR, outputFilename), content, 'utf8');
            console.log(`Generated: ${outputFilename}`);

        } catch (e) {
            console.error(`Error processing ${filename}: ${e.message}`);
        }
    }
});

console.log("Build complete.");
