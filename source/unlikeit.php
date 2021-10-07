<?php
$f = $_REQUEST['f'];
$u = $_REQUEST['u'];
$x = "delete from notification where source_id = ".$u." and file_id = ".$f.";";
$con =  mysqli_connect("localhost", "root", "root", "compete");
$qry = "delete from mylike where user_id = ".$u." and file_id = ".$f.";";
if(mysqli_query($con, $qry))
{
	$qry = mysqli_query($con,"select count(like_id) from mylike where file_id = ".$f.";");
	if($qry)
	{
		if(mysqli_query($con, $x)){}
		
		if (mysqli_num_rows($qry) == 0) 
		{
			echo "0";
		}
		else
		{
			while($row = mysqli_fetch_assoc($qry))
			{
				echo $row['count(like_id)'];
			}
		}
	}
}
?>