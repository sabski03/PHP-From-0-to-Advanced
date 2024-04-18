<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

/*
    Step 1 - Create a database in PHPmyadmin
    Step 2 - Create a table in the database created
    Step 3 - Insert some Data
    Step 4 - Connect to Database and read Data
 */

include "includes/header.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age= $_POST['age'];
    $connection = mysqli_connect('localhost','root','','section7Task');

    $query = "INSERT INTO task(name,age) VALUES('$name',$age)";

    $result = mysqli_query($connection, $query);
}
function ReadData(){
    $connection = mysqli_connect('localhost', 'root', '', 'section7Task');
    $query = "SELECT * FROM task";

    $result = mysqli_query($connection, $query);



    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }
}

?>

<div class="container">
    <div class="col-sm-3">
        <h1 class="text-center">Section 7 Task</h1>
        <form action="Task_Section_7.php" method="POST">
            <div class="form-group">
                <lable for="name">Name</lable>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control">
            </div>
            <input class="btn btn-danger form-control mt-4" name="submit" type="submit" value="Submit">
        </form>
    </div>

    <div class="col-sm-3">
        <h1 class="text-center">Read Data</h1>
        <pre>
            <?php ReadData();?>
        </pre>
    </div>
</div>
</body>
</html>