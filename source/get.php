<?php
	$id = $_GET['id'];
	$con =  mysqli_connect("localhost", "root", "root", "compete");
	$query = "select profile_pic, profile_pic_type from user where user_id = ".$id.";";
	if ($result = mysqli_query($con, $query)) 
	{
		$row = mysqli_fetch_array($result);
		header("Content-type: ". $row["profile_pic_type"]);
		echo $row["profile_pic"];
	}
?>