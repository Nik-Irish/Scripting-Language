<?php

abstract class Animal {
    abstract protected function makeSound();

    public function describe() {
        return "This is an animal.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

$dog = new Dog();
$cat = new Cat();

echo $dog->describe() . " It says: " . $dog->makeSound() . "<br>";
echo $cat->describe() . " It says: " . $cat->makeSound() . "<br>";

?>
