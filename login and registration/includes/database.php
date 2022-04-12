<?php 


    $dbhost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "projectdb";


    $conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);


    if(!$conn){
        die("Database connection failed !!");
    }


?>