<?php

    error_reporting(0);
    session_start();

    $host = "localhost";
    $user = "root"; 
    $password="";
    $db="schoolproject";

    $data = mysqli_connect($host,$user,$password,$db);

    if($data===false){
        die("Connection Failed");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $name = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username='".$name."'  AND password='".$password."' ";

        $result = mysqli_query($data,$sql);

        $row = mysqli_fetch_array($result);

        if($row['usertype']=="student"){

            $_SESSION['username']=$name;

            $_SESSION['usertype']="student";

            header("Location: studenthome.php");
        }
        
        elseif($row['usertype']=="admin"){

            $_SESSION['username']=$name;

            $_SESSION['usertype']='admin';

            header("Location: adminhome.php");
        }
        else{

            $message =  " Username or Password Didn't Match |||";

            $_SESSION['loginMessage'] = $message;

            header("Location: login.php");
        }


    }

?>