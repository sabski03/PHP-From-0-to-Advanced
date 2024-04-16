<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

/*
    Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values
 */

function calculate($number1, $number2){
    $sum = $number1+$number2;
    return $sum;
}

$result = calculate(2,3);

echo $result . '<br>';

function addCalculate($number3,$number4){
    $sum = $number3 + $number4;
    return $sum;
}

$final = addCalculate(5,$result);

echo $final;

?>

</body>
</html>