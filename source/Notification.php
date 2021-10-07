<?php

if(!isset($_COOKIE['user_name'])){
	header('Location:home.php');
	}
?>
<html>
<head>
<title>Compete - Notifications</title>
<link rel="icon" href="bell.png" type="image/png" sizes="16x16"></link>
<link rel="stylesheet" href="../stylesheet/stylesheet.css"></link>
<style>

.prpic{ 	
	width: 5%;
	height: 7%;
	//position: relative;
	border-radius:50%;
	border: 2px solid dodgerblue;
	float: left;
}
.icon
{
	height: 30px;
	float: right;
}

.edit
{
	display: inline;
	font-size: 20px;
	height: 30px;
}

	img:hover
	{
		opacity: 0.3;
	}
	
.text{
	width:98.5%;
	background-color: white;
  	border: 1px solid #2088e8;
	color: black;
	font-size: 14px;
	float:left;
	padding: 7px;
	display: inline;
	border-radius: 4px;
	outline: none;
	height:5%;
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

<?php
$con =  mysqli_connect("localhost", "root", "root", "compete");
$qry = mysqli_query($con,"select source_id, source_name, type, link from notification where user_id = ".$_COOKIE['user_id'].";");
	if($qry)
	{
		if (mysqli_num_rows($qry) == 0) 
		{
			echo "Notification box is empty";
		}
		else
		{
			while($row = mysqli_fetch_assoc($qry))
			{
				if($row['source_id'] != $_COOKIE['user_id'])
				{
					if($row['type'] == "Liked")
					{
						echo "
						<div class=\"text\">
						<b style=\"font-size:20px;\"><a href=\"view.php?user_id=".$row['source_id']."&user_name=".$row['source_name']."\">".$row['source_name']."</a></b> ".$row['type']." your pic
						</div>
						<br><br><br>";
					}
					else if($row['type'] == "Shared")
					{
						echo "
						<div class=\"text\">
						<b style=\"font-size:20px;\"><a href=\"view.php?user_id=".$row['source_id']."&user_name=".$row['source_name']."\">".$row['source_name']."</a></b> ".$row['type']." a 
						<a href=\"".$row['link']."&user_name=".$row['source_name']."\">link</a>
						</div>
						<br><br><br>";
					}
					else
					{
						echo "
						<div class=\"text\">
						<b style=\"font-size:20px;\"><a href=\"view.php?user_id=".$row['source_id']."&user_name=".$row['source_name']."\">".$row['source_name']."</a></b> ".$row['type']." on your pic
						</div>
						<br><br><br>";
					}
				}
			}	
		}
	}
?>
</body>
</html>
