<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . $password;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<form action="form.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>