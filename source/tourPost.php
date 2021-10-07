<?php

if (!isset($_COOKIE['user_name'])) {
	header('Location:home.php');
}
?>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Compete - Profile</title>
	<link rel="icon" href="Profile.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="../stylesheet/stylesheet.css">
	</link>
	<style>
		.dropdown {
			float: right;
		}

		#fl:hover {
			opacity: 0.3
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
			margin-top: 3%;
			float: left;
			margin-left: -200;
		}


		#sub {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
			margin-top: -30;
			float: left;
			margin-left: -230;

		}

		#sub a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			height: 30px;
			width: 200px;
		}

		#sub a:hover {
			background-color: #ddd;
		}

		#sub1 {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
			margin-top: -30;
			float: left;
			margin-left: -230;

		}

		#sub1 a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			height: 30px;
			width: 200px;
		}

		#sub1 a:hover {
			background-color: #ddd;
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
			font-weight: bold;
			outline: none;
		}

		#upload {
			margin-top: 10%;
			margin-left: 30%;
			width: 380px;
			border: 1px solid #ebebeb;
			background-color: #ebebeb;
			padding: 10px 10px 20px 10px;
			box-shadow: 10px 10px 5px #aaaaaa;
			/*display:none;*/
		}

		#modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/*Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
			-webkit-animation-name: fadeIn;
			/* Fade in the background */
			-webkit-animation-duration: 0.4s;
			animation-name: fadeIn;
			animation-duration: 0.4s
		}

		#close {
			color: white;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		#close:hover,
		#close:focus {
			color: red;
			text-decoration: none;
			cursor: pointer;
		}

		input[type=file] {
			box-sizing: border-box;
			border-radius: 4px;
			border: 3px solid #a1e0ff;
			outline: none;
			width: 100%;
			padding: 6px;
			height: 50px;
			font-size: 24px;
			background-color: white;
		}

		input[type=file]:focus {
			background-color: white;
			width: 100%;
			padding: 6px;
			border: 3px solid #2088e8;
			height: 50px;
			font-size: 24px;
		}

		#btn {
			background-color: white;
			border: 1px solid #2088e8;
			font-weight: bold;
			color: black;
			font-size: 16px;
			float: left;
			padding: 7px;
			display: inline;
			border-radius: 4px;
			outline: none;
			width: 100%;
		}

		#btn:hover {
			width: 100%;
			background-color: #2088e8;
			border: 1px solid white;
			font-weight: bold;
			color: white;
			font-size: 16px;
			float: left;
			padding: 7px;
			display: inline;
			border-radius: 4px;
		}

		.btn1 {
			background-color: lightgray;
			border: 1px solid blue;
			font-weight: bold;
			font-size: 16px;
			float: left;
			padding: 10px 15px;
			display: inline;
			border-radius: 4px;
			margin-left: 45%;
			cursor: pointer;
		}

		.btn1:hover {
			background-color: #2088e8;
			color: white;
		}

		#srch {
			margin-top: 4.2%;
			margin-left: 35%;
			width: 30%;
			border: 1px solid #ebebeb;
			background-color: #ebebeb;
			padding: 10px 10px 20px 10px;
			box-shadow: 10px 10px 5px #aaaaaa;
			position: fixed;
			display: none;
		}

		#hint {
			margin-top: 9.9%;
			margin-left: 35%;
			width: 30%;
			border: 1px solid #ebebeb;
			background-color: #ebebeb;
			padding: 10px 10px 20px 10px;
			box-shadow: 10px 10px 5px #aaaaaa;
			position: fixed;
			display: none;
		}

		.mainbox {
			height: 45%;
			width: 100%;
			margin-top: 10%;
		}

		.mainbox .follower {
			text-align: center;
			padding: 8px 12px;
			border: 1px solid blue;
			border-radius: 5px;
			margin-left: 44%;
			margin-right: 44%;
		}

		.mainbox .follower:hover {
			background-color: blue;
			color: white;
		}

		.post {
			padding: 10px;
			width: 35%;
			height: 70%;
			margin-left: 30%;
			margin-top: 8%;
			background-color: #ebebeb;
			box-shadow: 5px 5px 5px #aaaaaa;
			display: inline-block;
		}

		.post_content {
			height: 70%;
			margin-top: 2%;
		}

		.uploader {
			padding: 15px;
			background-color: #2088e8;
		}

		.ic {
			display: inline;
			width: 30px;
			height: 30px;
			float: left;
			margin-top: 5%;
			margin-left: 3%;
		}
	</style>
</head>

<body>
	<div class="container m-0">
		<div class="header">
			<a href="home.php" class="logo">Compete</a>
			<a href="signout.php"><button type="button" class="btn" style="margin-right: 15px;cursor:pointer">Sign Out</button></a>
			<a href="best.php"><img class="icon" title="Best Post" style="margin-right: 15px" src="../icon/best.png" /></a>
			<a href="setting.php"><img class="icon" title="Settings" style="margin-right: 15px" src="../icon/set.png" /></a>
			<a href="Notification.php"><img class="icon" title="Notifications" style="margin-right: 15px" src="../icon/bell.png" /></a>
			<a href="Tournaments.php"><img class="icon" title="Tournaments" style="margin-right: 15px" src="../icon/cup.png" /></a>
			<a href="rank.php"><img class="icon" title="Rankings" style="margin-right: 15px" src="../icon/rnk.png" /></a>
			<a href="chat.php"><img class="icon" title="Chat" style="margin-right: 15px" src="../icon/cht.png" /></a>
			<a href="profile.php"><img class="icon" title="Profile" style="margin-right: 15px" src="../icon/Profile.png" /></a>

			<img id="can" class="icon" onclick="opfnd()" title="Search" style="margin-right: 15px;cursor:pointer;display:none" src="../icon/cancel.png" />

			<img id="src" class="icon" onclick="opfnd()" title="Search" style="margin-right: 15px;cursor:pointer" src="../icon/search.png" />
		</div>
	</div>
	<div id="srch">
		<input type="text" onkeyup="search_name(this.value)" placeholder="Enter Name..." id="s">
	</div>
	<div id="hint">
	</div>

	<!--Top Raking Will Come here--->


	<!-- Post Content -->
	<?php
	$uniqueId = $_GET['unique_id'];
	$con =  mysqli_connect("localhost", "root", "root", "compete");
	$query = mysqli_query($con, "select tournament_id, tournament_caption, user_id from tournament where tournamentUId='" . $uniqueId . "' order by tournament_id desc;");
	if ($query) {
		while ($row = mysqli_fetch_array($query)) {
	echo "<div class=\"post\" onload=\"check_likes(".$row['tournament_id'].")\">";
			echo "<div class=\"uploader\">";
			echo "<font color=\"white\"><b>" . $row['tournament_caption'] . "</div></b>
		<div class=\"post_content\">
			<img src =\"userfile.php?flg=1&Tid=" . $row['tournament_id'] . "&uniqueId=" . $uniqueId . "\" style=\"width:100%;height:100%;\">
		</div>
		<div class=\"opt\">
			<span id=\"l".$row['tournament_id']."\" onclick=\"myfunc(".$row['tournament_id'].")\" style=\"cursor:pointer\">
				<img class=\"ic\" title=\"Like\" src=\"../icon/like.png\" />
				<span id=\"cntlk\" class=\"count\"></span></span>
			<span id=\"un".$row['tournament_id']."\" onclick=\"myfun(".$row['tournament_id'].")\" style=\"cursor:pointer\">
				<img class=\"ic\" title=\"Unlike\" src=\"../icon/liked.png\" />
				<span class=\"count\" id=\"cntlkd\"></span></span>
			<img id=\"cmt\" class=\"ic\" title=\"Comment\" src=\"../icon/cht.png\" style=\"cursor:pointer\" onclick=\"show()\" />
			<span id=\"cntcmt\" class=\"count\"></span>
			<span onclick=\"openit()\" style=\"cursor:pointer\">
				<img class=\"ic\" style=\"cursor:pointer\" title=\"Share\" src=\"../icon/share.png\" />
			</span>
			<span style=\"cursor:pointer\">
				<img class=\"ic\" onclick=\"opnrep()\" style=\"cursor:pointer; margin-left:40px;\" title=\"Report\" src=\"../icon/report.png\" />
			</span>
		</div><br><br>";
		}
	} else {
		echo "not working";
	}
	?>

	</div>
	<div id="shr" class="modal">
		<div class="modal-content">
			<div class="modal-header">
				<span onclick="cls1()" class="close">&times;</span>
				<h2>SHARE POST</h2>
			</div>
			<div class="modal-footer">
				<br><br>
				<form action="share_file.php" method="GET">
					<input type="text" autocomplete="off" name="name" id="name" onkeyup="search_name(this.value)" placeholder="Enter Name...">
					<input type="text" style="display:none;" id="link" name="link" value=<?php echo str_replace("localhost:8080//compete/source/", "", $_SERVER['REQUEST_URI']); ?> readonly><br>
					<input type="text" style="display:none;" id="id" name="id" value=<?php echo $_GET['file_id'] ?> readonly><br>
					<div id="hint">
					</div>
					<br><br>
					<input type="submit" value="Send" id="snd1" style="cursor:pointer;display:inline;">
				</form>
				<br><br><br>
			</div>
		</div>
	</div>

	<div id="myModal" class="modal">
		<div class="modal-content">
			<div class="modal-header" id="mydivheader" style="cursor:grab">
				<span onclick="cls()" class="close">&times;</span>
				<h2>COMMENTS</h2>
			</div>
			<div class="modal-footer">
				<br>

				<textarea id="mycomment" class="ta" placeholder="Enter Comment..." rows="4" cols="55"></textarea>
				<button id="snd" onclick="comment()" style="cursor:pointer">Send</button>
				<br><br>
			</div>
			<div id="com_sec" class="modal-body">
			</div>

		</div>
	</div>


	<?php
	if (isset($_SESSION['signal'])) {
		if ($_SESSION['signal'] == 1) {
			echo "
<div id=\"message\" class=\"modal\" style=\"display:block\">
	<div class=\"modal-content\">
		<div class=\"modal-header\" id=\"mydivheader\">
			<span onclick = \"clsmsg()\" class=\"close\">&times;</span>
			<h2>MESSAGE</h2>
		</div>
		<div class=\"modal-footer\">
			<h3><font color=\"black\">Link Shared Successfully</font></h3>
		</div>
	</div>
</div>";
			$_SESSION['signal'] = 0;
		}
	}

	if (isset($_SESSION['success'])) {
		if ($_SESSION['success'] == 1 || $_SESSION['success'] == 999) {
			$s .= "
<div id=\"clsr\" class=\"modal\" style=\"display:block\">
	<div class=\"modal-content\">
		<div class=\"modal-header\" id=\"mydivheader\">
			<span onclick = \"clsrepmes()\" class=\"close\">&times;</span>
			<h2>MESSAGE</h2>
		</div>
		<div class=\"modal-footer\">";

			if ($_SESSION['success'] == 1)
				$s .= "<h3><font color=\"black\">Report Sent Successfully</font></h3>";
			else if ($_SESSION['success'] == 999)
				$s .= "<h3><font color=\"red\">Error occured while sending report!</font></h3>";

			$s .= "</div></div></div>";

			echo $s;
			$_SESSION['success'] = 0;
		}
	}

	?>

	<div id="report" class="modal">
		<div class="modal-content">
			<div class="modal-header">
				<span onclick="clsrep()" class="close">&times;</span>
				<h2>REPORT</h2>
			</div>
			<div class="modal-footer">
				<br><br>
				<form action="report_process.php" method="GET">
					<select id="repselect" name="repselect" onchange="selected_option()">
						<option selected disabled>-- Select --</option>
						<option value="Sexually Explicit">Sexually Explicit</option>
						<option value="Offensive">Offensive</option>
						<option value="Plagiarized">Plagiarized</option>
						<option value="Other">Other</option>
					</select><br><br>
					<textarea id="othrep" name="othrep" style="display:none;width:100%;font-size:16px;" class="ta" placeholder="Enter the complaint..." rows="4" cols="55"></textarea>
					<input type="text" style="display:none;" id="link" name="link" value=<?php echo $_SERVER['REQUEST_URI']; ?> readonly><br>
					<input type="submit" value="Send" id="snd1" style="cursor:pointer;display:inline;">
				</form>
				<br><br><br>
			</div>
		</div>
	</div>
</body>

<script>
function clsrepmes() {
			document.getElementById("clsr").style.display = "none";
		}

		function selected_option() {
			var option = document.getElementById("repselect").value;
			if (option == "Other")
				document.getElementById("othrep").style.display = "block";
			else
				document.getElementById("othrep").style.display = "none";
		}

		function clsrep() {
			document.getElementById("report").style.display = "none";
		}

		function opnrep() {
			document.getElementById("report").style.display = "block";
		}

		function clsmsg() {
			document.getElementById("message").style.display = "none";
		}

		function search_name(s) {
			if (s.length == 0) {
				document.getElementById("hint").style.display = "none";
				document.getElementById("hint").innerHTML = "";
				return;
			}
			if (s.length > 20) {
				document.getElementById("hint").innerHTML = "Search cannot be more than 20 characters";
				return;
			}
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "shrnm.php?q=" + s, true);
			xhttp.send();

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("hint").style.display = "block";
					document.getElementById("hint").innerHTML = this.responseText;

					var scripts = document.getElementById("hint").getElementsByTagName("script");
					var scriptsClone = [];
					for (var i = 0; i < scripts.length; i++) {
						scriptsClone.push(scripts[i]);
					}
					for (var i = 0; i < scriptsClone.length; i++) {
						var currentScript = scriptsClone[i];
						var s = document.createElement("script");
						for (var j = 0; j < currentScript.attributes.length; j++) {
							var a = currentScript.attributes[j];
							s.setAttribute(a.name, a.value);
						}
						s.appendChild(document.createTextNode(currentScript.innerHTML));
						currentScript.parentNode.replaceChild(s, currentScript);
					}
				}
			}
		}

		function check_likes(id) {
			var x = "";
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "check_like.php?flg=1&file_id=" + id, true);
			xhttp.send();

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					x = this.responseText;
					if (x[0] == "y") {
						document.getElementById("cntlkd").innerHTML = x.slice(1);
						document.getElementById(`un${id}`).style.display = "block";
						document.getElementById(`l${id}`).style.display = "none";
					}
					if (x[0] == "n") {
						document.getElementById("cntlk").innerHTML = x.slice(1);
						document.getElementById(`l${id}`).style.display = "block";
						document.getElementById(`un${id}`).style.display = "none";
					}
				}
			}
		}


		//Make the DIV element draggagle:
		dragElement(document.getElementById("myModal"));

		function dragElement(elmnt) {
			var pos1 = 0,
				pos2 = 0,
				pos3 = 0,
				pos4 = 0;
			if (document.getElementById("mydivheader")) {
				/* if present, the header is where you move the DIV from:*/
				document.getElementById("mydivheader").onmousedown = dragMouseDown;
			}else {
				/* otherwise, move the DIV from anywhere inside the DIV:*/
				elmnt.onmousedown = dragMouseDown;
			}
			function dragMouseDown(e) {
				e = e || window.event;
				e.preventDefault();
				// get the mouse cursor position at startup:
				pos3 = e.clientX;
				pos4 = e.clientY;
				document.onmouseup = closeDragElement;
				// call a function whenever the cursor moves:
				document.onmousemove = elementDrag;
			}
			function elementDrag(e) {
				e = e || window.event;
				e.preventDefault();
				// calculate the new cursor position:
				pos1 = pos3 - e.clientX;
				pos2 = pos4 - e.clientY;
				pos3 = e.clientX;
				pos4 = e.clientY;
				// set the element's new position:
				elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
				elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
				document.getElementById("mydivheader").style.cursor = "grabbing";
			}
			function closeDragElement() {
				/* stop moving when mouse button is released:*/
				document.onmouseup = null;
				document.onmousemove = null;
				document.getElementById("mydivheader").style.cursor = "grab";
			}
		}

		function myfunc(id) {

			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "likeit.php?f=" + id + "&u=" + <?php echo $_COOKIE['user_id']; ?> + "&r=" + <?php echo $_GET['user_id']; ?>, true);
			xhttp.send();

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("cntlkd").innerHTML = this.responseText;
				}
			}
			document.getElementById("like").style.display = "none";
			document.getElementById("liked").style.display = "block";
		}

		function myfun() {
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "unlikeit.php?f=" + <?php echo $_GET['file_id']; ?> + "&u=" + <?php echo $_COOKIE['user_id']; ?>, true);
			xhttp.send();

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("cntlk").innerHTML = this.responseText;
				}
			}
			document.getElementById("like").style.display = "block";
			document.getElementById("liked").style.display = "none";
		}

		function show() {
			document.getElementById("myModal").style.display = "block";
			setInterval(function() {
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("com_sec").innerHTML = this.responseText;
					}
				}
				xhttp.open("GET", "comment.php?f=" + <?php echo $_GET['file_id']; ?>, true);
				xhttp.send();
			}, 1);
		}

		function comment() {
			var c = document.getElementById("mycomment").value;
			document.getElementById("mycomment").value = "";
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "send_comment.php?f=" + <?php echo $_GET['file_id']; ?> + "&c=" + c + "&r=" + <?php echo $_GET['user_id']; ?>, true);
			xhttp.send();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("com_sec").innerHTML = this.responseText;
				}

			};
		}

		setInterval(function() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("cntcmt").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "count_comment.php?f=" + <?php echo $_GET['file_id']; ?>, true);
			xhttp.send();
		}, 1);


		function cls() {
			document.getElementById("myModal").style.display = "none";
		}

		function openit() {
			document.getElementById("shr").style.display = "block";
		}

		function cls1() {
			document.getElementById("shr").style.display = "none";
		}
</script>

</html>