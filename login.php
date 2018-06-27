<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
//include_once 'dbConnection.php';
require 'dbConnection.php';
$ref=@$_GET['q'];
$conn    = Connect();
$password = $conn->real_escape_string($_POST['password']);
$email    = $conn->real_escape_string($_POST['email']);

//$email = $_POST['email'];
//$password = $_POST['password'];

//$email = stripslashes($email);
//$email = addslashes($email);
//$password = stripslashes($password); 
//$password = addslashes($password);
//$password=md5($password); 
$result = mysqli_query($conn,"SELECT * FROM stregister WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['lname'];
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
header("location:account.php?q=1");
}
else
header("location:$ref?w=Wrong Username or Password");


?>