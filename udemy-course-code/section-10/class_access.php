<?php 

class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function MoveWheels() {
        $this->wheels = 10;
    }

    function showProperty() {
        echo $this->engine;
    }
}

if (method_exists("Car", "MoveWheels")) {
    echo "Yess method exists\n";
} else {
    echo "nope";
}

$bmw = new Car();
$semi = new Semi();

class Semi extends Car {
    function showProperty() {
        echo $this->hood;
    }
}

echo $bmw->showProperty();
?>