<!DOCTYPE html>
<html>
<title>Edmonton Islamic Academy</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fullnav.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* The animation code */
@keyframes example {
    0%  {transform: scale(1.0);}
  50% {transform: scale(1.1);}
  100% {transform: scale(1.0);}

}

@keyframes header {
    0% {height:10%;}
    50% {height:20%;}
    100% {height:10%;}
/*     0%  {transform: scale(1.0);}
  50% {transform: scale(0.95);}
  100% {transform: scale(1.0);} */

}

/* Create a sticky/fixed navbar */
#navbar {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 90px 10px; /* Large padding which will shrink on scroll (using JS) */
  transition: 0.4s; /* Adds a transition effect when the padding is decreased */
  position: fixed; /* Sticky/fixed navbar */
  width: 100%;
  top: 0; /* At the top */
  z-index: 99; 
}

/* Style the logo */
#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 0.4s;
}


/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('http://hsigroup.online/images/eia/edmonton.jpg');
    min-height: 100%;
    animation-name: example;
  animation-duration: 16s;
  animation-iteration-count: 1;
	}
	
/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("http://hsigroup.online/images/eia/building.jpg");
    min-height: 400px;
	
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url('http://hsigroup.online/images/eia/mountains.jpg');
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}


@media screen and (min-width: 1350px) {
	#aboutp	{
		font-size:18px;
		}
	#about, #but, #eventlist {
		min-width:1300px;
		}
	
}


</style>
<body  >
  
  


<!-- SMALL Navbar on small screens --><!-- SMALL Navbar on small screens -->
<!-- SMALL Navbar on small screens --><!-- SMALL Navbar on small screens -->


  <div id="navDemo" class="w3-bar-block w3-light-gray w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button" onclick="check()">SEARCH</a>
  </div>
</div>




  <!--This is in two places BIG Navbar (sit on top) --><!-- BIG Navbar (sit on top) -->
  <!-- This is in two placesBIG Navbar (sit on top) --><!-- BIG Navbar (sit on top) -->






<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="hero_div"  >



<!-- <div ><i id='spinner' class="fa fa-spinner fa-spin" style="font-size:5em;position:absolute;top:50%;left:50%;"></i></div> -->

<div class="w3-display-middle w3-opacity-min w3-round" style="top:70%" >
    <h1 class="w3-xxlarge w3-padding w3-text-white w3-animate-left">Striving for Excellence</h1>
    <hr class="w3-bottombar w3-border-white w3-animate-left w3-round" style="margin:auto;width:80%">
    
  </div>



</div>

    <div id='navbar' >
        <h1 id='logo'><b>Edmonton Islamic Academy</b></h1>
        
    </div>  


    </div>






<div style="margin-top:210px;padding:15px 15px 2500px;font-size:30px">
  <p><b>This example demonstrates how to shrink a navigation bar when the user starts to scroll the page.</b></p>
  <p>Scroll down this frame to see the effect!</p>
  <p>Scroll to the top to remove the effect.</p>
  <p><b>Note:</b> We have also made the navbar responsive, resize the browser window to see the effect.</p>
  <p>Lorem ipsum dolor dummy text to enable scrolling, sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>

</body>
</html>
