<?php
include "db.php";


function CreateUser(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hash_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hash_and_salt);


    $query = "INSERT INTO users(username,password) VALUES('$username','$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query FAILED" . mysqli_error());
    }else{
        echo "User Created";
    }
}