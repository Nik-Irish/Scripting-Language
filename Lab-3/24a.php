<?php
// Write to a file
$file = fopen('24a.txt', 'w');
if ($file) {
    $text = "Hello, World!";
    for ($i = 0; $i < strlen($text); $i++) {
        fputs($file, $text[$i]);
    }
    fclose($file);
}

// Read from a file
$file = fopen('24a.txt', 'r');
if ($file) {
    while (($char = fgetc($file)) !== false) {
        echo $char;
    }
    fclose($file);
}
?>