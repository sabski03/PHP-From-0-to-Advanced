<?php

print_r($_GET);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>

<?php

$id = 10;
$button = "Click Here";

?>

<a href="GET.php?id=<?php echo $id;?>"><?php echo $button;?></a>

</body>
</html>