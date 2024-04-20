<?php

class Car{

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;


    function MoveWheels(){
        $this->wheels = 10;
    }

    function CreateDoors(){
        $this->doors = 6;
    }

}


$bmw = new Car();
$truck = new Car();

echo $bmw->wheels . '<br>';
echo $bmw->doors . '<br>';

$truck->MoveWheels();
$truck->CreateDoors();
echo $truck->wheels . '<br>';
echo $truck->doors;




?>