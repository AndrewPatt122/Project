<?php

    $host = 'localhost';
    $dbName = 'imperial_sounds';
    $username = 'admin';
    $password = 'admin';

    //Connection to data for mySQLi queries
    $conn = mysqli_connect($host, $username, $password, $dbName);

    if(!$conn){
        echo 'Connection error:' . mysqli_connect_error();
    }
?>