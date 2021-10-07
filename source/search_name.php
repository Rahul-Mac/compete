<?php

if(!isset($_COOKIE['user_name']))
	header('Location:home.php');

$con = mysqli_connect("localhost", "root", "root", "compete");
$qry = mysqli_query($con, "SELECT user_id, user_name FROM user where user_id != ".$_COOKIE['user_id'].";");
if($qry)
{
	while($row = mysqli_fetch_assoc($qry))
	{
		$a[] = $row['user_id'];
		$b[] = $row['user_name'];
	}
}
$q = $_REQUEST["q"];
$hint = 0;
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    for($i=0; $i<count($a); $i++) 
	{ 
        if (stristr($q, substr($b[$i], 0, $len))) 
		{
            
                $n[] = $b[$i];
				$x[] = $a[$i];
				$hint = 1;
        }
    }
}

 if($hint == 0)
	echo "\"".$q."\" does not exist :(";
else
	func($x, $n);
	
function func($x, $n)
{
	$s = "";
	for($i=0; $i<count($x); $i++)
	{
		$s .= "<a href = \"view.php?user_id=$x[$i]&user_name=$n[$i]\">$n[$i]</a><hr>";
	}
	echo $s;
}	
?>