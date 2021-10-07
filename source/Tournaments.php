<?php

if (!isset($_COOKIE['user_name'])) {
	header('Location:home.php');
}
?>
<html>

<head>
	<title>Compete - Tournaments</title>
	<link rel="icon" href="cup.png" type="image/png" sizes="16x16">
	</link>
	<link rel="stylesheet" href="../stylesheet/stylesheet.css">
	</link>
	<link rel="stylesheet" type="text/css" href="../stylesheet/tournament.css">
	</link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		.prpic {
			width: 10%;
			height: 10%;
			/*position: relative;*/
			border-radius: 50%;
			border: 2px solid dodgerblue;
			float: left;
		}

		.icon {
			height: 30px;
			float: right;
		}

		.edit {
			display: inline;
			font-size: 20px;
			height: 30px;
		}

		.icon:hover {
			opacity: 0.3;
		}

		.text {
			overflow: hidden;
			background-color: lightblue;
			border: 2px solid black;
			border-radius: 5px;
			margin-top: 2%;
			padding: 0.5%;
			width: 48%;
			height: auto;
			margin-left: 27%;
		}

		.post {
			border: 2px solid dodgerblue;
			width: 30%;
			height: 60%;
			margin-left: auto;
			margin-right: auto;
			margin-top: 2%;
			background-color: #d3e4ff;
			/*padding: 1%;*/
			overflow: visible;
		}

		.post_content {
			border: 2px solid dodgerblue;
			width: 95%;
			height: 45%;
			margin-left: 2%;
			margin-top: 2%;
		}

		.uploader {
			padding: 5px;
			font-family: courier;
			font-size: 20;
			padding-top: 2%;
		}


		.ic {
			display: inline;
			width: 30px;
			height: 30px;
			float: left;
			margin-top: 3%;
			margin-left: 3%;
		}

		.count {
			display: inline;
			width: 30px;
			height: 30px;
			float: left;
			margin-top: 2%;
			padding: 15px;
		}

		.comment {
			width: 95%;
			height: 30%;
			padding-left: 4.2%;
			padding-right: 2.5%;
			position: relative;
		}

		.dropdown {
			float: right;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;

		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			height: 30px;
			width: 200px;
			text-decoration: none;
		}

		.dropdown-content a:hover {
			background-color: #ddd;
		}

		.dropdown:hover .dropdown-content {
			display: block;
			margin-top: 2.25%;
			float: left;
			margin-left: -200;
		}

		.icon {
			display: inline;
			width: 30px;
			height: 30px;
			float: right;
		}

		.icon1 {
			display: block;
			width: 30px;
			height: 30px;
			float: left;
		}

		.xyz {
			background-color: #f1f1f1;
			border: none;
			font-weight: bold;
			color: black;
			font-size: 16px;
			float: none;
			padding: 5px 5px;
			display: inline;
			font-weight: bold
		}

		.btn1 {
			background-color: white;
			border: 1px solid #2088e8;
			font-weight: bold;
			color: black;
			font-size: 16px;
			padding: 7px;
			display: inline;
			border-radius: 4px;
			outline: none;
		}

		.btn1:hover {
			background-color: #2088e8;
			border: 1px solid white;
			font-weight: bold;
			color: white;
			font-size: 16px;
			padding: 7px;
			display: inline;
			border-radius: 4px;
			box-shadow: 3px 5px gainsboro;
		}

		.textBoxSizing {
			font-family: courier;
			font-size: 20;
			padding-left: 5px;
			transition: all 0.5s ease;
		}

		.textBoxSizing:focus {
			height: 4em;
			width: 80%;
		}
.file2 {
  box-sizing: border-box;
  border-radius: 4px;
  border: 3px solid #a1e0ff;
  outline: none;
  width: 100%;
  padding:6px;
  height:60px;
  font-size: 24px;
}

.file2:focus {
  width: 100%;
  padding:6px;
  border: 3px solid #2088e8;
  height:50px;
  font-size: 24px;
}
	</style>
</head>
<body>
	<div class="container-fluid">
	<div class="header">
		<a href="home.php" class="logo">Compete</a>
		<a href="signout.php"><button type="button" class="btn" style="margin-right: 15px">Sign Out</button></a>
		<a href="best.php"><img class="icon" title="Best Post" style="margin-right: 15px" src="../icon/best.png" /></a>
		<a href="setting.php"><img class="icon" title="Settings" style="margin-right: 15px" src="../icon/set.png" /></a>
		<a href="Notification.php"><img class="icon" title="Notifications" style="margin-right: 15px" src="../icon/bell.png" /></a>
		<a href="#aa"><img class="icon" title="Upload" style="margin-right: 15px" src="../icon/upl.png" /></a>
		<a href="Tournaments.php"><img class="icon" title="Tournaments" style="margin-right: 15px" src="../icon/cup.png" /></a>
		<a href="rank.php"><img class="icon" title="Rankings" style="margin-right: 15px" src="../icon/rnk.png" /></a>
		<a href="chat.php"><img class="icon" title="Chat" style="margin-right: 15px" src="../icon/cht.png" /></a>
		<a href="profile.php"><img class="icon" title="Profile" style="margin-right: 15px" src="../icon/Profile.png" /></a>
	</div>
	<br><br>
	<div class="container">
	<div class="row1">
		<?php
		$category = array("Dancing", "Singing", "Memes", "Arts");
		$start_date = array("02 Feb, 2020", "04 Feb, 2020", "28 Feb, 2020", "29 Feb, 2020");
		$end_date = array("13 Mar, 2020", "16 Feb, 2020", "05 Mar, 2020", "15 Mar, 2020");
		$tournamentId = array("Dance01","Singing01","Memes01","Arts01");
		$con =  mysqli_connect("localhost", "root", "root", "compete");
		
		for ($i = 0; $i < 4; $i++) {
			echo "<div class=\"col-4\"><div class=\"card1\" style=\"width:100%;\">
		<h1 id=\"C${i}\">" . $category[$i] . "</h1>
		<h3>Start Date: <span id=\"S${i}\">" . $start_date[$i] . "</span></h3>
		<h3>End Date: <span id=\"E${i}\">" . $end_date[$i] . "</span></h3>
		<button class=\"btn1\" onclick=\"btnSelectCompete(${i})\" data-toggle=\"modal\" data-target=\"#selectCompete\" id=\"" . $i . "\">Apply</button>
		<button class=\"btn1\" onclick=\"viewTour(${i})\" id=\"V" . $i . "\">View</button>
		<span id=\"U".$i."\" style=\"display:none;\">".$tournamentId[$i]."</span>
		<script>
			var selectedCategory = document.getElementById(\"C".$i."\").innerHTML;
			";
			$query = mysqli_query($con, "SELECT category FROM user WHERE user_id=" . $_COOKIE['user_id'] . ";");
			if($query){
				if (mysqli_num_rows($query) == 1) {
				while ($row = mysqli_fetch_assoc($query)) {
					echo "var userCategory = \"".$row['category']."\";";
					}
				}
			}
			echo "
			if(selectedCategory != userCategory){
				document.getElementById(\"".$i."\").style.display=\"none\";
			}
			</script>
	</div></div>";
		}
		?>
		<div id="selectModal"></div>
	</div>
</div>
</div>
<div id="one"></div>
</body>
<script>
	function btnSelectCompete(id){
		var date = Date.now();
		var startDate = Date.parse(document.getElementById(`S${id}`).innerHTML);
		var endDate = Date.parse(document.getElementById(`E${id}`).innerHTML);
		if ((date >= startDate) && (date <= endDate)) {
		$("#selectModal").html(
			"<div class=\"modal fade\" id=\"selectCompete\">" +
			"<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">" +
			"<div class=\"modal-content\">" +
			"<div class=\"modal-header\">" +
			"<h5 class=\"modal-title\" id=\"uploadTitle\">" +
			"Select File </h5>" +
			"<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">" +
			"<span aria-hidden=\"true\">&times;</span>" +
			"</button>" +
			"</div><div class=\"modal-body text-center\">"+
	 "<form method=\"POST\" id=\"myForm\" enctype=\"multipart/form-data\">"+
	 "<input type=\"file\" class=\"file2\" name=\"pic\" id=\"pic\"><br><br>"+
	 "<input type=\"text\" placeholder = \"Caption...\" name=\"cap\" id=\"cap\">"+
	 "<font color = \"red\" size=\"4\"><span id=\"msg\"></span></font>"+
	 "<br><br>"+
	 "<input type=\"submit\" value=\"GO\">"+
		"</form>"+
			"</div>" +
			"</div></div></div>"
		);
		} else {
			alert("Registration for Competition is Over!!!");
		}
		$("#myForm").submit(function(e){
        e.preventDefault();
		var caption = $("#cap").val();
		var uniqueId = document.getElementById(`U${id}`).innerHTML;
		var fdata = new FormData(this);
        $.ajax({
            url: "putfile.php?flg=1&u=" + <?php echo $_COOKIE['user_id']; ?> +"&startDate=" + startDate +"&endDate=" + endDate +"&category=" + document.getElementById(`C${id}`).innerHTML+"&uid="+uniqueId+"",
            type: 'POST',
            data: fdata,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
				if(data == 0){
					alert("You Have Already register for this Tournament!!!");
					}else{
						alert(data);
					}
            }
        });
    });

	}
	function viewTour(id){
		var uniqueId = document.getElementById(`U${id}`).innerHTML;
		location.href = "tourPost.php?unique_id="+uniqueId;
	}
	/*function myCategory(id) {
		var date = Date.now();
		var startDate = Date.parse(document.getElementById(`S${id}`).innerHTML);
		var endDate = Date.parse(document.getElementById(`E${id}`).innerHTML);
		var uniqueId = document.getElementById(`U${id}`).innerHTML;
		var file = $("#pic").val();
		var caption = $("#cap").val();
		if ((date >= startDate) && (date <= endDate)) {
			var xhttp = new XMLHttpRequest();
			xhttp.open("POST","putfile.php?flg=1",true);
			//xhttp.open("POST", "tourEntry.php?u=" + <?php //echo $_COOKIE['user_id']; ?> +"&startDate=" + startDate +"&endDate=" + endDate +"&category=" + document.getElementById(`C${id}`).innerHTML+"&uid="+uniqueId+"&file="+file, true);
			xhttp.send();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					var flg = this.responseText;
					console.log(flg);
					/*if(flg == 1){
						location.href = "tourPost.php?unique_id="+uniqueId+"flg=0";
					}else{
						alert("You Already Register for the competition!!!!");
					}
				}
			}
		} else {
			alert("Registration for Competition is Over!!!");
		}
	}*/

</script>

</html>