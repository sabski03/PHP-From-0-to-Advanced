<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>
<form action="Task_Section_6.php" method="POST">
    <input type="name" name="username" placeholder="Your Name">
    <input type="submit" name="submit">
</form>
<?php

/*
    Step1: Make a form that submits one value to POST super global
 */

    if (isset($_POST['submit'])){
        $username = $_POST['username'];

        echo $username;
    }

?>


</body>
</html>