<?php
	$con = mysqli_connect("localhost", "root", "root", "compete");
	session_start();
	if(mysqli_query($con, "insert into user (user_name, password, category, email_id, log) values ('".$_SESSION['user']."', '".md5($_SESSION['pass'])."', '".$_SESSION['catg']."', '".$_SESSION['email']."', 1);"))
	{
		$qry = mysqli_query($con,"SELECT user_name,user_id FROM user where user_name = '".$_SESSION['user']."';");
		if($qry)
		{
			while($row = mysqli_fetch_assoc($qry))
			{
				if($row['user_name'] == $_SESSION['user'])
				{
					setcookie('user_name', $_SESSION['user'], time() + (86400 * 30));
					setcookie('user_id', $row['user_id'], time() + (86400 * 30));
					session_destroy();
					header('Location:pic.php');
				}
			}
		}
	}
	else
		echo mysqli_error($con);
			
?>