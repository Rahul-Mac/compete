<?php

if(!isset($_COOKIE['user_name'])){
	header('Location:home.php');
	}
?>
<html>
<head>
<title>Compete - Best Post</title>
<link rel="icon" href="Profile.png" type="image/png" sizes="16x16"></link>
<style>

body 
{
  	font-family:sans-serif;
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
}
.header a.logo 
{
  	font-size: 30px;
  	font-weight: bold;
	color: white;
	border-radius: 4px;
	background-image: linear-gradient(-5deg, #2088e8, #a1e0ff);
	padding:10px;
}
a {text-decoration: none;} 

.header button.btn 
{
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
.header button.btn:hover 
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
.icon:hover
	{/*
		-moz-box-shadow: 0 0 20px  #000080;
		-webkit-box-shadow: 0 0 20px  #000080;
		box-shadow: 0 0 20px  #000080;*/
		opacity: 0.3;
	}

/*
	img:hover
	{/*
		-moz-box-shadow: 0 0 20px  #000080;
		-webkit-box-shadow: 0 0 20px  #000080;
		box-shadow: 0 0 20px  #000080;*/
		opacity: 0.3;
	}*/
	
	.text{
	width:50px;
	height:50px;
	background:#FFF;
	opacity:0;
}

.post
{
padding:10px;
width:35%;
height:70%;
margin-left:30%;
margin-top:12%;
background-color: #ebebeb;
box-shadow: 5px 5px 5px #aaaaaa;
}
.post_content
{
height:70%;
margin-top:2%;
}
.uploader
{
padding:15px;	
background-color: #2088e8;
}


.ic{
	display: inline;
	width: 30px;
	height: 30px;
	float: left;
	margin-top:5%;
	margin-left:3%;
}
.ic1{
	display: none;
	width: 30px;
	height: 30px;
	float: left;
	margin-top:5%;
	margin-left:3%;
}
.count{
	display: inline;
	width: 30px;
	height: 30px;
	float: left;
	margin-top:3%;
	padding:15px;
}


.dropdown2 {
float:right;
}

.dropdown-content2 {
  display: none;
  position: absolute;`
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  float: right;
  
}

.dropdown-content2 a {
  color: black;
  padding: 5px 16px;
  background-color: #d3e4ff;
  text-decoration: none;
  display: block;
  font-size: 16px;
  height: 20px;
  width:100px;
  border: 2px solid dodgerblue;
}

.dropdown-content2 a:hover {background-color: #ddd;}

.dropdown2:hover .dropdown-content2 {display: block;margin-top:2.25%; float:right;margin-left:-110;}


#prpic{ 	
	width:5%;
	height: 5%;
	position:relative;
	border-radius:50%;
}

#prpic:hover{ 	
	width:15%;
	height: 28%;
	margin-left:-50px;
	margin-top:-50px;
	position:absolute;
	border-radius:50%;
	box-shadow: 5px 5px 5px #a1e0ff;
	-webkit-transition: 0.5s;
	transition: 0.5s;
}


.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */

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
  border: 10px solid #ebebeb;
  box-shadow: 5px 5px 5px #aaaaaa;
}

/* The Close Button */
.close {
  color: white;
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
background-color: #2088e8;
 color: white;
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
#snd
{
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
#snd:hover
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
	outline: none;
}

#snd1
{
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
#snd1:hover
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
	outline: none;
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
textarea {
  box-sizing: border-box;
  border: 3px solid dodgerblue;
  border-radius: 4px;
  resize: none;
  font-family:sans-serif;
}
#shr{display:none;}
input[type=text] {
  width: 100%;
  padding:6px;
  border: 3px solid #2088e8;
  height:50px;
  font-size: 24px;
}
select {
  width: 30%;
  padding:6px;
  border: 3px solid #2088e8;
  height:6%;
  font-size: 20px;
}
</style>
</head>
<body onload="check_likes()">
<div class="header">
<a href="home.php" class="logo">Compete</a>
<a href="signout.php"><button type="button" class="btn" style="margin-right: 15px;cursor:pointer">Sign Out</button></a>
<a href  ="best.php"><img class="icon" title="Best Post" style="margin-right: 15px" src="../icon/best.png"/></a>
<a href  ="setting.php"><img class="icon" title="Settings" style="margin-right: 15px" src="../icon/set.png"/></a>
<a href  ="Notification.php"><img class="icon" title="Notifications" style="margin-right: 15px" src="../icon/bell.png"/></a>
<a href  ="#aa"><img class="icon" title="Upload" style="margin-right: 15px" src="../icon/upl.png"/></a>
<a href  ="Tournaments.php"><img class="icon" title="Tournaments" style="margin-right: 15px" src="../icon/cup.png"/></a>
<a href  ="rank.php"><img class="icon" title="Rankings" style="margin-right: 15px" src="../icon/rnk.png"/></a>
<a href  ="chat.php"><img class="icon" title="Chat" style="margin-right: 15px" src="../icon/cht.png"/></a>
<a href  ="profile.php"><img class="icon" title="Profile" style="margin-right: 15px" src="../icon/Profile.png"/></a>
<img class="icon" title="Search" style="margin-right: 15px" src="../icon/search.png"/>
</div>
<div class = "post">
<div class = "uploader">
<?php
if($_COOKIE['user_id'] == $_GET['user_id']){
	echo "<a href = \"Profile.php\"><img id=\"prpic\" style=\"cursor:pointer\" src=\"get.php?id=".$_GET['user_id']."\"></a>";
}
else{
	echo "<a href = \"view.php?user_id=".$_GET['user_id']."&user_name=".$_GET['user_name']."\"><img id=\"prpic\" style=\"cursor:pointer\" src=\"get.php?id=".$_GET['user_id']."\"></a>";
}
?>

<font color="white"><b><?php echo $_GET['cap']; ?></b></font>
</div>
<div class = "post_content">

<?php
echo "<img src = \"userfile.php?id=".$_GET['file_id']."\" style=\"width:100%;height:100%;\">";
?>
</div>
<div class = "opt">

<span id="like" onclick="myfunc()" style="cursor:pointer">
<img class="ic" title="Like" src="../icon/like.png"/>
<span id = "cntlk" class="count"></span></span>
<span id="liked" onclick="myfun()" style="cursor:pointer">
<img class="ic" title="Unlike" src="../icon/liked.png"/>
<span  class="count" id = "cntlkd"></span></span>	
	
<img id="cmt" class="ic" title="Comment" src="../icon/cht.png" style="cursor:pointer" onclick="show()"/>
<span id="cntcmt" class="count">124</span>
<span onclick="openit()" style="cursor:pointer">
<img class="ic" style="cursor:pointer" title="Share" src="../icon/share.png"/>
</span>
<span style="cursor:pointer">
<img class="ic"  style="cursor:pointer; margin-left:40px" title="Report" src="../icon/report.png"/>
</span>
</div>
</div>

<div id="shr" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span onclick = "cls1()" class="close">&times;</span>
      <h2>SHARE POST</h2>
    </div>
	<div class="modal-footer">
	<br>
	
      <input type ="text" id= "txt"  value= <?php echo "localhost".$_SERVER['REQUEST_URI']; ?> readonly><br>
	  <font size="5" color ="black"><p>Number of people to send <select name="catg" onchange="pick(this)">
	  <option selected disabled>--Select--</option>
  <option value="one">1</option>
  <option value="two">2</option>
  <option value="three">3</option>
  
  
</select></p></font><br><span id="entry"></span><br>
		<button  id="snd1" style="cursor:pointer" >Send</button>
		<br><br>
    </div>
</div>
</div>






<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header" id="mydivheader" style="cursor:grab">
      <span onclick = "cls()" class="close">&times;</span>
      <h2>COMMENTS</h2>
    </div>
	<div class="modal-footer">
	<br>
	
      <textarea id= "mycomment" class="ta" placeholder="Enter Comment..." rows="4" cols="55"></textarea>
		<button id="snd"  onclick="comment()" style="cursor:pointer">Send</button>
		<br><br>
    </div>
    <div id = "com_sec" class="modal-body">
	<p>Derek: Bad Pic :( </p>
    </div>
    
  </div>
</div>

<script>
 function check_likes()
 {
	var x = "";
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "check_like.php?file_id="+<?php echo $_GET['file_id']; ?>, true);
	xhttp.send();  
  
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			x  = this.responseText;
			if(x[0] == "y")
			{
				document.getElementById("cntlkd").innerHTML = x.slice(1);
				document.getElementById("liked").style.display = "block";
				document.getElementById("like").style.display = "none";
			}
			if(x[0] == "n")
			{
				document.getElementById("cntlk").innerHTML = x.slice(1);
				document.getElementById("like").style.display = "block";
				document.getElementById("liked").style.display = "none";
			}
		}
	}
 }


//Make the DIV element draggagle:
dragElement(document.getElementById("myModal"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById("mydivheader")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById("mydivheader").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
	document.getElementById("mydivheader").style.cursor = "grabbing";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
	document.getElementById("mydivheader").style.cursor = "grab";
  }
}


function pick(x)
{
	var entries = "";
	var i = 0;
	if(x.value == "one")
	{
		for(i=0; i<1; i++)
		{
			entries += "<input type =\"text\"  id= \"p"+i+"\"><br><br>";
		}
		document.getElementById("entry").innerHTML = entries;
		document.getElementById("snd1").style.display = "inline";
	}
	if(x.value == "two")
	{
		for(i=0; i<2; i++)
		{
			entries += "<input type =\"text\"  id= \"p"+i+"\"><br><br>";
		}
		document.getElementById("entry").innerHTML = entries;
		document.getElementById("snd1").style.display = "inline";
	}
	if(x.value == "three")
	{
		for(i=0; i<3; i++)
		{
			entries += "<input type =\"text\"  id= \"p"+i+"\"><br><br>";
		}
		document.getElementById("entry").innerHTML = entries;
		document.getElementById("snd1").style.display = "inline";
	}
}
function myfunc()
{

	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "likeit.php?f="+<?php echo $_GET['file_id']; ?>+"&u="+<?php echo $_COOKIE['user_id'];?>+"&r="+<?php echo $_GET['user_id']; ?>, true);
	xhttp.send();  
  
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("cntlkd").innerHTML = this.responseText;
		}
	}
	document.getElementById("like").style.display = "none";
	document.getElementById("liked").style.display = "block";
}
function myfun()
{
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "unlikeit.php?f="+<?php echo $_GET['file_id']; ?>+"&u="+<?php echo $_COOKIE['user_id'];?>, true);
	xhttp.send();  
  
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("cntlk").innerHTML = this.responseText;
		}
	}
	document.getElementById("like").style.display = "block";
	document.getElementById("liked").style.display = "none";
}
function show()
{
	document.getElementById("myModal").style.display = "block";
	setInterval(function(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("com_sec").innerHTML = this.responseText;
		}
	}
	xhttp.open("GET", "comment.php?f="+<?php echo $_GET['file_id']; ?>, true);
	xhttp.send(); 
	}, 1);
}
function comment()
{
	var c = document.getElementById("mycomment").value;
	document.getElementById("mycomment").value = "";
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "send_comment.php?f="+<?php echo $_GET['file_id']; ?>+"&c="+c+"&r="+<?php echo $_GET['user_id']; ?>, true);
	xhttp.send();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("com_sec").innerHTML = this.responseText;
		}
	
	};
}

	setInterval(function(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("cntcmt").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "count_comment.php?f="+<?php echo $_GET['file_id']; ?>, true);
	xhttp.send();
	}, 1);


function cls()
{
	document.getElementById("myModal").style.display = "none";
}
function openit()
{
	document.getElementById("shr").style.display = "block";
}
function cls1()
{
	document.getElementById("shr").style.display = "none";
}

	
</script>
</body>
</html>
