<?php
	$user = $_POST["u"];
	$pass = md5($_POST["p"]);
	if($user == "" || $pass == "")
	{
		header('Location:signin.php');
	}
	else
	{
		$con = mysqli_connect("localhost", "root", "root", "compete");
		$qry = mysqli_query($con, "SELECT user_id, user_name, password FROM user;");
		if($qry)
		{
			while($row = mysqli_fetch_assoc($qry))
			{	
				if($row['user_name'] == $user && $row['password'] == $pass)
				{
					setcookie('user_id', $row['user_id'], time() + (86400 * 30));
					setcookie('user_name', $user, time() + (86400 * 30));
					if(mysqli_query($con, "UPDATE user SET log = 1 WHERE  user_id = ".$row['user_id'].";"))
					{
						header('Location:Profile.php');
					}
				}
			}
			session_start();
			$_SESSION['error'] = "Invalid Credentials";
			header('Location:signin.php');
		}
	}
?>