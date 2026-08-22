<?php

class ParentClass {
    public function display() {
        return "This is the parent class method.<br>";
    }
}

class ChildClass extends ParentClass {
    public function display() {
        return "This is the child class method, overriding the parent class method.";
    }
}

$parent = new ParentClass();
echo $parent->display(); // Output: This is the parent class method.

$child = new ChildClass();
echo $child->display(); // Output: This is the child class method, overriding the parent class method.

?>
