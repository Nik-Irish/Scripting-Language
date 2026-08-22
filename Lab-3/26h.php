<?php
//this code is running, error is shown but it is working

interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        return "Bark";
    }
}

class Cat implements Animal {
    public function makeSound() {
        return "Meow";
    }
}

$dog = new Dog();
$cat = new Cat();

echo "Dog sound: " . $dog->makeSound() . "<br>"; // Output: Bark
echo "Cat sound: " . $cat->makeSound() . "<br>"; // Output: Meow

?>