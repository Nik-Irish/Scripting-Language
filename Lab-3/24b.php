<?php
$filename = '24a.txt';

// Write to a file
$file = fopen($filename, 'w');
if ($file) {
    $content = "This is a test file of 24b.";
    fwrite($file, $content);
    fclose($file);
}

// Read from a file
$file = fopen($filename, 'r');
if ($file) {
    $content = fread($file, filesize($filename));
    fclose($file);
    echo "File Content: " . $content;
}
?>