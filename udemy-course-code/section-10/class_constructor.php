<?php 

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function __construct() {
        echo $this->wheels = 10;
    }

    function CreateDoors() {
        $this->doors = 6;
    }
}

if (method_exists("Car", "MoveWheels")) {
    echo "Yess method exists\n";
} else {
    echo "nope";
}

$bmw = new Car();
$truck = new Car();

$semi = new Car();


?>