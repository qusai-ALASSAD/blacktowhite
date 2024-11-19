const archiver = require('archiver');
const fs = require('fs-extra');
const path = require('path');

async function createThemeZip() {
    // Create output directory if it doesn't exist
    await fs.ensureDir('dist');

    // Create a file to stream archive data to
    const output = fs.createWriteStream('dist/black-to-white.zip');
    const archive = archiver('zip', {
        zlib: { level: 9 } // Maximum compression
    });

    // Listen for all archive data to be written
    output.on('close', () => {
        console.log(`Theme package created successfully: ${archive.pointer()} total bytes`);
    });

    // Handle warnings and errors
    archive.on('warning', (err) => {
        if (err.code === 'ENOENT') {
            console.warn('Warning:', err);
        } else {
            throw err;
        }
    });

    archive.on('error', (err) => {
        throw err;
    });

    // Pipe archive data to the file
    archive.pipe(output);

    // Add theme files to the archive
    archive.directory('black-to-white/', 'black-to-white');

    // Finalize the archive
    await archive.finalize();
}

createThemeZip().catch(console.error);