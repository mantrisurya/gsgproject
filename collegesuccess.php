<?php
 
 
 /* if ($_POST["password"] == $_POST["confirm_password"]) {
    success!
   
}
else {
   $message='Password must match.';
 echo " <script > alert('$message'); </script> ";
 header("Location: cregister.php");
 exit;
}*/
 
 
require 'connection.php';
$conn    = Connect();
$collegename    = $conn->real_escape_string($_POST['collegename']);
$email   = $conn->real_escape_string($_POST['email']);
$address    = $conn->real_escape_string($_POST['address']);
$eligible = $conn->real_escape_string($_POST['eligible']);
$courses = $conn->real_escape_string($_POST['courses']);
$contact = $conn->real_escape_string($_POST['contact']);

$rs=mysqli_query($conn,"select * from colleges where collegename='$collegename'");
if (mysqli_num_rows($rs))
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}

$query   = "INSERT into colleges (collegename,email,address,eligible,courses,contact) VALUES('" . $collegename. "', '" . $email. "', '" . $address . "', '" . $eligible . "', '" . $_POST["courses"] . "', '" . $_POST["contact"] . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
else
{
$message='You are successfully registred.';
 echo " <script > alert('$message'); </script> ";
 echo"<script>location.href = 'http://localhost/gsgproject/collegeregister.php';</script>";
}
 $conn->close();
 
?>