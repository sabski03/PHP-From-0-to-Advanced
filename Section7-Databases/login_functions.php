<?php
include "db.php";
function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query FAILED" . mysqli_error());
    }


    while($row=mysqli_fetch_assoc($result)){
        echo "<option value='{$row['id']}'>$row[id]</option>";
    }
}


function UpdateTable(){
    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "User Updated";
        } else {
            echo "Error updating user: " . mysqli_error($connection);
        }
    }
}

function DeleteRows(){
    if(isset($_POST['submit'])) {
        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "User Deleted";
        } else {
            echo "Error updating user: " . mysqli_error($connection);
        }
    }
}


function CreateUser(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "INSERT INTO users(username,password) VALUES('$username','$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query FAILED" . mysqli_error());
    }else{
        echo "User Created";
    }
}

function ReadRows(){
global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query FAILED" . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}