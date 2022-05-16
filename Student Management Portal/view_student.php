<?php 

    error_reporting(0);
    session_start();
    

    if(!isset($_SESSION['username'])){

        header("Location: login.php");
        
    }
    elseif($_SESSION['usertype']=='student'){

        header("Location: login.php");

    }

    if($_SESSION['update_message']){

        $message = $_SESSION['update_message'];

        echo "<script>alert('$message')</script>";

    }


    include 'conn.php'; 

    $sql = "SELECT * FROM user WHERE usertype='student'";

    $result = mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>| View Studnet |</title>

	<link rel="stylesheet" type="text/css" href="admin.css">

	<!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

	<?php 

	include 'admin_sidebar.php';

	?>



	<div class="content">
		<center>
		<h1>View Student</h1>

        <?php 

            if($_SESSION['message']){

                echo $_SESSION['message'];

            }

            unset($_SESSION['message']);
        
        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Username</th>
                <th scope="col">Phone</th>
                <th scope="col">Password</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    while($info = $result->fetch_assoc()){
                    
                    ?>
                        <tr>
                            <th scope="row"><?php echo "{$info['id']} ";?></th>
                            <td><?php echo "{$info['username']}"; ?></td>
                            <td><?php echo "{$info['phone']}"; ?></td>
                            <td><?php echo "{$info['password']}"; ?></td>
                            <td><?php echo "<a class='btn btn-danger' onClick=\" javascript:return confirm('Are you you want to delete') \" href='delete.php?student_id={$info['id']}'>Delete</a>"; ?></td>
                            <td><?php echo "<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'> Update </a>"; ?></td>
                        </tr>
                    
                <?php } ?>
            </tbody>
            </table>

	</div>
    </center>                 
</body>
</html>
