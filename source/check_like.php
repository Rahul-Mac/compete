<?php
$con =  mysqli_connect("localhost", "root", "root", "compete");
$flg = $_GET['flg'];
if($flg == 0){
$qry = mysqli_query($con,"select user_id from mylike where user_id = ".$_COOKIE['user_id']." and file_id = ".$_GET['file_id'].";");
if($qry)
{
	if (mysqli_num_rows($qry) == 0) 
	{
		$qry = mysqli_query($con,"select count(like_id) from mylike where file_id = ".$_GET['file_id'].";");
		if($qry)
		{
			if (mysqli_num_rows($qry) == 0) 
			{
				echo "n0";
			}
			else
			{
				while($row = mysqli_fetch_assoc($qry))
				{
					echo "n".$row['count(like_id)'];
				}
			}
		}
	}
	else
	{
		$qry = mysqli_query($con,"select count(like_id) from mylike where file_id = ".$_GET['file_id'].";");
		if($qry)
		{

				while($row = mysqli_fetch_assoc($qry))
				{
					echo "y".$row['count(like_id)'];
				}
		
		}
	}
}
}else{
$qry = mysqli_query($con,"select user_id from tournamentlikes where user_id = ".$_COOKIE['user_id']." and tournament_file_id = ".$_GET['file_id'].";");
if($qry)
{
	if (mysqli_num_rows($qry) == 0) 
	{
		$qry = mysqli_query($con,"select count(likeid) from tournamentlikes where tournament_file_id = ".$_GET['file_id'].";");
		if($qry)
		{
			if (mysqli_num_rows($qry) == 0) 
			{
				echo "n0";
			}
			else
			{
				while($row = mysqli_fetch_assoc($qry))
				{
					echo "n".$row['count(likeid)'];
				}
			}
		}
	}
	else
	{
		$qry = mysqli_query($con,"select count(likeid) from mylike where tournament_file_id = ".$_GET['file_id'].";");
		if($qry)
		{

				while($row = mysqli_fetch_assoc($qry))
				{
					echo "y".$row['count(likeid)'];
				}
		
		}
	}
}
}
?>