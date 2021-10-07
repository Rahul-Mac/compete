<html>
<head>
<title>Compete - Settings</title>
<link rel="icon" href="set.png" type="image/png" sizes="16x16"></link>
<link rel="stylesheet" href="../stylesheet/stylesheet.css"></link>
<style>
.prpic{ 	
	
	margin-top: 5px;
	width: 13%;
	height: 20%;
	position: relative;
	border-radius:50%;
	border: 2px solid dodgerblue;
}

.text{
	margin-top: 1%;
	text-align: center;
}
.icon
{
	display: inline;
	width: 30px;
	height: 30px;
	float: right;
}

.edit
{
	display: inline;
	width: 30px;
	height: 30px;
	float: right;
}


	img:hover
	{/*
		-moz-box-shadow: 0 0 20px  #000080;
		-webkit-box-shadow: 0 0 20px  #000080;
		box-shadow: 0 0 20px  #000080;*/
		opacity: 0.3;
	}
	
	.text{
	width:50px;
	height:50px;
	background:#FFF;
	opacity:0;
}


.dropdown {
float:right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  height: 30px;
  width:200px;
  text-decoration: none;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;margin-top:2.25%; float:left;margin-left:-200;}


#sub {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top:-30; float:left;margin-left:-230;
  
}

#sub a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  height: 30px;
  width:200px;
}

#sub a:hover {background-color: #ddd;}

#sub1 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top:-30; float:left;margin-left:-230;
  
}

#sub1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  height: 30px;
  width:200px;
}

#sub1 a:hover {background-color: #ddd;}

.icon
{
	display: inline;
	width: 30px;
	height: 30px;
	float: right;
}
.icon1
{
	display: block;
	width: 30px;
	height: 30px;
	float: left;
}
.xyz
{
	background-color: #f1f1f1;
  	border:none;
  	font-weight: bold;
	color: black;
	font-size: 16px;
	float:none;
	padding: 5px 5px;
	display: inline;
	font-weight:bold
}
</style>
</head>
<body>
<script>
function fun()
{
var x = document.getElementById("sub");
if(x.style.display == "block")
    x.style.display = "none";
else
    x.style.display = "block";		
}
function fun1()
{
var x = document.getElementById("sub1");
if(x.style.display == "block")
    x.style.display = "none";
else
    x.style.display = "block";		
}
</script>
<div class="header">
<a href="home.php" class="logo">Compete</a>
<a href="signout.php"><button type="button" class="btn" style="margin-right: 15px">Sign Out</button></a>
<a href  ="best.php"><img class="icon" title="Best Post" style="margin-right: 15px" src="../icon/best.png"/></a>
<a href  ="setting.php"><img class="icon" title="Settings" style="margin-right: 15px" src="../icon/set.png"/></a>
<a href  ="Notification.php"><img class="icon" title="Notifications" style="margin-right: 15px" src="../icon/bell.png"/></a>
<a href  ="#aa"><img class="icon" title="Upload" style="margin-right: 15px" src="../icon/upl.png"/></a>
<a href  ="Tournaments.php"><img class="icon" title="Tournaments" style="margin-right: 15px" src="../icon/cup.png"/></a>
<a href  ="rank.php"><img class="icon" title="Rankings" style="margin-right: 15px" src="../icon/rnk.png"/></a>
<a href  ="chat.php"><img class="icon" title="Chat" style="margin-right: 15px" src="../icon/cht.png"/></a>
<a href  ="profile.php"><img class="icon" title="Profile" style="margin-right: 15px" src="../icon/Profile.png"/></a>
</div>
<br><br><br><br>
<hr>
<h3 align = left>PROFILE PICTURE	
	<a href  ="#aa">
	<img class="edit" title="Edit" style="margin-right: 15px" src="../icon/edit.png"/></a>
		</h3>
	<hr>
	
	<hr>
		<h3 align = left>USER NAME	
	<a href  ="#aa">
	<img class="edit" title="Edit" style="margin-right: 15px" src="../icon/edit.png"/></a>
		</h3> 
<hr>

<hr>
		<h3 align = left>PASSWORD	
	<a href  ="#aa">
	<img class="edit" title="Edit" style="margin-right: 15px" src="../icon/edit.png"/></a>
		</h3> 
<hr>
<hr>
		<h3 align = left>CATEGORY	
	<a href  ="#aa">
	<img class="edit" title="Edit" style="margin-right: 15px" src="../icon/edit.png"/></a>
		</h3> 
<hr>
</body>
</html>
