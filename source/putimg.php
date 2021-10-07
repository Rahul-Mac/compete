<?php
$conn = mysqli_connect("localhost", "root", "root", "compete");
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['pic']['tmp_name'])) {
    $imgData =addslashes(file_get_contents($_FILES['pic']['tmp_name']));
	$imageProperties = getimageSize($_FILES['pic']['tmp_name']);
	$sql = "update user set profile_pic_type = '{$imageProperties['mime']}' , profile_pic = '{$imgData}' where user_id = ".$_COOKIE['user_id'].";";
	$x = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	if($x)
		header('Location:Profile.php');	
}
}
?>