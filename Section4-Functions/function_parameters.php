<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

function greeting($student){
    echo "hello " . $student;
}

greeting("Saba");

echo '<br>';
echo '<br>';

function calculate($number1, $number2){
    $sum = $number1 + $number2;
    echo $sum;
}

calculate(12,24);


?>

</body>
</html>