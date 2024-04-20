<?php

class Car{

    //public is the same as var, and it means it's available through our whole program
    public $wheels = 4;


    // protected means its available only in the class or any subclasses example ->
    //if a class `extends` the another class like the main class
    protected $hood = 1;


    //private will only be available in this class so even if
    //you extend the class and try to use it anywhere else it won't be working
    private $engine = 1;


    var $doors = 4;


    //you can also make the methods(functions) public, protected and private

    function showProperty(){
        echo $this->doors;
    }



}


$bmw = new Car();
$semi = new Semi();
class Semi extends Car{
    function showProperty(){
        echo $this->hood;
    }
}

echo $semi->showProperty();



?>