<?php

function get_blogs(): array
{
    $blogs = file_exists(__DIR__ . '/assets/json/posts.json') ? json_decode(file_get_contents(__DIR__ . '/assets/json/posts.json')) : array(
        "checksum" => "",
        "blogs" => array()
    );
    if (!folderChecksumMatches(__DIR__ . '/blogs', $blogs['checksum'])) {
        $blogs['checksum'] = generateFolderChecksum(__DIR__ . '/blogs');
        $blog_files = glob("blogs/**/**/index.php");
        foreach ($blog_files as $blog) {
            $data = get_post_meta($blog);
            $data['path'] = "/blogs/" . explode("/blogs/", str_replace("index.php", "", $blog))[1];
            $blogs['blogs'][] = $data;
        }
        file_put_contents(__DIR__ . '/assets/json/posts.json', json_encode($blogs['blogs'], JSON_PRETTY_PRINT));
        return $blogs['blogs'];
    } else {
        return $blogs['blogs'];
    }
}


function get_post_meta(string $path): array
{
    $post_content = file_get_contents($path);
    $clean = preg_replace(['/\/\*/', '/\*\//'], '', $post_content);
    $clean = preg_replace('/^\s*\*\s?/m', '', $clean);
    $clean = trim($clean);
    $json = '{' . $clean . '}';
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
