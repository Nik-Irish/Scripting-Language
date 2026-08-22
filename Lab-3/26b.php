<?php
class Car {
    private $model;
    private $color;

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

$myCar = new Car();
$myCar->setModel("Toyota");
$myCar->setColor("Red");

echo "<h3>Car Details:</h3>";
echo "Car Model: " . $myCar->getModel() . "<br>";
echo "Car Color: " . $myCar->getColor();
?>
