<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

/*
    Step 1 - Make a class called Dog
    Step 2 - Set some properties for Dog, Example, eye colors, nose, or fur color
    Step 3 - Make a method named ShowAll that echos all the properties
    Step 4 - Instantiate the class / create object and call it
    Step 5 - Call the method ShowAll
 */

class Dog {
    public $eyeColor = "blue";
    public $nose = "small";
    public $furColor = "black";

    function ShowAll(){
        $eyeColor = $this->eyeColor = "white";
        $nose  = $this->nose = "long";
        $furColor = $this->furColor = "black";

        echo $eyeColor . '<br>' . $nose . '<br>' . $furColor . '<br>';

    }
}

$husky = new Dog();
echo $husky->furColor . '<br>';

$husky->ShowAll();

?>

</body>
</html>