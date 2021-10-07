<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.jpg" type="image/jpg" sizes="16x16"></link>
<link rel="stylesheet" href="../stylesheet/stylesheet.css"></link>
   <title>Compete - Create An Account</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<a href="home.php" class="logo">COMPETE</a>
</div>
    <div id=frm>
     <form name="myfrm"  action="proc.php" onsubmit="return val()" method="POST">
	 <div class = "mytl">
	 <center>
	 <font color="white" size="5"><b >SIGN UP</b></font>
	 <center>
	 </div>
	   <p>
			<input type="text" autocomplete="off" placeholder="Username" name="user" />
			<font color = "red" size="4"><span id="umsg"><?php echo $_SESSION['error']; ?></span></font>
		 </p>
		 <p>
			<input type="text" autocomplete="off"  placeholder="Email" name="email" />
			<font color = "red" size="4"><span id="emsg"></span></font>
		 </p>
			<select name="catg" id="catg">
			<option value="none" selected disabled>--Select--</option>
  <option value="Dancing">Dancing</option>
  <option value="Singing">Singing</option>
  <option value="Memes">Memes</option>
  <option value="Fitness">Fitness</option>
  <option value="Food" >Food</option>
  <option value="Roast" >Comedy</option>
</select>
<font color = "red" size="4"><span id="cmsg"></span></font>
		 <p>
			<input type="password" placeholder="Password" id="sh"  name="pass"/>
			<font color = "red" size="4"><span id="pmsg"></span></font>
		 </p>
		 <p>
			<input type="password" id = "sh" placeholder="Confirm Password"  name="conf"/><span class="error"></span>
		 <font color = "red" size="4"><span id="cpmsg"></span></font>
		 </p>
		 <p>
		 <br>
			<input type="submit" id="btn" value="Sign Up" />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="signin.php"><font size="2">Account already exists?</font></a>
		 </p>
		 <br>

     </form>	 
	
	</div>
<script>
function has_special_char(x)
{
	var special = "*|,\":<>[]{}`\';()@&$#%_";
	var i;
	for(i=0; i<x.length; i++)
		if (special.indexOf(x.charAt(i)) != -1)
			return true;
	return false;
	
}
function has_special_char2(x)
{
	var special = "* |,\":<>[]{}`\';()@&$#%_";
	var i;
	for(i=0; i<x.length; i++)
		if (special.indexOf(x.charAt(i)) != -1)
			return true;
	return false;
	
}
function check_selection()
{
	var c = document.getElementById("catg");
	if(c.selectedIndex <=0)
		return true;
	return false;

}
function val()
{
	var flg = 0;
	
	var user = document.forms["myfrm"]["user"];
	var email = document.forms["myfrm"]["email"];
	var pass = document.forms["myfrm"]["pass"];
	var conf = document.forms["myfrm"]["conf"];
	if(user.value == "")
	{
		document.getElementById("umsg").innerHTML = "*username cannot be empty";
		flg = 1;
	}
	else if(user.value.length < 6)
	{
		document.getElementById("umsg").innerHTML = "*username cannot be less than 6 characters";
		flg = 1;
	}
	else if(has_special_char(user.value))
	{
		document.getElementById("umsg").innerHTML = "*username contains special characters";
		flg = 1;
	}	
	else
	{
		document.getElementById("umsg").innerHTML = "";
	}
	
	if(email.value == "")
	{
		document.getElementById("emsg").innerHTML = "*email cannot be empty";
		flg = 1;
	}
	else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)))
	{
		document.getElementById("emsg").innerHTML = "*email address is invalid";
		flg = 1;
	}
	else
	{
		document.getElementById("emsg").innerHTML = "";
	}
	if(check_selection())
	{
		document.getElementById("cmsg").innerHTML = "*please select a category";
		flg = 1;
	}
	else
	{
		document.getElementById("cmsg").innerHTML = "";
	}
	
	if(pass.value == "")
	{
		document.getElementById("pmsg").innerHTML = "*password cannot be empty";
		flg = 1;
	}
	else if(pass.value.length < 6)
	{
		document.getElementById("pmsg").innerHTML = "*password cannot be less than 6 characters";
		flg = 1;
	}
	else if(has_special_char2(pass.value))
	{
		document.getElementById("pmsg").innerHTML = "*password contains special characters";
		flg = 1;
	}	
	else
	{
		document.getElementById("pmsg").innerHTML = "";
	}
	
	if(conf.value == "")
	{
		document.getElementById("cpmsg").innerHTML = "*password cannot be empty";
		flg = 1;
	}
	else if(conf.value.length < 6)
	{
		document.getElementById("cpmsg").innerHTML = "*password cannot be less than 6 characters";
		flg = 1;
	}
	else if(has_special_char2(conf.value))
	{
		document.getElementById("cpmsg").innerHTML = "*password contains special characters";
		flg = 1;
	}	
	else
	{
		document.getElementById("cpmsg").innerHTML = "";
	}
	if(pass.value != conf.value)
	{
		document.getElementById("cpmsg").innerHTML = "*passwords do not match";
		flg = 1;
	}
	else
	{
		document.getElementById("cpmsg").innerHTML = "";
	}
	if (flg == 1)
		return false;
	else
		return true;
}
</script>
</body>
</html>