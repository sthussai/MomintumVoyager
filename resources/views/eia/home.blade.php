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
  max-width:2000px;
  margin:auto;
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
  max-width:2000px;
  margin:auto;
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 50px 10px 10px; /* Large padding which will shrink on scroll (using JS) */
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

#imam_img{
    width:50%;
    height:100%;
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
  animation-duration: 20s;
  animation-iteration-count: 2;
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

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1; 
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.text {
  font-size:18px;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 200px;
  right: 45px;
  font-size: 60px;
  z-index: 100; 
  cursor: pointer;
}

.bar1, .bar2, .bar3 {
  width: 35px;
  height: 5px;
  background-color: white;
  margin: 6px 0;
  transition: 0.4s;
}

/* Rotate first bar */
.change .bar1 {
  -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
  transform: rotate(-45deg) translate(-9px, 6px) ;
}

/* Fade out the second bar */
.change .bar2 {
  opacity: 0;
}

/* Rotate last bar */
.change .bar3 {
  -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
  transform: rotate(45deg) translate(-8px, -8px) ;
}



.row, .row1 {
  display: flex; /* equal height of the children */
}

.col, .col1 {
  flex: 1; /* additionally, equal width */
  
}

/* For overlay div */
@media screen and (max-height: 450px) {
 

  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

/* Display at medium width */
@media screen and (max-width: 900px) {

  .text {
  font-size:16px;
  }
  .row {

    flex-direction: column;
  }

  .col {


  }


}

/*START Display at SMALL width */
@media screen and (max-width: 600px) {
  #imam_img {
    width:100%;

  }
  h1,h2,h3,h4,h5,h6
  h1 {
  font-size:25px;
  }
  h2 {
  font-size:22px;
  }
  h3 {
  font-size:20px;
  }
  h4 {
  font-size:18px;
  }
  h5 {
  font-size:15px;
  }
  h6 {
  font-size:13px;
  }

  .text {
  font-size:15px;
  }

  .row1 {
  flex-direction: column;
}

.col1 {


}
  
}

/*END Display at SMALL width */


/*START Display at LARGE width */
@media screen and (min-width: 994px) {
  .img {
padding-top:50px;
  max-height:400px;
  }



  .text {
  font-size:17px;
  }
}

</style>
<body  >
  
<div id="myNav" class="overlay">
  <a id="menuCloseBtn" href="javascript:void(0)" class="closebtn" onclick="closeNav();">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
  </a>
  <div class="overlay-content">
  
<!-- Include menu content from section -->
@include('eia.sections.menu')

  </div>
</div>



<!-- SMALL Navbar on small screens --><!-- SMALL Navbar on small screens -->
<!-- SMALL Navbar on small screens --><!-- SMALL Navbar on small screens -->








  <!--This is in two places BIG Navbar (sit on top) --><!-- BIG Navbar (sit on top) -->
  <!--This is in two placesBIG Navbar (sit on top) --><!-- BIG Navbar (sit on top) -->






<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="hero_div"  >



<!-- <div ><i id='spinner' class="fa fa-spinner fa-spin" style="font-size:5em;position:absolute;top:50%;left:50%;"></i></div> -->

<div class="w3-display-middle w3-opacity-min w3-round" style="top:70%" >
    <h1 class="w3-xxlarge w3-padding w3-text-white w3-animate-left">Striving for Excellence</h1>
    <hr class="w3-bottombar w3-border-white w3-animate-left w3-round" style="margin:auto;width:80%">
    
  </div>



</div>

    <div id='navbar' class="w3-opacity-min">
        <h1 id='logo'><b>Edmonton Islamic Academy</b></h1>
    <div class='w3-hide-medium w3-hide-large'>
    <a href="#about" class="w3-bar-item w3-button" onclick="openNav('Story')">STORY</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="openNav()">ADMISSIONS</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="openNav()">STUDENTS</a>
    <a href="#" class="w3-bar-item w3-button" onclick="openNav()">PARENTS</a>
    </div>
    
    <div id='menu_items' class="w3-row  w3-opacity w3-hide-small " style='font-size:1.5em;'>
        <div class="w3-col s3" >
        <button  class="w3-button  w3-block w3-hover-blue-grey  " onclick="openNav('Story')">STORY</button>           
        </div>

        <div class="w3-col  s3">
        <button href="#plans" class="w3-button w3-block w3-hover-blue-grey  " onclick="openNav('Admissions')">ADMISSIONS</button>
        </div>
        
        <div class="w3-col  s3">
        <button  class="w3-button w3-block w3-hover-blue-grey" onclick="openNav('Students')">STUDENTS</button>
        </div>

        <div class="w3-col  s3">
        <button href="#contact" class="w3-button w3-block w3-hover-blue-grey" onclick="openNav('Parents')">PARENTS</button>
        </div>

    </div>  


    </div>




 <!-- START About Section -->
 <div class="w3-row w3-padding-64 w3-content"  id="about">
    <div class="w3-col l6 w3-padding w3-center " style=''>
     <img src="http://hsigroup.online/images/eia/graduation.jpg" class="w3-round img w3-image " alt="Table Setting" >
    </div>
<br>
    <div class="w3-col l6 w3-padding">
      <h1 class="w3-center">Welcome to the Academy</h1>
      <p class="text"> Edmonton Islamic Academy students learn, achieve, and grow in an environment that promotes Islamic character as modeled by Prophet Mohamed (PBUH) and his companions. The Academy offers a rich learning experience fully compliant with the Alberta curriculum. In addition, our students are taught to be engaged and responsible Canadian citizens. Our goal is to provide the environment and the tools necessary to fulfill this mission.
    </p>
<button class='w3-button w3-dark-grey w3-round'>Learn More ></button>
    </div>
  </div>
  <hr >  


<!--END About Section -->

<!--START Discover Section -->

<div class='row '>
    <div class="col  w3-display-container" >
      <img src="http://hsigroup.online/images/eia/treelane.jpg" style='width:100%; height:100%'class=" w3-image " alt="Forest lane" >

        <span style='width:100%' class='w3-display-topmiddle w3-padding-large w3-grey w3-center w3-opacity w3-round '>
        <h1 class='w3-text-black '>Discover Your Path.</h1>

        </span>

        <span  class='w3-display-bottommiddle w3-padding-large  w3-center  w3-round '>
            
        <button type="button" class="w3-button w3-opacity-min w3-large w3-white  w3-margin-bottom">Discover EIA</button>
        </span>

    </div>

    <div class="col row1  " style="">
              <div id='staff_des' class="col1  w3-large w3-padding">
                  <h1 class='w3-center '>Meet the Staff</h1>
                  <h3 >Imam Mahmoud Omar</h4>
                  <p  class='text'>Imam Omar is a specialist in the Fundamentals of Religion (Usul al-Din) with degrees from Al-Azhar University (BA)   and the Islamic University of Minnesota (MEd, PhD).</p>
                  <button class='w3-button w3-dark-grey w3-round'>View More</button>    
              </div>

                <img id='imam_img' src="http://hsigroup.online/images/eia/eiaimam.jpg" class="w3-image " alt="Staff" >
              
    </div>
</div>

<!-- END Discover Section -->

<hr>


<!-- 2nd Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-center w3-opacity-min" id="Events">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-black w3-wide">STATE-OF-THE-ART Facility
     </span><br>
     <button class='w3-button w3-transparent w3-border w3-border-white w3-topbar w3-large w3-text-black w3-white w3-opacity'>Take a tour</button>
  </div>

</div>


<div class='row '>
    <div class="w3-container col m6 w3-padding-32  w3-card-4" style="">
    <h2 class='w3-center'>Vision and Values</h2>
    <h5>
EIA students achieve their maximum potential in an environment of intercultural and interfaith understanding and respect, and use their leadership skills and intellect for the betterment of humanity</h5>
<h5>The Edmonton Islamic Academy offers an education of the highest quality, embedded in the values of the Islamic faith, to enable students to become
Respectful, Responsible, Successful, leaders and contributors to society.
</h5>
    <button type="button" class="w3-button w3-round w3-large w3-dark-grey w3-margin-top">Read More</button>
  </div>

  <div class="w3-container col m6 s12 w3-padding-32 w3-black w3-card-4" style="">
    <h2 >Stay Informed, Stay Current!</h2>
    <h3>Join our newsletter.</h3>
    <label>E-mail</label>
    <input class="w3-input w3-border" type="text" placeholder="Your Email address">
    <button type="button" class="w3-button w3-red w3-round w3-large w3-margin-top">Subscribe</button>
  </div>
</div>
<!-- 2nd Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

























<!-- START Footer -->
@include('eia.sections.footer')

<!-- END Footer -->





<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>








<script>

// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "20px 10px 10px";
    document.getElementById("logo").style.fontSize = "25px";
    document.getElementById("menu_items").style.fontSize = "1.25em";
    document.getElementById("navbar").style.opacity = "1.0";
  } else {
    document.getElementById("navbar").style.padding = "50px 10px 10px";
    document.getElementById("navbar").style.opacity = "0.7";
    document.getElementById("menu_items").style.fontSize = "1.5em";
    document.getElementById("logo").style.fontSize = "35px";
  }
}


//START Open and Close Menu functions 
function openNav(cityName) {
  document.getElementById("menuCloseBtn").classList.add('change');
  document.getElementById("myNav").style.height = "100%";
  document.getElementById("myNav").style.opacity = "1.0";
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("menuContent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

function closeNav() {
  document.getElementById("menuCloseBtn").classList.remove('change');
  document.getElementById("myNav").style.height = "0%";
  document.getElementById("myNav").style.opacity = "0";
}
//END Open and Close Menu functions



function test() {

}





// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}



</script>



</body>
</html>