<?php
include "db.php";
include "login_functions.php";

if(isset($_POST['submit'])){
    DeleteRows();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>


<div class="container">
    <div class="col-sm-6">
        <form action="login_delete.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select class="mt-2" name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <input class="btn btn-primary mt-2" type="submit" name="submit" value="DELETE">
        </form>
    </div>
</div>

</body>
</html>