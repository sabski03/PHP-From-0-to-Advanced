<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

/*
    Step1: Use a pre-built math function here and echo it

	Step 2:  Use a pre-built string function here and echo it

	Step 3:  Use a pre-built Array function here and echo it
 */

//step 1:
function Numbers($a,$b){
    echo rand($a,$b);
}

Numbers(1,10);

//step 2:
function String(){
    global $len;
    $hi = "Hello Student";
    $rev = strrev($hi);
    $len = strlen($hi);


    return $rev;
}
$len = "Hello Student";

$string = String();
echo '<br>' . $string . '<br>' . $len . '<br>';

//step 3:
function Arrays(){
    $example = [5,4,3,2,1];
    sort($example);
    return $example;
}

$final = Arrays();

print_r($final);



?>

</body>
</html>