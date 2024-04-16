<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

$number = 34;

if($number < 10){
    echo "true";
}

switch ($number){
    case 34:
        echo "it is 34";
        break;
    case 37:
        echo "it is 37";
        break;
    case 35:
        echo "it is 35";
        break;
    case 24:
        echo "it is 24";
        break;
    default:
        echo "we could not find anything";
}

?>

</body>
</html>