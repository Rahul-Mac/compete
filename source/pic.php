<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.jpg" type="image/jpg" sizes="16x16"></link>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
	float:left;
	padding: 7px;
	display: inline;
	border-radius: 4px;
	outline: none;
	width:50%;
}
#btn:hover
{
	width:50%;
	background-color: #2088e8;
  	border: 1px solid white;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:left;
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

input[type=file] {
  box-sizing: border-box;
  border-radius: 4px;
  border: 3px solid #a1e0ff;
  outline: none;
  width: 100%;
  padding:6px;
  height:50px;
  font-size: 24px;
  background-color: white;
}

input[type=file]:focus {
	background-color: white;
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
</style>
   <title>Compete - Create An Account</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<a href="home.php" class="logo">COMPETE</a>
</div>
    <div id=frm>
	 <form method="POST" action="putimg.php" enctype="multipart/form-data" onsubmit="return val()">
     <div class = "mytl">
	 <center>
	 <font color="white" size="5"><b >PROFILE PICTURE</b></font>
	 <center>
	 </div>
	 <br>
	 <input type="file" name="pic" id="pic">
	 <font color = "red" size="4"><span id="msg"></span></font>
	 <br><br>
	 <input type="submit" id="btn" value="GO">
	 <a href = "Profile.php"><button id="btn">LATER</button></a>
	 <br><br>
	 </form>
	</div>
<script>
function val()
{
	var pic = document.getElementById("pic");
	if (pic.files.length == 0)
	{
		document.getElementById("msg").innerHTML = "*file not selected";
		return false;
	}
	{
		document.getElementById("msg").innerHTML = "";
		return true;
	}
}
</script>
</body>
</html>