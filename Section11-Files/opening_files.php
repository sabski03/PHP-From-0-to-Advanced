<?php
echo "hi";
$file = "example.txt";

$handle = fopen($file, 'w');



fclose($handle);

?>