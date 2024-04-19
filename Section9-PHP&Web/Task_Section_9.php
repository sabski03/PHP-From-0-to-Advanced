<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php
session_start();
$_SESSION['hello'] = "hi guys";
echo $_SESSION['hello'] . '<br>';

$name = "cookie";
$value = 100;
$expiration = time() + (60*60*24*7*1.5);

setcookie($name,$value,$expiration);
/*
    Step 1 - Create a link saying Click Here,
    and set the link href to pass some parameters and use the GET super global to see it

    Step 2 - Set a cookie that expires in one eek

    Step 3 - Start a session and set it to value, any value you want
 */

$id = 3;
if(isset($_COOKIE['cookie'])){
    echo "cookies are set" . '<br>';
}

if(isset($_SESSION['hello'])){
    echo "session is set" . '<br>';
}

?>

<a href="Task_Section_9.php/id=<?php echo $id;?>">Click Here</a>

</body>
</html>