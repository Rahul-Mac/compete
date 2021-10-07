<?php
if(!isset($_COOKIE['user_name'])){
	header('Location:home.php');
	}
?>
<html>
<head>
<title>Compete - Chat</title>
<link rel="icon" href="cht.png" type="image/png" sizes="16x16">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<link rel="stylesheet" href="../stylesheet/stylesheet.css"></link>           
<style>



.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
  position: relative;
  margin-left:250;
  margin-top:100;
  bottom: 0;
  background-color: #fefefe;
  width: 50%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s;
  border: 3px solid dodgerblue;
}

/* The Close Button */
.close {
  color: dodgerblue;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #d3e4ff;
  color: dodgerblue;
}

.modal-body {
	padding: 2px 16px;
	overflow-y: scroll;
	height:300;
	}

.modal-footer {
  padding: 2px 16px;
  background-color: #d3e4ff;
  color: dodgerblue;
  overflow:auto;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}


.modal-footer button
{
	background-color: dodgerblue;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:right;
	padding: 5px 5px;
	display: inline;
}
.modal-footer button:hover
{
	background-color: white;
  	border: none;
  	font-weight: bold;
	color: black;
	font-size: 16px;
	float:right;
	padding: 5px 5px;
	display: inline;
}
.prpic{ 	
	margin-left: 44% ;
	margin-top: 50px;
	width: 11%;
	height: 22%;
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
textarea {
  box-sizing: border-box;
  border: 3px solid dodgerblue;
  border-radius: 4px;
  resize: none;
  font-family:sans-serif;
}


.btns
{
	background-color: dodgerblue;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:left;
	padding: 7px;
	display: inline;
	background-image: linear-gradient(-5deg, #2088e8, #a1e0ff);
	border-radius: 4px;
	outline: none;

}
.btns:hover 
{
	background-color: white;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:left;
	padding: 7px;
	display: inline;
	background-image: linear-gradient(-50deg, #2088e8, #a1e0ff);
	border-radius: 4px;
}
.myInput {
  //background-image: url('../icon/search.png');
  background-position: 1px ;
  background-repeat:  no-repeat ;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-bottom: 12px;
  background-color: white;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}


</style>
</head>
<body>
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

<?php echo "<h1>WELCOME, ".$_COOKIE["user_name"]."</h1>"; ?>
<input type="text" id="search" onkeyup = "gethint(this.value)" class="myInput" placeholder="Search for names.." title="Type in a name" name="search">
<br>

<span id="hint"></span>


<script>

function gethint(s)
{
	if(s.length == 0)
	{
		document.getElementById("hint").innerHTML = "";
		return;
	}
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "test.php?q="+s, true);
  xhttp.send();  
  
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("hint").innerHTML = this.responseText;
			
			var scripts = document.getElementById("hint").getElementsByTagName("script");   
			var scriptsClone = [];
			for (var i = 0; i < scripts.length; i++) 
			{
				scriptsClone.push(scripts[i]);
			}
			for (var i = 0; i < scriptsClone.length; i++) 
			{
				var currentScript = scriptsClone[i];
				var s = document.createElement("script");
				for (var j = 0; j < currentScript.attributes.length; j++) 
				{
					var a = currentScript.attributes[j];
					s.setAttribute(a.name, a.value);
				}
				s.appendChild(document.createTextNode(currentScript.innerHTML));
				currentScript.parentNode.replaceChild(s, currentScript);
			}  
		}	
	}; 
}
</script>
</body>
</html>
