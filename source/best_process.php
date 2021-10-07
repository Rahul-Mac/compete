<?php
if($_POST['start'] != "" && $_POST['end'] != "")
{
	$start = $_POST['start']." 00:00:00";
	$end = $_POST['end']." 11:59:59";
	$con = mysqli_connect("localhost", "root", "root", "compete");
	$qry = mysqli_query($con, "SELECT file_id FROM upload where DATE(time) BETWEEN '".$start."' AND '".$end."';");
	$a;
	if($qry)
	{
		while($row = mysqli_fetch_assoc($qry))
		{
			$a[] = $row['file_id'];
		}
	}
	$x = 0;
	$f = 0;
	for($i=0; $i<count($a); $i++)
	{
		$qry = mysqli_query($con,"select count(like_id) from mylike where file_id = ".$a[$i].";");
		if($qry)
		{
			if (mysqli_num_rows($qry) == 0) {}
			else
			{
				while($row = mysqli_fetch_assoc($qry))
				{
					$c = $row['count(like_id)'];
					if($x < $c)
					{
						$x = $c;
						$f = $a[$i];
					}
				}
			}
		}
	}
	if($f == 0)
		$f = $a[0];
	$u = 0;
	$n = '';
	$c = '';
	$query = mysqli_query($con,"select user_id, user_name, caption from upload where file_id = ".$f.";");
	if($query) 
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$u = $row['user_id'];
			$n = $row['user_name'];
			$c = $row['caption'];
		}
		header("Location:best_post.php?file_id=".$f."&cap=".$c."&user_id=".$u."&user_name=".$n);
	}
	else
		header('Location:best.php');
}
else
	header('Location:best.php');
?>