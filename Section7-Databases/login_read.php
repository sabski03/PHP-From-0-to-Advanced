<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
include "db.php";

    $username = $_POST['username'];
    $password = $_POST['password'];



    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query FAILED" . mysqli_error());
    }



?>

<div class="container">
    <div class="col-sm-6">
        <?php

        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <pre>
                <?php
                    print_r($row);

                ?>
            </pre>
        <?php
        }
        ?>
    </div>
</div>

</body>
</html>