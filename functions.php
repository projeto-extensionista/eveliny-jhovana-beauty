<?php 

// Enfileirar CSS
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

// Enfileirar JS
function enqueue_js($path = 'assets/js') {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($path),
        RecursiveIteratorIterator::LEAVES_ONLY
    );
    foreach ($files as $file) {
        if ($file->isFile() && pathinfo($file, PATHINFO_EXTENSION) === 'js') {
            $relativePath = str_replace('\\', '/', $file->getPathname());
            echo '<script src="' . $relativePath . '"></script>' . PHP_EOL;
        }
    }
}
