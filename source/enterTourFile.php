<?php
	$id = $_GET['f'];
	$user_id = $_GET['r'];
	$con =  mysqli_connect("localhost", "root", "root", "compete");
	$query = mysqli_query($con,"INSERT INTO tournament (file_id) VALUES ('".$_GET['f']."') where user_id = '".$_GET['r']."';");
	if ($query) 
	{
		echo 'alert("Inserted Successfully");';
	}
	else{
		 echo "Error: " . $query . "<br>" . mysqli_error($con);
	}
?>