<?php

/**
 * Check if posts have changed and return generated json else regenerate posts json.
 * @return array All posts
 */
function get_blogs(): array
{
    $blogs = (array)json_decode(file_get_contents(__DIR__ . '/../json/posts.json'));
//    if (folderChecksumMatches(__DIR__ . '/../../blog', $blogs['checksum'])) {
    if (false) {
        return (array)$blogs['blogs'];
    } else {
        $blogs['blogs'] = [];
        $blogs['checksum'] = generateFolderChecksum(__DIR__ . '/../../blog');
        $blog_files = glob(__DIR__ . "/../../blog/**/index.php");
        foreach ($blog_files as $blog) {
            $data = get_post_meta($blog);
            $data['path'] = "/blog/" . explode("/blog/", str_replace("index.php", "", $blog))[1];
            $blogs['blogs'][] = $data;
        }
        usort($blogs['blogs'], function ($a, $b) {
            return strtotime($b['date']) <=> strtotime($a['date']);
        });
        file_put_contents(__DIR__ . '/../json/posts.json', json_encode($blogs, JSON_PRETTY_PRINT));
        return (array)$blogs['blogs'];
    }
}


/**
 * @param string $path post path
 * @return array Post meta
 */
function get_post_meta(string $path): array
{
    $post_content = file_get_contents($path);
    if (!preg_match('#/\*\s*(.*?)\s*\*/#s', $post_content, $match)) {
        return [];
    }

    $inner = $match[1];
    $inner = preg_replace('/^\s*\*\s?/m', '', $inner);
    $inner = trim($inner);
    $json = '{' . $inner . '}';
    $data = json_decode($json, true);

    return is_array($data) ? $data : [];
}


/**
 * Recursively generate a checksum for all files inside a folder.
 *
 * @param string $directory Path to the folder.
 * @return string The resulting checksum.
 */
function generateFolderChecksum(string $directory): string
{
    if (!is_dir($directory)) {
        return '';
    }

    $files = [];

    // Recursively gather files
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $files[] = $file->getPathname();
        }
    }

    // Sort to ensure consistent order
    sort($files);

    // Build a combined hash of every file's content + relative path
    $hashContext = hash_init('sha256');

    foreach ($files as $path) {
        hash_update($hashContext, $path);
        hash_update($hashContext, file_get_contents($path));
    }

    return hash_final($hashContext);
}

/**
 * Compare a folder's checksum to a known checksum.
 *
 * @param string $directory
 * @param string $knownChecksum
 * @return bool
 */
function folderChecksumMatches(string $directory, string $knownChecksum): bool
{
    $current = generateFolderChecksum($directory);
    return hash_equals($knownChecksum, $current);
}


foreach (glob(__DIR__ . '/*.php') as $file) {
    if ($file == __FILE__) continue;
    include_once $file;
}