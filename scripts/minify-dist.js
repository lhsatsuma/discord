import {readdir, readFile, writeFile} from 'node:fs/promises';
import path from 'node:path';
import {minify} from 'terser';

const outputDirectory = path.resolve('dist');

async function findJavaScriptFiles(directory) {
    const entries = await readdir(directory, {withFileTypes: true});
    const files = await Promise.all(entries.map(async entry => {
        const entryPath = path.join(directory, entry.name);
        if (entry.isDirectory()) {
            return findJavaScriptFiles(entryPath);
        }
        return entry.isFile() && entry.name.endsWith('.js') ? [entryPath] : [];
    }));

    return files.flat();
}

const files = await findJavaScriptFiles(outputDirectory);
const minifiedFiles = await Promise.all(files.map(async file => {
    const source = await readFile(file, 'utf8');
    const result = await minify(source, {module: true, keep_classnames: true});
    if (result.code === undefined) {
        throw new Error(`Terser did not produce output for ${file}`);
    }
    return {file, code: result.code};
}));

await Promise.all(minifiedFiles.map(({file, code}) => writeFile(file, code)));
console.log(`Minified ${minifiedFiles.length} JavaScript files in dist/`);
