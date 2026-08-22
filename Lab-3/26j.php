<?php

//Here is no problem in the code, the ouptut is perfect and clear.

interface Animal {
    public function eat();
}

interface Bird {
    public function fly();
}

class Eagle implements Animal, Bird {
    public function eat() {
        echo "Eagle is eating.<br>";
    }

    public function fly() {
        echo "Eagle is flying.<br>";
    }
}

$eagle = new Eagle();
$eagle->eat();
$eagle->fly();
?>