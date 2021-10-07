<?php

if(!isset($_COOKIE['user_name'])){
	header('Location:home.php');
	}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
<title>Compete - Profile</title>
<link rel="icon" href="Profile.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="../stylesheet/stylesheet.css"></link>
<style>
.dropdown {
float:right;
}
#fl:hover
{opacity:0.3}

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

.dropdown:hover .dropdown-content {display: block;margin-top:3%; float:left;margin-left:-200;}


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
	font-weight:bold;
	outline:none;
}

#upload
{
	margin-top:10%;
	margin-left:30%;
	width:380px;
	border: 1px solid #ebebeb;
	background-color:#ebebeb;
	padding: 10px 10px 20px 10px;
	box-shadow: 10px 10px 5px #aaaaaa;
	/*display:none;*/
}
#modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /*Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}
#close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

#close:hover,
#close:focus {
  color: red;
  text-decoration: none;
  cursor: pointer;
}
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
	width:100%;
}
#btn:hover
{
	width:100%;
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

.btn1{
	background-color: lightgray;
  	border: 1px solid blue;
  	font-weight: bold;
	font-size: 16px;
	float:left;
	padding: 10px 15px;
	display: inline;
	border-radius: 4px;
	margin-left:45%;
	cursor: pointer;
}
.btn1:hover{
	background-color: #2088e8;
	color: white;
}
#srch
{
	margin-top:4.2%;
	margin-left:35%;
	width:30%;
	border: 1px solid #ebebeb;
	background-color:#ebebeb;
	padding: 10px 10px 20px 10px;
	box-shadow: 10px 10px 5px #aaaaaa;
	position: fixed;
	display:none;
}
#hint
{
	margin-top:9.9%;
	margin-left:35%;
	width:30%;
	border: 1px solid #ebebeb;
	background-color:#ebebeb;
	padding: 10px 10px 20px 10px;
	box-shadow: 10px 10px 5px #aaaaaa;
	position: fixed;
	display:none;
}
.mainbox
{
    height: 45%;
    width: 100%;
    margin-top: 10%;
}
.mainbox .follower{
		text-align: center;
		padding: 8px 12px;
		border: 1px solid blue;
		border-radius: 5px;
		margin-left: 44%;
		margin-right: 44%;
	}
.mainbox .follower:hover{
	background-color: blue;
	color: white;
}
</style>
</head>
<body>
<div class="header">
<a href="home.php" class="logo">Compete</a>
<a href="signout.php"><button type="button" class="btn" style="margin-right: 15px;cursor:pointer">Sign Out</button></a>
<a href  ="best.php"><img class="icon" title="Best Post" style="margin-right: 15px" src="../icon/best.png"/></a>
<a href  ="setting.php"><img class="icon" title="Settings" style="margin-right: 15px" src="../icon/set.png"/></a>
<a href  ="Notification.php"><img class="icon" title="Notifications" style="margin-right: 15px" src="../icon/bell.png"/></a>
<img class="icon" title="Upload"  onclick = "func()" style="margin-right: 15px; cursor:pointer" src="../icon/upl.png"/>
<a href  ="Tournaments.php"><img class="icon" title="Tournaments" style="margin-right: 15px" src="../icon/cup.png"/></a>
<a href  ="rank.php"><img class="icon" title="Rankings" style="margin-right: 15px" src="../icon/rnk.png"/></a>
<a href  ="chat.php"><img class="icon" title="Chat" style="margin-right: 15px" src="../icon/cht.png"/></a>
<a href  ="profile.php"><img class="icon" title="Profile" style="margin-right: 15px" src="../icon/Profile.png"/></a>

<img id = "can" class="icon" onclick="opfnd()" title="Search" style="margin-right: 15px;cursor:pointer;display:none" src="../icon/cancel.png"/>

<img id = "src" class="icon" onclick="opfnd()" title="Search" style="margin-right: 15px;cursor:pointer" src="../icon/search.png"/>
</div>

<div id="srch">
<input type="text" onkeyup="search_name(this.value)" placeholder = "Enter Name..."  id="s">
</div>
<div id = "hint">
</div>
<div class="mainbox">
<a target="_blank" href="https://www.google.com/search?q=dance+shows+in+mumbai&oq=dance+shows+&aqs=chrome.2.69i57j0l7.3223j1j7&sourceid=chrome&ie=UTF-8">
   <img src="../ads/dance/<?php echo mt_rand(1,4) ?>.jpg" width="30%" height="100%"/> </a>
    
<img style="border-radius:50%;margin-left:7%" width="25%" height="100%" src="get.php?id=<?php echo $_COOKIE['user_id']; ?>" title = <?php echo $_COOKIE['user_name']; ?> />
    
<a target="_blank" href="https://www.google.com/search?q=dance+shows+in+mumbai&oq=dance+shows+&aqs=chrome.2.69i57j0l7.3223j1j7&sourceid=chrome&ie=UTF-8">
<img style="margin-left:7%" src="../ads/dance/<?php echo mt_rand(1,4) ?>.jpg" width="30%" height="100%"/></a>
<h3 align = center><?php echo $_COOKIE['user_name']; ?></h3>
<!--Followers Span-->
<p id="followerCount" class="follower"></p>
</div>
<br><br><br><br><br><br>
    <hr>
<?php
$con =  mysqli_connect("localhost", "root", "root", "compete");
$query = mysqli_query($con,"select file_id, caption from upload where user_id = ".$_COOKIE['user_id'].";");
if($query) 
{
	if (mysqli_num_rows($query) == 0) 
	{
		echo "You have not uploaded any files.";
	}
	else
	{
		while($row = mysqli_fetch_assoc($query))
		{
			echo "<a href=\"post.php?file_id=".$row['file_id']."&cap=".$row['caption']."&user_id=".$_COOKIE['user_id']."\"><img id=\"fl\" title=\"".$row['caption']."\" src = \"userfile.php?flg=0&id=".$row['file_id']."\" width=25% height=40%></a>";
		}
	}
}

?>
<div id="modal">
<div id="upload">
	 <form method="POST" action="putfile.php?flg=0" enctype="multipart/form-data" onsubmit="return val()">
     <div class = "mytl">
	 <center>
	 <font color="white" size="5"><b >UPLOAD</b></font>
	 
	 <span onclick = "cls()" id="close">&times;</span>
	 <center>
	 </div>
	 <br>
	 <input type="file" name="pic" id="pic"><br>
	 <input type="text" placeholder = "Caption..." name="cap" id="cap">
	 <font color = "red" size="4"><span id="msg"></span></font>
	 <br><br>
	 <input type="submit" id="btn" value="GO">
	 <br><br>
	 </form>
	</div>
</div>
<script>

$(window).on("load",function(){
	<?php
		$con = mysqli_connect("localhost", "root", "root", "compete");
		$query = "select count(followers_id) from follower where followers_id=".$_COOKIE['user_id'].";";
		$qry = mysqli_query($con,$query);
		if($qry){
			if (mysqli_num_rows($qry) == 0){
			echo "document.getElementById(\"followerCount\").innerHTML = \"Followers :- 0\";";
		}
		else{
			while($row = mysqli_fetch_assoc($qry))
			{
				echo "document.getElementById(\"followerCount\").innerHTML = \"Followers :- ".$row['count(followers_id)']."\";";
			}
		}
	}
	?>
});

function func()
{
	var x = document.getElementById("modal");
	x.style.display = "block";	
}
function cls()
{
	var x = document.getElementById("modal");
	x.style.display = "none";	
}
function opfnd(){
	
	if(document.getElementById("srch").style.display == "none")
	{
		document.getElementById("srch").style.display="block";
		$("#srch").fadeIn();
		$("#srch").fadeIn("slow");
		$("#srch").fadeIn(3000);
		document.getElementById("src").style.display="none";
		document.getElementById("can").style.display="block";
	}
	else
	{
		document.getElementById("srch").style.display="none";
		document.getElementById("src").style.display="block";
		document.getElementById("can").style.display="none";
	}
}
function search_name(s)
{
	if(s.length == 0)
	{
		document.getElementById("hint").style.display = "none";
		document.getElementById("hint").innerHTML = "";
		return;
	}
	if(s.length > 20)
	{
		document.getElementById("hint").innerHTML = "Search cannot be more than 20 characters";
		return;
	}
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "search_name.php?q="+s, true);
	xhttp.send();  
  
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("hint").style.display = "block";
			document.getElementById("hint").innerHTML = this.responseText;
		}
	}
}

</script>
</body>
</html>