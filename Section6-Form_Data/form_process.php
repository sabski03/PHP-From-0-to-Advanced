<?php


if (isset($_POST['submit'])) {
    $names = ["saba", "maria", "alex"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;
    $maximum = 10;

    if (strlen($username) < $minimum) {
        echo "Username has to be longer than 5 characters";
    } else {
        echo "good";
    }

    if(strlen($username) > $maximum){
        echo "Username has to be shorter than 10 characters";
    }else{
        echo "good";
    }

    if (!in_array($username, $names)) {
        echo "Sorry you are not allowed";
    } else {
        echo "welcome";
    }


}

