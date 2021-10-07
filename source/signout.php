<?php
if(!isset($_COOKIE['user_name']))
	header('Location:signin.php');

$connection = mysqli_connect("localhost", "root", "root", "compete");
$query = "UPDATE user SET log = 0 WHERE  user_id = ".$_COOKIE['user_id'].";";
if(mysqli_query($connection, $query))
{
	setcookie('user_id', false);
	setcookie('user_name', false);
	header('Location:home.php');
}
?>