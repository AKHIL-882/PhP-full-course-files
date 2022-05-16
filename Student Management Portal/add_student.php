<?php 

    session_start();

    if(!isset($_SESSION['username'])){

        header("Location: login.php");
        
    }
    elseif($_SESSION['usertype']=='student'){

        header("Location: login.php");

    }

    include 'conn.php';

    if(isset($_POST['add_student'])){

        $username = $_POST['name'];
        $user_email = $_POST['email'];
        $user_phone = $_POST['phone'];
        $user_password = $_POST['password'];
        $usertype = "student";

        $check = "SELECT * from user WHERE username='$username'";

        $check_user = mysqli_query($data,$check);

        $row_count = mysqli_num_rows($check_user);

        if($row_count==1){

                echo "<script>alert('User Name already exist ! Try new username'); </script>";
        }else{

            $sql = "INSERT INTO user(username,email,phone,usertype,password) VALUES ('$username','$user_email','$user_phone','$usertype','$user_password')";

            $result = mysqli_query($data,$sql);

            if($result){
                echo "<script>alert(' Student added Successfully');</script>";
            }else{
                echo "<script>alert('Upload Failed');</script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>| Add Student |</title>

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
            <center>
            <h1>Add Student</h1>
            <div class="container div_deg" >
                <form action="#" method="post">
                    <div>
                        <label for="">UserName</label>
                        <input type="text" name="name" id="">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email" id="">
                    </div>
                    <div>
                        <label for="">Phone number</label>
                        <input type="number" name="phone" id="">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" name="password" id="">
                    </div>
                    <div>
                        <input type="submit" value="Add Student " name="add_student" class="btn btn-success">
                    </div>
                </form>
            </div>
            </center>
	    </div>

    
</body>
</html>


