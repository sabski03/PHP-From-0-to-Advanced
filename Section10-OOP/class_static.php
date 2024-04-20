<?php

class Car{

    //static meaning that this is attached to the class and not to the instance
    //so we cant call it outside the class unless you use it like this Car::$wheels;
    //basically you can use it anywhere you want as long as you refer to the class
    //we can also have static methods
    //before we had to create a new class like the bmw bellow and then echo the wheels but if its static
    //we can echo the wheels without creating a new class
    static $wheels = 4;
    var $hood = 1;


    public static function MoveWheels(){
        Car::$wheels = 10;
    }

}


$bmw = new Car();
Car::MoveWheels();
echo Car::$wheels;

$bmw->wheels = Car::$wheels;
echo $bmw->wheels;




?>