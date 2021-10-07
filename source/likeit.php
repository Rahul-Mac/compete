<?php
$f = $_REQUEST['f'];
$u = $_REQUEST['u'];
$n = $_COOKIE['user_name'];
$r = $_REQUEST['r'];

$x= "insert into notification (user_id, file_id, type, source_id, source_name) values (".$r.",".$f.",'Liked',".$u.",'".$n."');";

$con =  mysqli_connect("localhost", "root", "root", "compete");
$qry = "insert into mylike (file_id, user_id) values (".$f.", ".$u.");";
if(mysqli_query($con, $qry))
{
	$qry = mysqli_query($con,"select count(like_id) from mylike where file_id = ".$f.";");
	if($qry)
	{
		if (mysqli_num_rows($qry) == 0) 
		{
			echo "0";
		}
		else
		{
			if(mysqli_query($con, $x)){}
			
			while($row = mysqli_fetch_assoc($qry))
			{
				echo $row['count(like_id)'];
			}
		}
	}
}
?>