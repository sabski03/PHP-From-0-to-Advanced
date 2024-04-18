<?php
include "db.php";
include "login_functions.php";
include "includes/header.php";
?>

<div class="container">
    <div class="col-sm-6">
        <pre>
            <?php
                ReadRows();
            ?>
        </pre>
    </div>
<?php include "includes/footer.php";