<?php
session_start();
if(isset($_COOKIE['user_name']))
{
	header('Location:Profile.php');
}
if(!isset($_SESSION['error']))
{
	header('Location:home.php');
}	

?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.jpg" type="image/jpg" sizes="16x16"></link>
<link rel="stylesheet" href="../stylesheet/stylesheet.css"></link>
   <title>Compete - Sign In</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="header">
<a href="home.php" class="logo" title="Compete">COMPETE</a>
</div>
    <div id=frm>
     <form name = "myfrm" action="process.php" onsubmit="return val()" method="POST">
	 <div class = "mytl">
	 <center>
	 <font color="white" size="5"><b >SIGN IN</b></font>
	 <center>
	 </div>
	 <font color = "red" size="4"><span id="res"><?php echo $_SESSION['error']; ?></span></font>
	   <p>
<input type="text" id="user" placeholder="Username" autocomplete="off" name="u" />
		</p>
		 <font color = "red" size="4"><span id="nmsg"></span></font>
		 <p>
			<input type="password" id="pass" placeholder="Password" name="p"/>
		
		 </p>
		  <font color = "red" size="4"><span id="pmsg"></span></font>
		 <p>
		 <br><br>
			<input type="submit" id="btn"  value="Sign In" />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="home.php"><font size="2">Forgot Password?</font></a>
		 </p>

     </form>	 
	
	</div>
<script>
function val()
{
	var flg = 0;
	var user = document.forms["myfrm"]["user"];
	var pass = document.forms["myfrm"]["pass"];
	if(user.value == "")
	{
		document.getElementById("nmsg").innerHTML = "username cannot be empty";
		flg = 1;
	}
	else if(user.value.length < 6)
	{
		document.getElementById("nmsg").innerHTML = "username cannot be less than 6 characters";
		flg = 1;
	}
	else
	{
		document.getElementById("nmsg").innerHTML = "";
	}
	
	if(pass.value == "")
	{
		document.getElementById("pmsg").innerHTML = "password cannot be empty";
		flg = 1;
	}
	else if(pass.value.length < 6)
	{
		document.getElementById("pmsg").innerHTML = "password cannot be less than 6 characters";
		flg = 1;
	}
	else
	{
		document.getElementById("pmsg").innerHTML = "";
	}
	if (flg == 1)
		return false;
	else
		return true;
}
</script>
</body>
</html>