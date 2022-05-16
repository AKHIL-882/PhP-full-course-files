<?php 

    session_start();

    if(!isset($_SESSION['username'])){

        header("Location: login.php");
        
    }
    elseif($_SESSION['usertype']=='student'){

        header("Location: login.php");

    }

    include 'conn.php';


    if(isset($_POST['add_teacher'])){
        
        $t_name = $_POST['name'];
        $t_description = $_POST['description'];
        $file = $_FILES['image']['name'];
        $dst = "./image/".$file;
        $dst_db = "image/".$file;

        move_uploaded_file($_FILES['image']['name'],$dst);


        $sql = "INSERT INTO teacher (name, description, image) VALUES ('$t_name','$_description','$dst_db')";

        $result = mysqli_query($data,$sql);
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
    <style>

        input{
            margin-bottom: 20px;
        }

        .div_deg{
            background-color: skyblue;
            padding-top:70px;
            padding-bottom: 70px;
            width: 500px;
        }
        
    </style>
</head>
<body>

	<?php 

	include 'admin_sidebar.php';

	?>


	<div class="content">
		<center>
            <h1>Add Teacher</h1>

            <div class="div_deg">



            <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <label for=""> Teacher Name:</label>
                    <input type="text" name="name" id="">
                </div>
                <div>
                    <label for=""> Description:</label>
                    <textarea name="description" id="" cols="15" rows="2"></textarea>
                </div>
                <div>
                    <label for=""> Image:</label>
                    <input type="file" name="image" id="">
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" name="add_teacher" id="" value="Add Teacher"> 
                </div>
                
                

            </form>
        </div>
        </div>
</div>
		
</center>
	</div>

</body>
</html>


