<?php
$f = $_GET['f'];
$r = $_GET['r'];
$x = "insert into notification (user_id, file_id, type, source_id, source_name) values (".$r.",".$f.",'Commented',".$_COOKIE['user_id'].",'".$_COOKIE['user_name']."');";

$con =  mysqli_connect("localhost", "root", "root", "compete");
$qry = mysqli_query($con,"insert into comment (file_id, user_id, user_name, comment) values (".$f.",".$_COOKIE['user_id'].",'".$_COOKIE['user_name']."','".$_GET['c']."');");
if($qry)
{
	
	$qury = mysqli_query($con,"select user_name, comment from comment where file_id = ".$f.";");
	if($qury)
	{
		if(mysqli_query($con, $x)){}
		while($row = mysqli_fetch_assoc($qury))
	    {
			echo "<p>".$row['user_name']." : ".$row['comment']."</p>";
		}
	}
}
?>