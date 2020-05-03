<?php
    include_once 'dbLoginCredentials.php';

    $dbServername = "localhost";
    $dbUsername = $username;
    $dbPassword = $password;
    $dbName = "recipe-book";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>