<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>
<?php

/*
Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

Step 2: Add the two variables and display the sum with echo:

Step3: Make 2 Arrays with the same values, one regular and the other associative

*/

    //step1
    $number1 = 10;
    $number2 = 20;


    //step2
    echo $number1 + $number2;

    //step3
    $NormalArray = [1,2,3];
    $AssocArray = ["AdminID"=>0,"EmployeeID"=>1];

    echo '<br>';
    echo '<br>';
    print_r($NormalArray);
    echo '<br>';
    echo '<br>';
    print_r($AssocArray);



?>

</body>
</html>