<?php
if(!isset($_COOKIE['user_id'])){header('Location:signin.php');}
$n = $_REQUEST["n"];
$i = $_REQUEST["i"];
$con = mysqli_connect("localhost", "root", "root", "compete");
$qry = mysqli_query($con, "SELECT sender_id, receiver_id, message FROM chat WHERE (sender_id = ".$_COOKIE['user_id']." AND receiver_id = ".$i.") OR (sender_id = ".$i." AND receiver_id = ".$_COOKIE['user_id'].") order by chat_id asc;");
$my = "";
if($qry)
{
	while($row = mysqli_fetch_assoc($qry))
	{
		if($row['sender_id'] == $_COOKIE['user_id'])
			$my.= "<p>".$_COOKIE['user_name']." : ".$row['message']."</p>";
		else if($row['sender_id'] == $i)
			$my.= "<p>".$n." : ".$row['message']."</p>";
	}
}
echo $my;
?>