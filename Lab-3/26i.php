<?php

class Fruits {
    public function Taste() {
        return "Some Taste";
    }
}

class Mango extends Fruits {
    public function Taste() {
        return "Sweet";
    }
}

class Lemon extends Fruits {
    public function Taste() {
        return "Sour";
    }
}

function displayTaste($label, Fruits $fruit) {
    echo $label . $fruit->Taste() . "<br>";
}

$mango = new Mango();
$lemon = new Lemon();

displayTaste("Mango is : ", $mango); // Outputs: Mango is : Sweet
displayTaste("Lemon is : ", $lemon); // Outputs: Lemon is : Sour

?>
