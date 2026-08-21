<?php
// Example of preg_match()
$pattern = "/^Hello/";
$string = "Hello World";
echo "<h3>Preg_match()</h3>";
if (preg_match($pattern, $string)) {
    echo "Match found! There is Hello.<br>";
} else {
    echo "No match.<br>";
}

// Example of preg_match_all()
$pattern = "/\d+/";
$string = "There are 12 apples and 15 oranges.<br>";
preg_match_all($pattern, $string, $matches);
echo "<h3>Preg_match_all()</h3>";
echo "<pre>";
print_r($matches);
echo "</pre>";

// Example of preg_replace()
$pattern = "/apples/";
$replacement = "bananas";
$string = "I have apples.<br>";
echo "<h3>Preg_replace()</h3>";
$new_string = preg_replace($pattern, $replacement, $string);
echo "Original: $string";
echo "Modified: $new_string<br>";
?>
