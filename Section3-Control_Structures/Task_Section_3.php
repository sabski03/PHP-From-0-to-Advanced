<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

/*
    Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test against one condition with 5 cases
 */

//step 1
$string = "I love PHP";
if($string == "I love php"){
    echo "I love php";
}elseif($string === "I love php"){
    echo "I love php";
}else{
    echo "I LOVE PHP";
}

//step 2
for($number = 1; $number <=10; $number++){
    echo '<br>' . $number ;
}

echo '<br>';
echo '<br>';

//step 3
$condition = 0;
switch ($condition){
    case 1:
        echo"its 1";
        break;
    case 2:
        echo"its 2";
        break;
    case 3:
        echo"its 3";
        break;
    case 4:
        echo"its 4";
        break;
    case 5:
        echo"its 5";
        break;
    default:
        echo"its 0";
        break;
}


?>

</body>
</html>