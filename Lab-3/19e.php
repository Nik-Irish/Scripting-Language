<?php
$fruits = array("banana", "cherry");

// array_push(): Adds elements to the end
array_push($fruits, "date");
echo "<b>array_push(): </b>"; print_r($fruits); echo "<br>";

// array_unshift(): Adds elements to the beginning
array_unshift($fruits, "apple");
echo "<b>array_unshift(): </b>"; print_r($fruits); echo "<br>";

// array_shift(): Removes first element
$removed = array_shift($fruits);
echo "<b>array_shift() (Removed: $removed):</b>"; print_r($fruits); echo "<br>";

// array_search(): Searches for a value and returns key
$key = array_search("cherry", $fruits);
echo "<b>array_search(): </b>Found 'cherry' at key: " . $key . "<br><br>";

$nums = array(40, 10, 30, 20);
$assoc = array("b" => 2, "a" => 4, "d" => 1, "c" => 3);

// sort(): Sorts indexed array in ascending order
$temp = $nums; sort($temp);
echo "<b>sort(): </b>"; print_r($temp); echo "<br>";

// rsort(): Sorts indexed array in descending order
$temp = $nums; rsort($temp);
echo "<b>rsort(): </b>"; print_r($temp); echo "<br>";

// asort(): Sorts associative array by value (ascending)
$temp = $assoc; asort($temp);
echo "<b>asort(): </b>"; print_r($temp); echo "<br>";

// arsort(): Sorts associative array by value (descending)
$temp = $assoc; arsort($temp);
echo "<b>arsort(): </b>"; print_r($temp); echo "<br>";

// ksort(): Sorts associative array by key (ascending)
$temp = $assoc; ksort($temp);
echo "<b>ksort(): </b>"; print_r($temp); echo "<br>";

// krsort(): Sorts associative array by key (descending)
$temp = $assoc; krsort($temp);
echo "<b>krsort(): </b>"; print_r($temp); echo "<br><br>";

$colors = array("red", "green", "blue", "yellow");

// reset(): Sets pointer to first element
echo "<b>reset(): </b>" . reset($colors) . "<br>";

// current() and pos(): Return current element (pos is an alias of current)
echo "<b>current(): </b> " . current($colors) . "<br>";
echo "<b>pos(): </b> " . pos($colors) . "<br>";

// next(): Moves pointer forward one step
echo "<b>next(): </b> " . next($colors) . "<br>";

// prev(): Moves pointer back one step
echo "<b>prev(): </b> " . prev($colors) . "<br>";

// end(): Sets pointer to last element
echo "<b>end(): </b> " . end($colors) . "<br>";

// each(): Deprecated/Removed in PHP 8. Detailed demonstration:
echo "<b>each() replacement:</b><br>";
reset($colors);
while (($k = key($colors)) !== null) {
    $v = current($colors);
    echo "Key: $k, Value: $v<br>";
    next($colors);
}
echo "<br>";

// array_reverse(): Returns reversed array
$reversed = array_reverse($colors);
echo "<b>array_reverse(): </b>"; print_r($reversed); echo "<br>";

// shuffle(): Shuffles elements randomly
shuffle($colors);
echo "<b>shuffle(): </b>"; print_r($colors); echo "<br>";
?>