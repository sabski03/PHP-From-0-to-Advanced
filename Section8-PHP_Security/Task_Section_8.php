<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>
<?php

/*
    Step 1 - Make a variable with some text as value
    Step 2 - Use crypt() function to encrypt it
    Step 3 - Assign the crypt result to a variable
    Step 4 - echo the variable
 */

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    echo "Before - " . $name . '<br>';

    $salt = "iusesomecrazystring22";
    $name = crypt($name, $salt);

    echo "After - " . $name;

}


?>

<form action="Task_Section_8.php" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name">
    <input name="submit" type="submit" value="Submit">
</form>


</body>
</html>