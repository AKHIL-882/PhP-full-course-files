<?php 

    session_start();

    if(!isset($_SESSION['username'])){

        header("Location: login.php");
        
    }
    elseif($_SESSION['usertype']=='student'){

        header("Location: login.php");

    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<link rel="stylesheet" type="text/css" href="admin.css">

	<!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

	<?php 

	include 'admin_sidebar.php';

	?>



	<div class="content">
		
		<h1>Admin Dashboard</h1>

	</div>

</body>
</html>


