<?php
//include_once 'dbConnection.php';

require 'connectionstu.php';
$conn    = Connect();

$ref=@$_GET['q'];
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$subject = $conn->real_escape_string($_POST['subject']);
$id=uniqid();
$date=date("Y-m-d");
$time=date("h:i:sa");
$feedback = $conn->real_escape_string($_POST['feedback']);
$q = "INSERT INTO feedback (id,name,email,subject,feedback,date,time) VALUES('".$id."' , '".$name."', '".$email."' , '".$subject."', '".$feedback."' , '".$date."' , '".$time."')";
$success = $conn->query($q);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
else
{
header("location:$ref?q=Thank you for your valuable feedback");
}
?>