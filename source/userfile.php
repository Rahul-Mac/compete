<?php
	$flg = $_GET['flg'];
	$con =  mysqli_connect("localhost", "root", "root", "compete");

	if($flg==0){
	$id = $_GET['id'];
	$query = "select file, file_type from upload where file_id = ".$id.";";
	if ($result = mysqli_query($con, $query)) 
	{
		$row = mysqli_fetch_array($result);
		header("Content-type: ". $row["file_type"]);
		echo $row["file"];
	}
}else if($flg==1){
	$Tid = $_GET['Tid'];
	$uniqueId = $_GET['uniqueId'];
	$query = "select uploaded_file, file_type from tournament where tournament_id = ".$Tid.";";
	if ($result = mysqli_query($con, $query)) 
	{
		$row = mysqli_fetch_array($result);
		header("Content-type: ". $row["file_type"]);
		echo $row["uploaded_file"];
	}
}
?>