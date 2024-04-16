<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

$x = "outside"; //global scope

function convert(){
    global $x; //declare it global
    $x = "inside"; // local scope
}
echo $x . '<br>';

convert();

echo $x;
?>

</body>
</html>