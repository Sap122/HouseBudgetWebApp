
<?php
include_once('menu_bar.php');
if(!isset($_COOKIE["names"]) && !isset($_COOKIE["passwords"])){
	header("location:user_login.php");

}
?>

<!-- HTML page -->
<!DOCTYPE>
<html>
<body>
<head>
<style>

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100px;
  position: relative;
  margin: auto;
}



.logo{margin-top:2px;

}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: 0.9} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: 0.9} 
  to {opacity: 1}
}


</style>
</head>
<img src="img/email1.png" style="height:80px;width:400px;margin-left:72%">
<div class="content">

<div class="slideshow-container">

<div class="mySlides fade">
 
  <input type="image" src="img/1page.jpg" style="height:680px;width:1260px;margin-left:-505px;margin-top:-6%;">
 
</div>

<div class="mySlides fade">

  <input type="image" src="img/6page.jpg" style="height:680px;width:1260px;margin-left:-505px;margin-top:-6%;">
  
</div>

<div class="mySlides fade">
  
 <input type="image" src="img/5page.jpg" style="height:680px;width:1260px;margin-left:-505px;margin-top:-6%;">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 
