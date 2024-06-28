<?php
$servername = "localhost";
$username ="root";
$password = "";
$db_name = "webdesign";

// Create connection
$connection  = mysqli_connect($servername,$username,$password, $db_name);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection established; ";
}

// capture data
$id = uniqid();
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `sign-intable`(`ID`, `EMAIL`, `PASSWORD`) VALUES ('".$id."','".$email."','".$password."')";

if ($connection->query($sql)=== true){
    echo "Account opened successfully";
} else {
    echo "Error: ". $sql. "<br>". $connection->error;
}