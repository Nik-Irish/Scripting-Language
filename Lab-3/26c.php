<?php
class Animal {
    public function eat() {
        return "Eating...";
    }
}

class Mammal extends Animal {
    public function walk() {
        return "Walking...";
    }
}

class Dog extends Mammal {
    public function bark() {
        return "Barking...";
    }
}

class Bird extends Animal {
    public function fly() {
        return "Flying...";
    }
}

class Sparrow extends Bird {
    public function chirp() {
        return "Chirping...";
    }
}

class Fish extends Animal {
    public function swim() {
        return "Swimming...";
    }
}

// Usage
$dog = new Dog();
echo "<h3>Dog Details:</h3>";
echo $dog->eat(); // Eating...
echo $dog->walk(); // Walking...
echo $dog->bark(); // Barking...

$sparrow = new Sparrow();
echo "<h3>Sparrow Details:</h3>";
echo $sparrow->eat(); // Eating...
echo $sparrow->fly(); // Flying...
echo $sparrow->chirp(); // Chirping...

$fish = new Fish();
echo "<h3>Fish Details:</h3>";
echo $fish->eat(); // Eating...
echo $fish->swim(); // Swimming...
?>