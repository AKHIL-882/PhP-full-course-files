<?php 

    session_start();

    if(!isset($_SESSION['username'])){

        header("Location: login.php");

    }
    elseif($_SESSION['usertype']=='admin'){

        header("Location: login.php");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Student Dashboard |</title>
</head>
<body>
    
    <h1>Student Dashboard</h1>

    <a href="logout.php">Logout</a>
</body>
</html>