


<?php 

    session_start();

    include 'conn.php';

    if($_GET['student_id']){

        $user_id = $_GET['student_id'];

        $sql = "DELETE FROM user WHERE id='$user_id' ";

        $result = mysqli_query($data,$sql);

        if($result){

            $_SESSION['message'] = "Record Deleted Successfully !";
            header("Location: view_student.php");
        }

    }


?>