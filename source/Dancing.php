<html>
<head>
<title>Compete - Rankings</title>
<link rel="icon" href="Profile.png" type="image/png" sizes="16x16">
<style>
body 
{
	padding: 1%;
  	font-family:sans-serif;
}
.header 
{	overflow: hidden;
  	background-color:#d3e4ff;
	padding: 20px 10px;
	border: 1% solid dodgerblue;
	border-radius: 10px;
}
.header a:hover.logo 
{
	color: black;
	//background-color:dodgerblue;
}
.header a.logo 
{
  	font-size: 30px;
  	font-weight: bold;
	color: dodgerblue;
}
a {text-decoration: none;} 

.header button.btn 
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
.header button.btn:hover 
{
	background-color: white;
  	border: none;
  	font-weight: bold;
	color: black;
	font-size: 16px;
	//float:right;
	padding: 5px 5px;
	display: inline;
}
.b
{
	background-color: dodgerblue;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	//margin-left: 100%;
	padding: 5px 5px;
	display: inline;

}
.b:hover 
{
	background-color: white;
  	border: none;
  	font-weight: bold;
	color: black;
	font-size: 16px;
	margin-left: 100%;
	padding: 5px 5px;
	display: inline;
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

.prpic{ 	
	width: 11.5%;
	height: 30%;
	//position: relative;
	border-radius:50%;
	border: 2px solid dodgerblue;
	float: left;
}
.text{
	overflow: hidden;
	margin-top: 2%;
	//margin-left: 30%;
	padding: 0.5%;
}
#more{
	display: none;
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
<a href="#sign"><button type="button" class="btn" style="margin-right: 15px">Sign Out</button></a>
<div class="dropdown">
<a><img class="icon1" title="Options" style="margin-right: 15px" src="opt.png"/></a>
<div class="dropdown-content">
<a href  ="best.php"><B>BEST POST</B><img class="icon" title="Best Post"  src="best.png"/></a>
<a href  ="setting.php"><B>SETTINGS</B><img class="icon" title="Settings"  src="set.png"/></a>
<a href  ="Notification.php"><b>NOTIFICATIONS</b><img class="icon" title="Notifications" src="bell.png"/></a>
<a href  ="#aa"><B>UPLOAD</B><img class="icon" title="Upload"  src="upl.png"/></a>
<button id = "b" onclick="fun()" class="xyz"><b>< TOURNAMENTS<b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img class="icon" title="Tournaments"  src="cup.png"/></button>
<div id="sub">
<a href  ="Tournaments.php?name=DANCING"><B>DANCING</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="Tournaments.php?name=SINGING"><B>SINGING</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="Tournaments.php?name=MEMES"><B>MEMES</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="Tournaments.php?name=FITNESS"><B>FITNESS</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="Tournaments.php?name=FOOD"><B>FOOD</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="Tournaments.php?name=SPORTS"><B>SPORTS</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="Tournaments.php?name=ACTING"><B>ACTING</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="Tournaments.php?name=STAND"><B>STAND UP COMEDY</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="Tournaments.php?name=ROAST"><B>ROAST (COMEDY)</B><img class="icon" title="Tournaments" src="cup.png"/></a>
</div><br>
<button id = "b1" onclick="fun1()" class="xyz"><b>< RANKING<b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img class="icon" title="Ranking"  src="rnk.png"/></button>
<div id="sub1">
<a href  ="rank.php?name=DANCING"><B>DANCING</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="rank.php?name=SINGING"><B>SINGING</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="rank.php?name=MEMES"><B>MEMES</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="rank.php?name=FITNESS"><B>FITNESS</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="rank.php?name=FOOD"><B>FOOD</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="rank.php?name=SPORTS"><B>SPORTS</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="rank.php?name=ACTING"><B>ACTING</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="rank.php?name=STAND"><B>STAND UP COMEDY</B><img class="icon" title="Tournaments" src="cup.png"/></a>
<a href  ="rank.php?name=ROAST"><B>ROAST (COMEDY)</B><img class="icon" title="Tournaments" src="cup.png"/></a>
</div>
<a href  ="chat.php"><B>CHAT</B><img class="icon" title="Chat"  src="cht.png"/></a>
<a href  ="profile.php"><B>PROFILE</B><img class="icon" title="Profile"  src="Profile.png"/></a>
</div>
</div>
</div>
<h1 align=center>Dancing</h1>
<?php
for($i=0; $i<3; $i++)
{ echo"
<table cellpadding=\"5px\" cellspacing=\"10px\" align=\"center\" border=\"3px\" width=\"40%\" style=\"margin-top:10px;\" bgcolor=\"#d3e4ff\">
<tr height=\"100px\"><td style=\"font-size: 20px;\">
<div class=\"text\">
<a href=\"#aa\" style=\"margin-left: 15px;\">
<img class=\"prpic\" src=\"download.jpg\" title =\"Sam Sam\"/>
<p style=\"margin-top: 3%; margin-left: 13%;\">ncvksdkvn sasvdvz</p></a>
<p style=\"margin-top: 5%; margin-left: 5%;\">Follower 1k &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Tournaments Rankings "; echo $i+1;
echo"
</div>
</tr>
</table>
";
}
?>
<p>
<span id="dots">
</span>
<span id="more">
<?php
for($i=1; $i<=5; $i++)
{ echo"
<table cellpadding=\"5px\" cellspacing=\"10px\" align=\"center\" border=\"3px\" width=\"40%\" style=\"margin-top:10px;\" bgcolor=\"#d3e4ff\">
<tr height=\"100px\"><td style=\"font-size: 20px;\">
<div class=\"text\">
<a href=\"#aa\" style=\"margin-left: 15px;\">
<img class=\"prpic\" src=\"download.jpg\" title =\"Sam Sam\"/>
<p style=\"margin-top: 3%; margin-left: 13%;\">ncvksdkvn sasvdvz</p></a>
<p style=\"margin-top: 5%; margin-left: 5%;\">Follower 1k &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Tournaments Rankings "; echo $i;
echo"  
</div>
</tr>
</table>
";}
?>
</span></p>
<button class="b" onClick="myFunction()" id="myBtn" style="margin-left: 48%; margin-top: 10px;" >Load More</button>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display == "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>


</body>
</html>