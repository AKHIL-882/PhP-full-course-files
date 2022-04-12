<?php 

    if(isset($_POST['submit'])){


        $file = $_FILES['file'];
        $name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        $tempExtension = explode('.',$name);

        $fileExtension = strtolower(end($tempExtension));

        $isAllowed = array('jpg','jpeg','png','pdf');

        if(in_array($fileExtension, $isAllowed)){

            if($error === 0){

                if($size<1000000){

                    $newFileName = uniqid('',true).".".$fileExtension;

                    $fileDestination = 'uploads/'.$newFileName;

                    move_uploaded_file($tmp_name,$fileDestination);
                    header("Location: files.php");

                }else{
                    echo " Sorry your file size is too big || ";
                }

            }else{
                echo " Sorry, there was an error ! Please try again ||| ";
            }

        }else{
            echo " Sorry, Your file type is not accepted !!!" ;
        }

    }

?>