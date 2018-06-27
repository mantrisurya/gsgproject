<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="viewport"  content="width=device-width, initial-scale=1.0">
	<title>Go Speedy Go - Recruitment</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/ >
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
	
	<link rel="icon" type="image/ico" href="favicon.ico" />

	<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
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
	color:#0bbf11;
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
	color:#0bbf11;
	border-bottom:2px solid cyan;
	transition:all 0.2s ease-in;
	padding:10px 0;
}
.btn{
	border:1.25px solid #7FFF00;
	padding:10px 30px;
	text-decoration:none;
	color:#0bbf11;
	border-radius:13px;

}
.button-awesome{
	margin-top:20px;
	margin-left: 30%;
}

.btn-full:hover{
	background-color:#7FFF00;
	font-weight: bold;
	color:black;
	
	transition:all 0.6s ease-in;
}

.text-center{
	text-align:center;
	color:#0bbf11;
}
.logo{
	margin:10px 0px 0px -1%;
	float:left;
}
.form-container{
	float:right;
	margin-top: 4%;
	border:1px solid #7FFF00;
	border-radius: 5px;
	padding:0px 0px 15px 15px;
	margin-right: 6%;
	margin-left: 6%;
	width:25%;
	-webkit-box-shadow: 1px 1px 21px 7px rgba(25,27,41,1);
-moz-box-shadow: 1px 1px 21px 7px rgba(25,27,41,1);
box-shadow: 1px 1px 21px 7px rgba(25,27,41,1);
}
.form-group{
	padding:-2px 0px 5px 6px;
	width: 96%;

}
.form-control{
	padding: 5px;
	border-radius: 5px;
	float:right;

}
.btn-default:hover{
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
	color: #0bbf11;
	margin-top:2%;
	font-size:30px;
}

.select{
	border-radius: 5px;
	padding: 5px;
	width: 100%;
}
</style>
	
	
	

</head>




<body>
	<header>

	<div class="row">
	<ul class="main-nav">
		<li><a href="http://go-speedy-go.com/contacts/">Contact Us</a></li>
	</ul>
	</div>


	<div class="hero">
	<h2 style="color: #0bbf11" >We are Hiring</h2>
	<div class="button-awesome">
	<p1 class="btn btn-full" style="color:white">New Student Registration Page</p1>
	</div>
	</div>
	<div class="logo">
	<img src="logo2.png" "/>
	</div>
  <form class="form-container" name="formcontainer" action="stuthank.php" method="post"><br><br>		 		
  	<div class="form-group">
			<div class="form-group">
              <label for="fname" style="color: #0bbf11;">First Name</label>
              <input type="text" name="fname" class="form-control" placeholder="first name"  required>
			</div>
          
          <div class="form-group">
              <label  for="lname" style="color: #0bbf11;">Last Name</label>
              <input type="text" name="lname" class="form-control" placeholder="last name"  required>
          </div>	
  <div class="form-group">
      <label for="password" style="color: #0bbf11;">Password</label>
     <input type="password" name="password" class="form-control" placeholder="number,charecter,min,6" pattern="(?=.*\d)(?=.*[a-z]).{6,}" title="Must contain at least one number and at least 6 or more characters" size="16" placeholder="Password" required>
</div>
<div class="form-group">
    <label for="password" style="color: #0bbf11;">Confirm Password</label>
     <input type="password" name="confirm_password" class="form-control" placeholder="number,charecter,min,6" pattern="(?=.*\d)(?=.*[a-z]).{6,}" title="Must contain at least one number and at least 6 or more characters" size="16" placeholder="Password" required>
  </div>
    
          <div class="form-group">
              <label for="studentID" style="color: #0bbf11;">Roll Number</label>
              <input type="text" name="studentID" class="form-control" placeholder="studentID"  required>
          </div>
          <div class="form-group">
    					<label for="collegename" style="color: #0bbf11;">College Name</label>
    					<input type="text" name="collegename" class="form-control" placeholder="college name"  required>
 		 			</div>
 		 			<div class="form-group" style="color: #0bbf11;">
    				<label for="exampleInputEmail1">Email address</label>
    				<input type="email" name="email" class="form-control" placeholder="Email"  required>
  					</div>
 		 			<div class="form-group">
              <label for="date of birth" style="color: #0bbf11">Date Of Birth</label>
              <input type="date" name="date" class="form-control" placeholder="date of birth" required>
          </div>
          <div class="branch"></div>
			<br>
          <div class="form-group">
              <label for="branch" style="color: #0bbf11;">Branch</label>       
              <select name="courses" class="select">
                <option value="branch" disabled>Plz select ur branch.</option>
              <option value="branch">CSE</option>
              <option value="branch">IT</option>
              <option value="branch">ECE</option>
              <option value="branch">EEE</option>
              <option value="branch">MECH</option>
            </select>
                      </div>
          <div class="form-group">
              <label for="courses" style="color: #0bbf11;">Course</label>        
               <select name="stream" class="select">
                <option value="branch" disabled>Plz select ur stream.</option>
              <option value="course" >M.Tech</option>
              <option value="course">B.Tech</option>
              <option value="course">Deploma</option>
              
            </select>
          </div>

         
          	<div class="form-group" style="color: #0bbf11">
    				<label for="Contact Number">Contact Number</label>
    				<input type='tel' pattern='\d{10}' title='Phone Number (Format: 99999999)' style="margin-top:5px;" name="phone" class="form-control" placeholder="Contact Number" size="16" required>
  					</div><br>

					<div class="button-awesome">
					<button type="submit" class="btn btn-full" style="color: black">Sign up</button>
					</div>
					
  					

					</form>
				
	</header>	
	<marquee class="mar">Get Hired</marquee>
<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="http://go-speedy-go.com/about-us/" target="_blank">About us</a>
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
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:#0bbf11">Developers</span></h4>
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
        <h4 class="modal-title"><span style="color:#0bbf11;font-family:'typo' ">LOGIN</span></h4>
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














