<?php
//all the variables defined here are accessible in all the files that include this one


 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "project";
 
 // Create connection
 $conn = new mysqli ($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}


//$con= new mysqli('localhost','root','','project')or die("Could not connect to mysql".mysqli_error($con));

?>