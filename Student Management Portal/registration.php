<?php 

    session_start();

    if(!isset($_SESSION['username'])){

        header("Location: login.php");
        
    }
    elseif($_SESSION['usertype']=='student'){

        header("Location: login.php");
    }


    include 'conn.php';

    $sql = "SELECT * FROM registrations";

    $result = mysqli_query($data,$sql);



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>| Registration |</title>

	<link rel="stylesheet" type="text/css" href="admin.css">

	<!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <?php 

        include 'admin_sidebar.php';

    ?>


    <div class="container">


	<div class="content">
		
		<h1>Registration</h1>


        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                </tr>
            </thead>

            <?php 

                while($info = $result->fetch_assoc()){

                ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo "{$info['id']}"; ?></th>
                            <td><?php echo "{$info['username']}"; ?></td>
                            <td><?php echo "{$info['email']}"; ?></td>
                            <td><?php echo "{$info['mess']}"; ?></td>
                        </tr>
                        
                    </tbody>
                <?php

                }?>
        </table>

	</div>
    </div>

</body>
</html>


