<?php
$conn = mysqli_connect("localhost", "root", "root", "compete");
$flg = $_REQUEST['flg'];
if (count($_FILES) > 0) {
	if (is_uploaded_file($_FILES['pic']['tmp_name'])) {
		if ($flg == 1) {
			$uniqueId = $_REQUEST['uid'];
			$flg2 = 1;
			$query = mysqli_query($conn, "SELECT tournamentUId FROM tournament WHERE user_id=" . $_COOKIE['user_id'] . ";");
			if ($query) {
				if (mysqli_num_rows($query) > 0) {
					while ($row = mysqli_fetch_assoc($query)) {
						if ($row['tournamentUId'] == $uniqueId) {
							$flg2 = 0;
						}
					}
				}
			}
			if ($flg2 == 1) {
				$user_id = $_REQUEST['u'];
				$startDate = $_REQUEST['startDate'];
				$endDate = $_REQUEST['endDate'];
				$category = $_REQUEST['category'];
				$cap = $_REQUEST['cap'];

				$imgData = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
				$imageProperties = getimageSize($_FILES['pic']['tmp_name']);

				$query = "insert into tournament(tournamentUId,category,start_date,end_date,uploaded_file,file_type,tournament_caption,user_id) values('" . $uniqueId . "','" . $category . "','" . $startDate . "','" . $endDate . "','{$imgData}','{$imageProperties['mime']}', '" . $cap . "','" . $user_id . "');";
				$q = mysqli_query($conn, $query) or die(mysqli_error($conn)); 
				if ($q) {
					header('Location:Tournament.php');
				}
			} else {
				echo "0";
			}
		} else {
			$cap = $_POST['cap'];
			$imgData = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
			$imageProperties = getimageSize($_FILES['pic']['tmp_name']);
			$sql = "insert into upload (file, file_type, caption, user_id, user_name, time) values('{$imgData}','{$imageProperties['mime']}', '" . $cap . "', " . $_COOKIE['user_id'] . ", '" . $_COOKIE['user_name'] . "',NOW());";
			$x = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			if ($x)
				header('Location:Profile.php');
		}
	}
}
