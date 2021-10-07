<?php
if(!isset($_POST["user"]))
	header('Location:home.php');
session_start();
$_SESSION['user'] = $_POST["user"];
$_SESSION['email'] = $_POST["email"];
$_SESSION['pass'] = $_POST["pass"];
$_SESSION['catg'] = $_POST["catg"];
$con = mysqli_connect("localhost", "root", "root", "compete");
$qry = mysqli_query($con,"SELECT user_name FROM user;");
if($qry)
{
	while($row = mysqli_fetch_assoc($qry))
	{
		if($row['user_name'] == $_SESSION['user'])
		{
			$_SESSION['error'] = "USERNAME ALREADY EXISTS";
			header('Location:signup.php'); 
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.jpg" type="image/jpg" sizes="16x16"></link>
<style>
body{
	 background: white;
	font-family:sans-serif;
	font-weight:bold;
	font-size:16px;
}
#frm{
	margin-top:100px;
	margin-left:300px;
	width:380px;
	border: 1px solid #ebebeb;
	background-color:#ebebeb;
	padding: 10px 10px 20px 10px;
	box-shadow: 10px 10px 5px #aaaaaa;
}
#btn{
	background-color: white;
  	border: 1px solid #2088e8;
  	font-weight: bold;
	color: black;
	font-size: 16px;
	float:right;
	padding: 7px;
	display: inline;
	border-radius: 4px;
	outline: none;
}
#btn:hover
{
	background-color: #2088e8;
  	border: 1px solid white;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:right;
	padding: 7px;
	display: inline;
	border-radius: 4px;
}

.header 
{
  	background-color:#ebebeb;
	padding: 15px;
	box-shadow: 5px 5px 5px #aaaaaa;
	top:0;
	margin-left:-8px;
	width:98.5%;
	position: fixed;
}
.header a:hover.logo 
{
	color: white;
		background-image: linear-gradient(-50deg, #2088e8, #a1e0ff);
		border-radius: 4px;
		padding:10px;
		text-decoration: none;
}
.header a.logo 
{
  	font-size: 30px;
  	font-weight: bold;
	color: white;
	border-radius: 4px;
	background-image: linear-gradient(-5deg, #2088e8, #a1e0ff);
	padding:10px;
	text-decoration: none;
}
a {text-decoration: outline;} 
a:link {
  color:#a1e0ff;
}
a:visited {
  color: purple;
}

a:hover {
  color: #2088e8;
}
.header button.btn 
{
	background-color: dodgerblue;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:right;
	padding: 7px;
	display: inline;
	background-image: linear-gradient(-5deg, #2088e8, #a1e0ff);
	border-radius: 4px;
	outline: none;

}
.header button.btn:hover 
{
	background-color: white;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:right;
	padding: 7px;
	display: inline;
	background-image: linear-gradient(-50deg, #2088e8, #a1e0ff);
	border-radius: 4px;
}


.error {color: #FF0000;}

input[type=text] {
  box-sizing: border-box;
  border-radius: 4px;
  border: 3px solid #a1e0ff;
  outline: none;
  width: 100%;
  padding:6px;
  height:50px;
  font-size: 24px;
}

input[type=text]:focus {
  width: 100%;
  padding:6px;
  border: 3px solid #2088e8;
  height:50px;
  font-size: 24px;
}

input[type=number] {
  box-sizing: border-box;
  border-radius: 4px;
  border: 3px solid #a1e0ff;
  outline: none;
  width: 89%;
  padding:3px;
  height:35px;
  font-size: 24px;
}

input[type=number]:focus {
  width: 89%;
  padding:3px;
  border: 3px solid #2088e8;
  height:35px;
  font-size: 24px;
}

input[type=password] 
{
  box-sizing: border-box;
  border-radius: 4px;
  border: 3px solid #a1e0ff;
  outline: none;
  width: 100%;
  padding:6px;
  height:50px;
  font-size: 24px;
}

input[type=password]:focus {
  width: 100%;
  padding:6px;
  border: 3px solid #2088e8;
  height:50px;
  font-size: 24px;
}


select {
  width: 100%;
  padding:6px;
  border: 3px solid #a1e0ff;
  height:50px;
  font-size: 24px;

}
select:focus {
  width: 100%;
  padding:6px;
  border: 3px solid #2088e8;
  height:50px;
  font-size: 24px;
}

option 
{
width: 100%;
  padding:6px;
  border: 3px solid #2088e8;
  height:50px;
  font-size: 24px;
}
.mytl
{
padding:15px;	
background-color: #2088e8;
}
#sh{  background-image: url('shown.svg');
background-position: right; 
cursor: pointer;
  background-repeat: no-repeat ;
  }
#res{color:#2088e8;cursor:pointer}
#res:hover{color:blue;cursor:pointer}
</style>
   <title>Compete - OTP</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<a href="home.php" class="logo">COMPETE</a>
</div>
<div id=frm>
<form action="send.php" method="POST">
<div class = "mytl">
	 <center>
	 <font color="white" size="5"><b >OTP</b></font>
	 <center>
	 </div>
	 <br>
<font  size="3">We have sent you an OTP on your given email id.</font><br><br>
<input type="number" autocomplete="off" placeholder="OTP" value= <?php echo mt_rand(111111,999999) ?> name="otp" />
<input type="submit" id="btn" value="OK"  /><br><br>
<span id="res"><font size="2">Resend OTP</font></span>
</form>
</div>
</body>
</html>