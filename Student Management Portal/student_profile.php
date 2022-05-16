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
<html>
<head>
	<meta charset="utf-8">
	<title>| Student Profile |</title>

	<link rel="stylesheet" type="text/css" href="admin.css">

	<!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style type="text/css">

        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{

            background-color: skyblue;
            width: 500px;
            padding-top: 70px;
            padding-bottom: 70px;

        }

    </style>

</head>
<body>

	<?php 
		include 'student_sidebar.php';
	?>
	

	<div class="content">
		
		<h1>Profile</h1>

        <center>

        <form action="">
            <div class="div_deg">
            <div>
                <label for="">Name</label>
                <input type="text" name="name" id="">
            </div>
            <div>
                <label for="">Email</label>
                <input type="text" name="email" id="">
            </div>
            <div>
                <label for="">Phone</label>
                <input type="text" name="number" id="">
            </div>
            <div>
                <label for="">Password</label>
                <input type="text" name="password" id="">
            </div>
            <div>
                <input type="submit" value="Submit" name="update_profile">
            </div>
            </div>
        </form>

		</center>

	</div>

</body>
</html>
