<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

$name = "Saba";

//numbers dont have quotes
$number = 100;

/*
    you cant create variables like this
    $num-ber = 400;
    variables cant start with numbers like this example
    $0number = 500;
*/

$NUMBER = 100; //<-- this is an integer
$NUMBeR = 100.5; //<-- this is a float number it takes more space
$NUMBEr = "100"; //<-- this is a string

echo $name . '<br>' . $number; //<-- you use the dot ---> . <--- to concatenate 2 variables for example

$name = "<h1>Hello</h1>"; //<-- we can also use html in php variables

echo $name;

?>

</body>
</html>