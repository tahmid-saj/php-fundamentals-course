<?php 

class Car {
    function MoveWheels() {
        echo "Wheels move";
    }
}

if (method_exists("Car", "MoveWheels")) {
    echo "Yess method exists";
} else {
    echo "nope";
}

?>