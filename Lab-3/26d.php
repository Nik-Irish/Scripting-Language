<?php
class ParentClass {
    public function __construct() {
        echo "Parent class constructor called.<br>";
    }
}

class ChildClass extends ParentClass {
    public function __construct() {
        parent::__construct();
        echo "Child class constructor called.<br>";
    }
}

$child = new ChildClass();
?>