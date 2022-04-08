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

// arrays
echo "<br>";
$cars = array("bmw","audi","mercedes");
echo $cars[1];
$cars2 = array("valvo","chevy","volwagan");

$mycar = array("audi", 2023,75.34);
echo "<br>";
var_dump($mycar);
echo "<br>";
print_r($mycar);
echo "<br>";

$cars = array_merge($cars,$cars2);
var_dump($cars);
echo "<br>";
print_r($cars);


// associative arrays
echo "<br>";
$cars = array("Audi" => 50.500,"BMW"=>40.700,"Mercides"=>60.300);
var_dump($cars);
echo "<br>";
print_r($cars);
echo "<br>";
$cars["Mercides"] = 60.300;
echo $cars["Mercides"];
echo "<br>";
foreach($cars as $key => $value){
    echo "My " . $key. " has " .$value." mileage <br>";
}


// multidimentioal array
echo "<br>";
$cars = array(
        "Expensive"=>array("Audi","Merccedes","BMW"),
        "Inexpensive"=>array("Volva","Ford","Toyato")
    );

echo $cars["Expensive"][0];

?>

</body>
</html>