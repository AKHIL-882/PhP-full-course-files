<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
</head>
<body>
    <h1>Php Course</h1>

<?php
   // phpinfo();
// variables
$name = "Akhil";
$age = 22;
echo "My name is {$name} age is {$age}";
echo "My name is {$name}"."<br>";
echo 'My name is {$name}'."<br>";
echo nl2br("I am akhil \r\n king of forest");
$username = "akhil";
echo "My name is ". $username."<br>";
echo $name." is my name";


// datatypes

echo "<br>";
$age = 24;
echo "My age is ". $age."<br>";

$price = 10.3;
echo "My age is ". $price."<br>";

$is_allowed = true;
echo $is_allowed;

$x = null;
echo $x;



?>

</body>
</html>
