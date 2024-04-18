<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '','loginapp');
    if($connection){
        echo "we are connected";
    }else{
        die("Database connection failed");
    }

    $query = "INSERT INTO users(username,password) VALUES('$username','$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query FAILED" . mysqli_error());
    }

}

?>

<div class="container">
    <div class="col-sm-3">
        <form action="login_create.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary mt-2" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>

</body>
</html>