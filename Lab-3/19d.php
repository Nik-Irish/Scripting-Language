<?php
// Associative array
$students = array(
    "John" => 25,
    "Jane" => 22,
    "Doe" => 30
);

// Using for loop
$keys = array_keys($students);
echo "<h3>Using for loop to display associative array:</h3>";
for ($i = 0; $i < count($students); $i++) 
{
    echo $keys[$i] . " is " . $students[$keys[$i]] . " years old.<br>";
}

// Using foreach loop
echo "<h3>Using foreach loop to display associative array:</h3>";
foreach ($students as $name => $age) {
    echo $name . " was born in " . (2026 - $age) . "<br>";
}
?>
