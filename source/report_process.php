<?php
if($_GET['repselect'] != "" && $_GET['link'] != "")
{
    session_start();
	$_SESSION['success'] = 0;
	$reason = $_GET['repselect'];  
	$link = $_GET['link']; 
	$source_id = $_COOKIE['user_id'];
	if($reason == "Other")
	{
		if($_GET['othrep'] == "")
        {
            $_SESSION['success'] = 999;
			header('Location:'.$_SERVER["HTTP_REFERER"]);
        }
		else
		{
			$reason = $_GET['othrep'];
			execute($source_id, $link, $reason);
			header('Location:'.$_SERVER["HTTP_REFERER"]);
		}
	}
	else
	{
		execute($source_id, $link, $reason);
		header('Location:'.$_SERVER["HTTP_REFERER"]);
	}
}
else
	header('Location:'.$_SERVER["HTTP_REFERER"]);

function execute($source_id, $link, $reason)
{
	$con = mysqli_connect("localhost", "root", "root", "compete");
	$qry = mysqli_query($con, "INSERT INTO report (source_id, link, reason) VALUES (".$source_id.",'".$link."','".$reason."');");
	if($qry)
		$_SESSION['success'] = 1;
	else
		$_SESSION['success'] = 999;
}
?>