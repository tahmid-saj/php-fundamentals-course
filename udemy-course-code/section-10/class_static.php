<?php 

class Car {
    static $wheels = 4;
    protected $hood = 1;

    static function MoveWheels() {
        Car::$wheels = 10;
    }
}

if (method_exists("Car", "MoveWheels")) {
    echo "Yess method exists\n";
} else {
    echo "nope";
}

$bmw = new Car();

// echo $bmw->wheels;

Car::MoveWheels();

echo Car::$wheels;

?>