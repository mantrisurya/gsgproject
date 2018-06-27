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
<style type="text/css">
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
	height: auto;
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
	padding:10px 10px;
	text-decoration:none;
	color:white;
	border-radius:13px;

}
.button-awesome{
	margin-top:50px;
	margin-left: 28%;
}

.btn-full:hover{
	background-color:#7FFF00;
	font-weight: bold;
	color:black;
	
	transition:all 0.6s ease-in;
}

.text-center{
	text-align:center;
	color:#7FFF00;
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
	padding:10px 0px 20px 20px;
	margin-right: 6%;
	width:30%;
	-webkit-box-shadow: 1px 1px 21px 7px rgba(25,27,41,1);
-moz-box-shadow: 1px 1px 21px 7px rgba(25,27,41,1);
box-shadow: 1px 1px 21px 7px rgba(25,27,41,1);
}
.form-group{
	padding:6px 2px 5px 6px;
	width: 90%;

}
.form-control{
	padding: 5px;
	border-radius: 5px;
	float:right;
}

.mar{
	font:bold;
	color: #7FFF00;
	margin-top:0.5%;
	font-size:30px;
}

.select{
	border-radius: 5px;
	padding: 7px;
	width: 100%;
	
}
</style>

</head>
<body>
	<header>
	
	
	<div class="row">
	<ul class="main-nav">
		<li><a href="#">Contact us</a></li>
	</ul>
	</div>


	<div class="hero">
	<h1 style="color: #7FFF00">New College Registration </h1>
	<div class="button-awesome">
	<p1 class="btn btn-full">We're Hiring</p1>
	</div>
	</div>
	<div class="logo">
	<img src="logo2.png" "/>
	</div>
		<form class="form-container" name="formcontainer" action="collegesuccess.php" method="post">
 		 			<div class="form-group">
    					<label for="collegename" style="color: #7FFF00">College Name</label>
    					<input type="text" class="form-control" name="collegename" placeholder="college name"   required>
						<br><br>
 		 			</div>
 		 			<div class="form-group" style="color: #7FFF00">
    				<label for="exampleInputEmail1">Email address</label>
    				<input type="email" class="form-control" name="email" placeholder="Email"  required ><br><br>
  					</div>
 		 			<div class="form-group">
    					<label for="Address" style="color:#7FFF00;">College Address</label>
    					<input type="text" class="form-control" name="address" placeholder="College Address" required  ><br><br>
 		 			</div>
 		 				<div class="form-group">
    					<label for="Eligible students" style="color: #7FFF00;">No. of Eligible Students</label>
    					<input type="number" class="form-control" name="eligible" placeholder="No. of Eligible students"  required  ><br><br>
 		 			</div>
 		 				
 		 				
  					<!--<div class="form-group">
    					<label for="year" style="color: white";>Established Year</label>
    					<input type="month" class="form-control" id="year" placeholder="Established Year" required >
  					</div>-->
  					<div class="form-group">
              <label for="courses" style="color: #7FFF00;">Course</label>    
              <select class="select" name="courses"  >
              <option value="cse">M.Tech</option>
              <option value="cse">B.Tech</option>
              <option value="cse">Diploma</option>
              
            </select><br>
          </div>
  				<div class="form-group" style="color: #7FFF00">
            <label for="Contact Number">Contact Number</label>
            <input type='tel' pattern='\d{10}' title='Phone Number (Format: 99999999)' class="form-control" name="contact" placeholder="Contact Number"  required><br>
            </div>
					
					<div class="button-awesome">
					<button type="submit" style="align: center; color: black" class="btn btn-full">Submit to register</button>
					</div>
					
  					

				</form>
					<marquee class="mar">Get Hired</marquee>
	</header>
	</div><div class="col-md-3"></div></div>
      </div>
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