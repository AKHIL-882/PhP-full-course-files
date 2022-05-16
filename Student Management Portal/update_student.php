<?php 

    session_start();

    if(!isset($_SESSION['username'])){

        header("Location: login.php");
        
    }
    elseif($_SESSION['usertype']=='student'){

        header("Location: login.php");

    }

    include 'conn.php';

    $id = $_GET['student_id'];

    $sql = "SELECT * FROM user WHERE id='$id' ";

    $result = mysqli_query($data,$sql);

    $info = $result->fetch_assoc();

    if(isset($_POST['update'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        $query = "UPDATE user SET username='$name', email='$email', phone='$phone',password='$password' WHERE id='$id' ";

        $result2 = mysqli_query($data,$query);

        if($result2){
            header("Location: view_student.php");

            $_SESSION['update_message'] = "Data updated Successfully";
        }


    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Student</title>

	<link rel="stylesheet" type="text/css" href="admin.css">

	<!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>

            label{
                display:inline-block;
                text-align: right;
                width: 100px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .div_deg{
                background-color: skyblue;
                width: 400px;
                padding: 40px;
            }

    </style>

</head>
<body>

	<?php 

	include 'admin_sidebar.php';

	?>



	<div class="content">
		
		<h1>Update Student</h1>

            <center>
            <h1>Add Student</h1>
            <div class="container div_deg" >
                <form action="#" method="post">
                    <div>
                        <label for="">UserName</label>
                        <input type="text" name="name" id="" value="<?php echo "{$info['username']}";?>">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email" id="" value="<?php echo "{$info['email']}";?>">
                    </div>
                    <div>
                        <label for="">Phone number</label>
                        <input type="number" name="phone" id="" value="<?php echo "{$info['phone']}";?>">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" name="password" id="" value="<?php echo "{$info['password']}";?>">
                    </div>
                    <div>
                        <input type="submit" value="Update Student " name="update" class="btn btn-success">
                    </div>
                </form>
            </div>
            </center>
	</div>

</body>
</html>


