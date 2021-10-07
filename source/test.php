<html>
<head>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<?php
if(!isset($_COOKIE['user_name'])){header('Location:signin.php');}
$con = mysqli_connect("localhost", "root", "root", "compete");
$qry = mysqli_query($con, "SELECT user_id, user_name, log FROM user where user_id != ".$_COOKIE['user_id'].";");
if($qry)
{
	while($row = mysqli_fetch_assoc($qry))
	{
		$a[] = $row['user_id'];
		$b[] = $row['user_name'];
		$c[] = $row['log'];
	}
}
$q = $_REQUEST["q"];
$hint = 0;
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    for($i=0; $i<count($a); $i++) 
	{ 
        if (stristr($q, substr($b[$i], 0, $len))) 
		{
            
                $h[] = $b[$i];
				$p[] = $a[$i];
				$s[] = $c[$i];
				$hint = 1;
        }
    }
}

 if($hint == 0){ echo "<h1> \"".$q."\" does not exist :(</h1>"; }else{ func($h, $p, $s) ;}
?>
<style>
.customers {
  font-family: sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 2px solid black;
  padding: 8px;
}

.customers tr
{ 
background-color:#ebebeb;
box-shadow: 5px 5px 5px #aaaaaa;
}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2088e8;
  color: white;
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

textarea {
  box-sizing: border-box;
  border: 3px solid dodgerblue;
  border-radius: 4px;
  resize: none;
  font-family:sans-serif;
}

.btn
{
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
}
.btn:hover
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
<?php

function func($h, $p, $c)
{
	$o = "<table class=\"customers\" id=\"employee_table\">
  <tr>
  <th>USER</th>
  <th>STATUS</th>
    <th>      </th>
  </tr>";$i=0;
	foreach($h as $x){
		
		
  $o.= "

  <tr>
    <td>".$x."</a>";
	if($c[$i] == 1)
		$o.= " <td><font color=\"green\">Online</font>";
	else if($c[$i] == 0)
		$o.= " <td><font color=\"red\">Offline</font>";
	$o.= "
    <td><button class=\"btn\" onclick = \"myclk".$p[$i]."()\">Chat</button>
	</tr>
";
$i++;}
$o.="</table>";

$i=0;
	foreach($h as $x){
$o.="
<div id=\"myModal".$p[$i]."\" class=\"modal\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <span onclick = \"cls".$p[$i]."()\" class=\"close\">&times;</span>
      <h2>CHAT BOX</h2>
    </div>
    <div id = \"mes".$p[$i]."\" class=\"modal-body\">
    </div>
    <div class=\"modal-footer\">
	<br>
	
      <textarea id= \"txt".$p[$i]."\" class=\"ta\" placeholder=\"Enter Message...\" rows=\"4\" cols=\"55\"></textarea>
		<button onclick= \"send".$p[$i]."()\">Send</button>
		<br><br>
    </div>
  </div>
</div>";

$i++;}

$o.="<script>";
for($f=0;$f<count($p);$f++)
  {
$o.="var modal".$p[$f]." = document.getElementById(\"myModal".$p[$f]."\");

function myclk".$p[$f]."() 
{ 
	modal".$p[$f].".style.display = \"block\";
	setInterval(function(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById(\"mes".$p[$f]."\").innerHTML = this.responseText;
			var scl = document.getElementById(\"mes".$p[$f]."\");
		}
	
	};
	
	xhttp.open(\"GET\", \"myscr.php?i=".$p[$f]."&n=".$h[$f]."\", true);
	xhttp.send();
	}, 1);
}

function send".$p[$f]."()
{
	//modal".$p[$f].".style.display = \"block\";
	
	var xhttp = new XMLHttpRequest();
	var t = document.getElementById(\"txt".$p[$f]."\").value;

	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById(\"mes".$p[$f]."\").innerHTML = this.responseText;
		}
	};
	
	xhttp.open(\"GET\", \"abcd.php?q=\"+t+\"&i=".$p[$f]."&n=".$h[$f]."\", true);
	xhttp.send();
}
";
  
$o.="
function cls".$p[$f]."() {
  modal".$p[$f].".style.display = \"none\";
}
if (modal".$p[$f].".style.display == \"block\")
{
	document.getElementById(\"mes".$p[$f]."\").innerHTML += \"FIGHT CLUB\";
}


  ";
  }
  $o.=" </script>";
	echo $o;
}
?>

</body>
</html>