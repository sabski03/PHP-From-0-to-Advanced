<?php
include "db.php";
include "login_functions.php";
include "includes/header.php";
    DeleteRows();

?>


<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
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
<?php include "includes/footer.php";