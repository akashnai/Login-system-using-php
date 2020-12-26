<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "users";

    $conn = mysqli_connect($server,$user,$pass,$db);

    if(!$conn){
        echo "Connection to db failed. error => " .mysqli_connect_error(); 
    // }
    // else{
    //     // echo "Connection to db successful";
    }
?>