<?php
include "db.php";
include "login_functions.php";
include "includes/header.php";

    UpdateTable();

?>



<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
        <form action="login_update.php" method="POST">
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
            <input class="btn btn-primary mt-2" type="submit" name="submit" value="UPDATE">
        </form>
    </div>
<?php include "includes/footer.php";