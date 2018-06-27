<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Go Speedy Go - Recruitment  </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link rel="icon" type="image/ico" href="favicon.ico" />
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->




	
<style>
	
{
	margin:0;
	padding:0;
}
body{
	font-family:tahoma;
	background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(slide1.jpg);

	background-position:center;
    background-size: cover;
	background-repeat:no-repeat;
	
	width:auto;
}
.hero
{
	position:absolute;
	width:40%;
	top:50%;
	left:25%;
	transform: translate(-50%,-50%);
	

}
header
{
	
}
h1{
	color:white;
}
.main-nav{
	float:right;
	list-style-type:none;
	margin-right:7%;
}
.main-nav li{
	display:inline-block;
	margin-left:20px;
	margin-top:14%;

}
.main-nav li a{
	color:#7FFF00;
	text-decoration:none;
	font-size:90%;
	font-weight:bold;
}
.main-nav li a:hover{
	color:white;
	border-bottom:2px solid cyan;
	transition:all 0.2s ease-in;
	padding:10px 0;
}
.btn{
	border:1.25px solid #7FFF00;
	padding:10px  25px;
	text-decoration:none;
	color:white;
	border-radius:13px;

}
.button-awesome{
	margin-top:60px;
	margin-left: 15%;
}

.btn-full:hover{
	background-color:#7FFF00;
	font-weight: bold;
	color:black;
	
	transition:all 0.6s ease-in;
}

.text-center{
	text-align:center;
	color:green;
}
.logo{
	margin:10px 0px 0px 1%;
	float:left;
}
.form-container{
	float:right;
	margin-top: 5%;
	border:1px solid #7FFF00;
	border-radius: 5px;
	padding:5px 0px 10px 50px;

	margin-right: 10%;
	width:80%;
	-webkit-box-shadow: 1px 1px 21px 7px rgba(25,27,41,1);
-moz-box-shadow: 1px 1px 21px 7px rgba(25,27,41,1);
box-shadow: 1px 1px 21px 7px rgba(25,27,41,1);
}
.form-group{
	padding:8px 4px 4px 2px;
	float: left;
	width: 92%;
	border-radius: 5px;
}
.form-control{
	
	
	width: 100%;
	border-radius: 5px;
	float:left;

}
.btn:hover{
	background-color: #7FFF00;
	font-weight: bold;

}
.btn-default{
	background-color: #7FFF00;
	font-weight: bold;
	margin-left: 38%;
	margin-top: 10%;
}

.mar{
	font:bold;
	color: green;
	margin-top:2%;
	font-size:30px;
}
.feedback{
	padding:0px 132px;
	border-radius: 8px;
	float:left;
}

.select{
	border-radius: 5px;
	padding: 5px;

}
</style>
	
	

</head>

<body>

<!--header start-->
<div class="row header">
<div class="col-lg-8">
<span class="logo">Get hired in GSG</span></div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
?>

<a href="loginforexam.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
</div></div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:green">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md"  type="email">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--header end-->

<div class="bg1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/tempbg.jpg); background-size:cover">
<h2 align="center" style="font-family:'typo'; color:#0bbf11">FEEDBACK/REPORT A PROBLEM</h2>

<div style="font-size:14px">
<?php 
if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo'
<form align=left role="form" class="form-container"  method="post" action="feed.php?q=feedback.php">

					<div class="form-group" style="color: #0bbf11">
						<label for="name">Name:</label>
						<input type="name" class="form-control" name="name" placeholder="Enter your name here"  required ><br><br>
  					</div>
					<div class="form-group" style="color: #0bbf11">
						<label for="name">Subject:</label>
						<input type="name" class="form-control" name="subject" placeholder="Enter Subject of comment here"  required ><br><br>
  					</div>
					
 		 			<div class="form-group" style="color: #0bbf11">
						<label for="exampleInputEmail1" >E-Mail address:</label>
						<input type="email" class="form-control" name="email" placeholder="Email"  required ><br><br>
  					</div>
					 <div class="form-group">
						<label for="feedback" style="color: #0bbf11">FEEDBACK/REPORT</label>
						<textarea rows="5" name="feedback" class="feedback" placeholder="Enter your feedback"></textarea>
					</div><br><br><br><br><br>
					<div class="form-group">
						<button type="submit" class="btn" name = "submit" style="color: black;">Submit</button>
					</div>
</form>';
}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</div><!--container end-->


<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="http://www.projectworlds.in/online-examination" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>

</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:green">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/logo2.png" width=100 height=100 alt="Developed by GSG IT Employees" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="go-speedy-go.com" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">GSG IT team</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 8179644048</h4>
		<h4 style="font-family:'typo' ">hr@go-speedy-go.com</h4>
		<h4 style="font-family:'typo' ">Go Speedy Go, Bhubaneshwar, Orissa</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:green;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
