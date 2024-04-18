<?php

if(isset($_POST['submit'])){
    $names = ["saba", "maria", "alex"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;

    if(strlen($username)<$minimum){
        echo "Username has to be longer than 5 characters";
    }else{
        echo "good";
    }

    if(!in_array($username,$names)){
        echo "Sorry you are not allowed";
    }else{
        echo "welcome";
    }


}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<form action="validation.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>