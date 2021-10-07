<?php
session_start();
$_SESSION['error'] = "";
if(isset($_COOKIE['user_name']))
{
	header('Location:Profile.php');
}
?>
<html>
<head>
<link rel="icon" href="logo.jpg" type="image/jpg" sizes="16x16">
<link rel="stylesheet" href="../stylesheet/stylesheet.css"></link>
<title>Compete - Home</title>
</head>
<body>
<div class="header">
<a href="home.php" class="logo" title="Compete">COMPETE</a>
<a href="signin.php" title="Sign In"><button type="button" class="btn" style="margin-right:16px">Sign In</button></a>
<a href="signup.php" title="Create An Account"><button type="button" class="btn" style="margin-right:16px">Create An Account</button></a>
</div>

 <div class = "boxes fade"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
  <img src="../image/create.png" width="200px" height="200px"><br><br>
   <h3 align="center">Create Your Profile</h3>
 </div>
 
 <div class = "boxes fade"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
  <img src="../image/comp.png" width="200px" height="200px"><br><br>
   <h3 align="center">Participate in Competitions</h3>
 </div>
 
 <div class = "boxes fade"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
  <img src="../image/fan.png" width="200px" height="200px"><br><br>
   <h3 align="center">Build your Fan base</h3>
 </div>
 
 <div class = "boxes fade"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
  <img src="../image/num1.png" width="200px" height="200px"><br><br>
   <h3 align="center">Be the Best</h3>
 </div>
 
 <br>
 <br>
 <div class="arr">
 <button class="arbt" onclick = "plusSlides(-1)" title="Move Left"><i class="left"></i></button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;
 <button class="arbt" onclick = "plusSlides(1)" title="Move Right"><i class="right"></i></button>
 <p id="demo"></p>

 </div>

 
 <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) 
{
  showSlides(slideIndex += n);
}

function currentSlide(n) 
{
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("boxes");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }

 slides[slideIndex-1].style.display = "block";  
}

</script>
</body>
</html>