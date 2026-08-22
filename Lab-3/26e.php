<?php
class Example {
    public static $staticVar = 0;

    public static function staticMethod() {
        self::$staticVar++;
        echo "Static Variable Value: " . self::$staticVar . "<br>";
    }
}

Example::staticMethod(); // Output: Static Variable Value: 1
Example::staticMethod(); // Output: Static Variable Value: 2
Example::staticMethod(); // Output: Static Variable Value: 3
?>