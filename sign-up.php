<?php
$servername = "localhost";
$username ="root";
$password = "";
$db_name = "webdesign_db";

// Create connection
$connection  = mysqli_connect($servername,$username,$password,$db_name);

// capture data



// Check connection
if (!$connection) {
    die("Connection failed: " );
} else {
    echo "Connection established; ";}
    
    // $sql = $connection-> query($sql);

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
$id = uniqid();

// $sql = "INSERT INTO `sign-uptable`( `Fullname`, `E-mail`, `Telephone`, `Password`)
//  VALUES ('".$fullname."','".$email."','".$telephone."','".$password."')";
$sql ="INSERT INTO `sign-uptable`(`id`, `Fullname`, `E-mail`, `Telephone`, `Password`) VALUES ('".$id."','".$fullname."','".$email."','".$telephone."','".$password."')";

if ($connection->query($sql)){
    echo "Data successfully saved";
}else{
    echo "Error: Failed to save data";
}
     echo $sql;
    ?>