<?php
$con =  mysqli_connect("localhost", "root", "root", "compete");
$qry = mysqli_query($con,"select user_name, comment from comment where file_id = ".$_GET['f'].";");
if($qry)
{
	while($row = mysqli_fetch_assoc($qry))
	{
		echo "<p>".$row['user_name']." : ".$row['comment']."</p>";
	}
}
?>