<?php 

    require_once 'includes/header.php';

?>
<div>
    
    <h1>
        Register
    </h1>
    <p> Already Have and Accout ? <a href="login.php">Register Here!!</a> </p>


    <form action="includes/register-inc.php" method="post">

        <input type="text" name="username" id="" placeholder="Username">

        <input type="password" name="password" id="" placeholder="Password">

        <input type="password" name="confirmPassword" id="" placeholder="Confirm Password">


        <button type="submit" name="submit"> Register </button>

    </form>

</div>

<?php 

    require_once 'includes/footer.php';

?>