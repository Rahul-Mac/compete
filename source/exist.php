<?php 

	$u = $_REQUEST['u'];
	$con = mysqli_connect("localhost", "root", "root", "compete");
	$qry = mysqli_query($con,"SELECT user_name FROM user;");
	$flg = 0;
	if($qry)
	{
		while($row = mysqli_fetch_assoc($qry))
		{
			if($row['user_name'] == $u)
			{
				$flg = 1;
				break;
			}
		}
	}
	echo $flg;
?>