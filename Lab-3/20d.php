<?php
function passByValue($num) {
    $num += 10;
}

function passByReference(&$num) {
    $num += 10;
}

$x = 5;
echo "<b>Pass by Value:</b><br>";
echo "Before Function Call: $x<br>";
passByValue($x);
echo "After Function Call: $x<br><br>";

$y = 5;
echo "<b>Pass by Reference:</b><br>";
echo "Before Function Call: $y<br>";
passByReference($y);
echo "After Function Call: $y<br>";
?>