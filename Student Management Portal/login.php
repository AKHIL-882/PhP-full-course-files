<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Login |</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body background="images/3.jpg" class="body_deg">
    <center>
        <div class="form_deg">
            <center class="title_deg">
                Login Here

                <h6>

                <?php 
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginMessage' ];
                ?>

                </h6>
            </center>
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label for="" class="label_deg"> Username</label>
                    <input type="text" name="username" id="">
                </div>
                <div>
                    <label for="" class="label_deg">Password</label>
                    <input type="password" name="password" id="">
                </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
            </form>
        </div>
    </center>
</body>
</html>