<?php
$con =  mysqli_connect("localhost", "root", "root", "compete");
$f = $_REQUEST["f"];
$qry = mysqli_query($con,"select count(comment_id)  from comment where file_id = ".$f.";");
	if($qry)
	{
		
		if (mysqli_num_rows($qry) == 0) 
		{
			echo "0";
		}
		else
		{
			while($row = mysqli_fetch_assoc($qry))
			{
				echo $row['count(comment_id)'];
			}
		}
	}
?>