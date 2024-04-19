<?php
include "db.php";
include "login_functions.php";
include "includes/header.php";
if(isset($_POST['submit'])){

    CreateUser();

}

?>

    <div class="container">
        <div class="col-sm-3">
            <h1 class="text-center">Create User</h1>
            <form action="login_create.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary mt-2" type="submit" name="submit" value="CREATE">
            </form>
        </div>


<?php include "includes/footer.php";