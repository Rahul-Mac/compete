<?php
session_start();
if($_GET['name'] != "" && $_GET['link'] != "")
{
	$user_id = 0;
	$file_id = $_GET['id'];
	$type = "Shared";
	$source_id = $_COOKIE['user_id'];
	$source_name = $_COOKIE['user_name'];
	$link = $_GET['link'];
	$name = $_GET['name'];
	$connection = mysqli_connect("localhost", "root", "root", "compete");
	$query = mysqli_query($connection, "SELECT user_id FROM user where user_name = '".$name."';");
	if($query)
	{
		if(mysqli_num_rows($query) == 0)
			header('Location:'.$_SERVER["HTTP_REFERER"]);
		while($row = mysqli_fetch_assoc($query))
			$user_id = $row['user_id'];
		
		$query = mysqli_query($connection, "INSERT INTO notification (user_id, file_id, type, source_id, source_name, link) VALUES (".$user_id.", ".$file_id.", '".$type."', ".$source_id.", '".$source_name."', '".$link."');");
		if($query)
		{
			$_SESSION['signal'] = 1;
			header('Location:'.$_SERVER["HTTP_REFERER"]);
			
		}
		else
			echo mysqli_error($connection);
	}
}

else
	header('Location:'.$_SERVER["HTTP_REFERER"]);
?>