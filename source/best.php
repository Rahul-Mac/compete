<?php

if(!isset($_COOKIE['user_name'])){
	header('Location:home.php');
	}
?>
<html>
<head>
<title>Compete - Profile</title>
<link rel="icon" href="Profile.png" type="image/png" sizes="16x16"></link>
<style>
input[type=date] {
  box-sizing: border-box;
  border-radius: 4px;
  border: 3px solid #a1e0ff;
  outline: none;
  width: 100%;
  padding:2px;
  font-size: 14px;
}

input[type=date]:focus {
  border: 3px solid #2088e8;
}
.myform
{
padding:10px;
width:35%;
height:50%;
margin-left:30%;
margin-top:12%;
background-color: #ebebeb;
box-shadow: 5px 5px 5px #aaaaaa;
}
.heads
{
padding:1px;	
background-color: #2088e8;
color:white;
}
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
color:white;
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
#mainpg{display:none;}
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
	cursor:pointer;
}
#btn:hover
{
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
<form action = "best_process.php" method="POST">
<div class="myform">
<div class = "heads">
<center><h1>BEST POST</h1></center>
</div>
<h3>START DATE <input type="date" id="start" name="start"></h3>
<h3>END DATE <input type="date" id="end" name="end"><h3>
<button id = "btn" >Check</button>
</form>
</div>
</body>
</html>
