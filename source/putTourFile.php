<?php
$conn = mysqli_connect("localhost", "root", "root", "compete");
$cap = $_POST['cap'];
$unique_id = $_GET['unique_id'];
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['pic']['tmp_name'])) {
    $imgData =addslashes(file_get_contents($_FILES['pic']['tmp_name']));
	$imageProperties = getimageSize($_FILES['pic']['tmp_name']);
    $sql = "insert into upload (file, file_type, caption, user_id, user_name, time) values('{$imgData}','{$imageProperties['mime']}', '".$cap."', ".$_COOKIE['user_id'].", '".$_COOKIE['user_name']."',NOW());";
	$x = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    
    $query = mysqli_query($conn,"select file_id, time from upload where user_id=".$_COOKIE['user_id'].";");
    if($query){
        while($row = mysqli_fetch_assoc($query)){
            
        }
    }
    
    if($x)
		header('Location:Profile.php');	
}
}
?>