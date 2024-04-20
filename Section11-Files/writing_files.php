<?php
echo "hi";
$file = "example.txt";
if($handle = fopen($file, "w")){

    fwrite($handle, 'i love php');


    fclose($handle);
}else{
    echo "The files could not be written";
}





?>