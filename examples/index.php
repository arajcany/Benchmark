<?php

$directory = __DIR__ . '\\';


$scanned_directory = array_diff(scandir($directory, 1), array('..', '.'));

$files = [];
foreach ($scanned_directory as $item) {
    if (is_file($directory . $item) && $item != 'index.php') {
        $files[] = $item;
    }
}

foreach ($files as $file) {
    echo "<h3><a href=\"{$file}\">{$file}</a></h3>";
    echo "<br>";
}