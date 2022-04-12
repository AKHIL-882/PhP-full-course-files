<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Form</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<div>
    <h1> Get In Touch 

    <p>Please Fill the files </p>

    <form action="contact.php" method="post">

        <input type="text" name="name" placeholder=" Full Name " >
        <input type="email" name="email" placeholder=" E-Mail " >
        <input type="text" name="subject" placeholder=" Subject" >
        <textarea name="message"  placeholder="Enter message" ></textarea>
        <button type="submit" name="submit">Send Email</button>
    </form>

    </h1>
</div>




</body>
</html>