<?php
 
 if ($_POST["password"] == $_POST["confirm_password"]) {
   // success!
   
}
else {
   $message='Password must match.';
 echo " <script> alert('$message'); </script> ";
 header("Location: studentregister.php");
 exit;
}
 
require 'connectionstu.php';
$conn    = Connect();
$fname    = $conn->real_escape_string($_POST['fname']);
$lname    = $conn->real_escape_string($_POST['lname']);
$studentID   = $conn->real_escape_string($_POST['studentID']);
$collegename  = $conn->real_escape_string($_POST['collegename']);
$email    = $conn->real_escape_string($_POST['email']);
$date = $conn->real_escape_string($_POST['date']);
$courses = $conn->real_escape_string($_POST['courses']);
$stream = $conn->real_escape_string($_POST['stream']);
$phone = $conn->real_escape_string($_POST['phone']);
$password = $conn->real_escape_string($_POST['password']);
$confirm_password = $conn->real_escape_string($_POST['confirm_password']);
$activation=md5($email.time()); // Encrypted email+timestamp
$base_url = 'http://localhost/gsgproject/';


$rs=mysqli_query($conn,"select * from stregister where email='$email'");
if (mysqli_num_rows($rs))
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query   = "INSERT into stregister (fname,lname,studentID,collegename,email,date,courses,stream,phone,password,confirm_password,activation) VALUES(
'" . $fname. "','" . $lname. "','" . $studentID. "', '" . $collegename. "', '" . $email . "', '" . $date . "', '" . $courses . "', '" . $stream . "', '" . $phone . "', '" . $password . "', '" . $confirm_password . "', '".$activation."')";
$success = $conn->query($query);
 
 
include 'smtp/Send_Mail.php';
$to=$email;
$subject="Email verification";
$body='Hi, <br/> <br/> Please click on the link to let you get verified. <br/> <br/> <a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';
//Send_Mail($to,$subject,$body);


 try {
          Send_Mail($to,$subject,$body);
          $msg = "An email has been sent for verfication.";
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }



//$msg= "Registration successful, please activate email.";	

 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
else
{
$message='Check your mail and click on the given link to successfully registr.';
 echo " <script > alert('$message'); </script> ";

}
echo "<div class = head1> Please activate your registration through email send to you.</div>";
echo "<div class=head1>You will get the Examination link at the time of exam.</div>";
echo "<br><div class=head1>Please don't forget your mailid and password to take Quiz.</div>";
echo "<br><div class=head1><a href=studentregister.php>New Registration</a></div>";
 $conn->close(); 
 //header("location:studentregister.php");
?>
