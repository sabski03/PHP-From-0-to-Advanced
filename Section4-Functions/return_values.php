<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

function addNumbers($number1,$number2){
    $sum = $number1 + $number2;
    return $sum;
}

$result = addNumbers(34,64);
echo $result . '<br>';

$result = addNumbers(100, $result);

echo $result;

?>

</body>
</html>