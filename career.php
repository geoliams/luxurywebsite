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
$name = $_POST['fullname'];
$email = $_POST['email'];
$position = $_POST['position'];
$telephone = $_POST['telephone'];
$resume = $_POST['resume'];


$sql = "INSERT INTO `careertable`(`ID`, `FULLNAME`, `EMAIL`, `POSITION`, `TELEPHONE`, `RESUME`) 
VALUES ('".$id."','".$name."','".$email."','".$position."','".$telephone."','".$resume."')";
//check whether data has been captured 

 if ($connection->query($sql)=== true){
     echo "New record created successfully";
 } else {
     echo "Error: ". $sql. "<br>". $connection->error;
 }
?>