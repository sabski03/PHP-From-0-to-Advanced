<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

$number = 10;
echo $number . '<br>';
//once you set the value of a constant variable you can not change it!
define("NAME", 1000);

echo NAME;

$number = 20;
echo '<br>' . $number;

// -----> NEWER WAY OF CREATING A CONSTANT <-----
echo '<br>';
const Title = "Hello World";
const Animals = ["dog","cat","bird"];

echo Title . '<br>';
print_r(Animals);
?>

</body>
</html>