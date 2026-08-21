<?php
$inputFile = '24a.txt';
$outputFile = '24d.txt';

$content = file_get_contents($inputFile);
$modifiedContent = preg_replace('/\b[Tt]\w*/', 'HEHE', $content);
file_put_contents($outputFile, $modifiedContent);
echo "Modified Content: " . $modifiedContent;
?>
