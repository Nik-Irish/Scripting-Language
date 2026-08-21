<?php
function greet($name = "Guest") {
    return "Hello, " . $name . "!<br>";
}

echo greet(); // Outputs: Hello, Guest!
echo greet("John"); // Outputs: Hello, John!
?>
