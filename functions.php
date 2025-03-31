<?php 

function enqueue_css($path = 'assets/css') {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($path),
        RecursiveIteratorIterator::LEAVES_ONLY
    );
    foreach ($files as $file) {
        if ($file->isFile() && pathinfo($file, PATHINFO_EXTENSION) === 'css') {
            $relativePath = str_replace('\\', '/', $file->getPathname());
            echo '<link rel="stylesheet" href="' . $relativePath . '">' . PHP_EOL;
        }
    }
}
