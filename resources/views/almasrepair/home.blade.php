<!DOCTYPE html>
<html>
<title>Almas Repair</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fullnav.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif;
    }

    body,
    html {
        max-width: 2000px;
        margin: auto;
        height: 100%;
        color: #777;
        line-height: 1.8;
    }

    /* The animation code */
    @keyframes example {
        0% {
            transform: scale(1.0);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1.0);
        }

    }

    @keyframes header {
        0% {
            height: 10%;
        }

        50% {
            height: 20%;
        }

        100% {
            height: 10%;
        }

        /*     0%  {transform: scale(1.0);}
  50% {transform: scale(0.95);}
  100% {transform: scale(1.0);} */

    }

    /* Create a sticky/fixed navbar */
    #navbar {
        max-width: 2000px;
        margin: auto;
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 50px 10px 10px;
        /* Large padding which will shrink on scroll (using JS) */
        transition: 0.4s;
        /* Adds a transition effect when the padding is decreased */
        position: fixed;
        /* Sticky/fixed navbar */
        width: 100%;
        top: 0;
        /* At the top */
        z-index: 99;
    }

    /* Style the logo */
    #navbar #logo {
        font-size: 35px;
        font-weight: bold;
        transition: 0.4s;
    }

    #imam_img {
        width: 50%;
        height: 100%;
    }

    /* Create a Parallax Effect */
    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
        min-height: 100%;
        animation-name: example;
        animation-duration: 20s;
        animation-iteration-count: 2;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("https://www.w3schools.com/w3images/forestbridge.jpg");
        background-position: bottom;
        min-height: 400px;

    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
        min-height: 400px;
    }

    .w3-wide {
        letter-spacing: 10px;
    }

    .w3-hover-opacity {
        cursor: pointer;
    }

    .overlay {
        height: 0%;
        width: 100%;
        position: fixed;
        z-index: 1;
        left: 0;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
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
        font-size: 18px;
    }

    .overlay a:hover,
    .overlay a:focus {
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

    .bar1,
    .bar2,
    .bar3 {
        width: 35px;
        height: 5px;
        background-color: white;
        margin: 6px 0;
        transition: 0.4s;
    }

    /* Rotate first bar */
    .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
        transform: rotate(-45deg) translate(-9px, 6px);
    }

    /* Fade out the second bar */
    .change .bar2 {
        opacity: 0;
    }

    /* Rotate last bar */
    .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px);
        transform: rotate(45deg) translate(-8px, -8px);
    }



    .row,
    .row1 {
        display: flex;
        /* equal height of the children */
    }

    .col,
    .col1 {
        flex: 1;
        /* additionally, equal width */

    }

    /* For overlay div */
    @media screen and (max-height: 450px) {


        .overlay a {
            font-size: 20px
        }

        .overlay .closebtn {
            font-size: 40px;
            top: 25px;
            right: 35px;
        }
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) {

        .bgimg-1,
        .bgimg-2,
        .bgimg-3 {
            background-attachment: scroll;
        }
    }

    /* Display at medium width */
    @media screen and (max-width: 900px) {

        .text {
            font-size: 16px;
        }

        .row {

            flex-direction: column;
        }

        .col {}


    }

    /*START Display at SMALL width */
    @media screen and (max-width: 600px) {
        #imam_img {
            width: 100%;

        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 h1 {
            font-size: 25px;
        }

        h2 {
            font-size: 22px;
        }

        h3 {
            font-size: 20px;
        }

        h4 {
            font-size: 18px;
        }

        h5 {
            font-size: 15px;
        }

        h6 {
            font-size: 13px;
        }

        .text {
            font-size: 15px;
        }

        .row1 {
            flex-direction: column;
        }

        .col1 {}

    }

    /*END Display at SMALL width */


    /*START Display at LARGE width */
    @media screen and (min-width: 994px) {
        .img {
            padding-top: 50px;
            max-height: 400px;
        }



        .text {
            font-size: 17px;
        }
    }

    div.zoom p{
        font-size: 17px;
    }
    .zoom {
        transition: 0.5s;
        
    }

    .zoom:hover {
        transform: scale(1.1);
        box-shadow: 0px 5px grey;

        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
</style>

<body>



    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-2 w3-display-container " id="hero_div">


        <div class="w3-display-middle w3-opacity-min w3-round" style="top:50%">
            <h1 class="w3-xxlarge w3-padding w3-text-white w3-animate-left w3-center">Almas Repair</h1>
            <h4 style='white-space: nowra;' class="w3-large w3-padding w3-center w3-text-white w3-animate-left">Quality
                Cell Phone Repair At Your Doorstep
            </h4>
            <hr class="w3-bottombar w3-border-white w3-animate-left w3-round" style="margin:auto;width:80%">
        </div>



    </div>


    <!-- START Three panel section -->
    <div class="w3-row-padding w3-content w3-center w3-text-black w3-margin-top w3-padding-64">
        <div class="zoom w3-third w3-border-black w3-padding">
            <div class=" w3-container" style="min-height:260px">
                <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
                <h3>Efficient </h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat aliquam.</p>

            </div>
        </div>
        <div class="zoom w3-third w3-border-black w3-padding">
            <div class=" w3-container" style="min-height:260px">
                <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
                <h3>Reliable </h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat aliquam.</p>

            </div>
        </div>
        <div class="zoom w3-third w3-border-black w3-padding">
            <div class=" w3-container" style="min-height:260px">
                <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
                <h3>Effective </h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat aliquam.</p>

            </div>
        </div>

    </div>

    <!-- END Three panel section -->


    <div class="w3-container  col m6 s12 w3-padding-32 w3-red w3-card-4" style="">
        <div class="w3-content w3-center">
            <h2>Book a repair with us today!</h2>
            <h3>Let us come to you.</h3>
            <input class="w3-input w3-border" type="text" placeholder="Your Email address">
            <button type="button" class="w3-button w3-white w3-round w3-large w3-margin-top">Submit</button>
        </div>
    </div>
    <!-- 2nd Parallax Image with Portfolio Text -->
    <!-- <div class="bgimg-3 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
        </div>
    </div>
 -->
























    <!-- START Footer -->
    <!-- include('eia.sections.footer') -->

    <!-- END Footer -->









    


</body>

</html>