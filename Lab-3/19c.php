<?php
$indexedArray = array("Apple", "Banana", "Cherry");

$associativeArray = [
    "first" => "Apple",
    "second" => "Banana",
    "third" => "Cherry"
];

$multiArray = [
    "fruits" => array("Apple", "Banana", "Cherry"),
    "vegetables" => ["Carrot", "Peas", "Broccoli"]
];

echo "<h2>Displaying Arrays using var_dump()</h2>";

echo "<h3>1. Indexed Array</h3>";
echo "<pre>";
var_dump($indexedArray);
echo "</pre>";

echo "<h3>2. Associative Array</h3>";
echo "<pre>";
var_dump($associativeArray);
echo "</pre>";

echo "<h3>3. Multidimensional Array</h3>";
echo "<pre>";
var_dump($multiArray);
echo "</pre>";

echo "<hr>";

echo "<h2>Displaying Arrays using print_r()</h2>";

echo "<h3>1. Indexed Array</h3>";
echo "<pre>";
print_r($indexedArray);
echo "</pre>";

echo "<h3>2. Associative Array</h3>";
echo "<pre>";
print_r($associativeArray);
echo "</pre>";

echo "<h3>3. Multidimensional Array</h3>";
echo "<pre>";
print_r($multiArray);
echo "</pre>";
?>