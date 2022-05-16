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
	<title>Student Dashboard</title>

	<link rel="stylesheet" type="text/css" href="admin.css">

	<!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

	<?php 
		include 'student_sidebar.php';
	?>
	

	<div class="content">
		
		<h1>Sidebar Accordion</h1>

		<p>In this example, we have added an accordion and a dropdown menu inside the side navigation.

		Click on both to understand how they differ from each other. The accordion will push down the content, while the dropdown lays over the content.</p>

		<input type="text" name="">


	</div>

</body>
</html>
