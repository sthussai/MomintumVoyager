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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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



    }

    /*START Display at SMALL width */
    @media screen and (max-width: 600px) {

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

    div.zoom p {
        font-size: 17px;
    }

    .zoom {
        transition: 0.5s;

    }


    .zoom:hover {
        transform: scale(1.05);
        -webkit-box-shadow: 3px 30px 38px -31px rgba(0, 0, 0, 0.53);
        -moz-box-shadow: 3px 30px 38px -31px rgba(0, 0, 0, 0.53);
        box-shadow: 3px 30px 38px -31px rgba(0, 0, 0, 0.53);
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



    <h3 class=" w3-center w3-text-black">Testimonials</h3>

    <!-- START Main Page Testimonials section -->
    <style>
        .scrolling-wrapper {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .scrolling-wrapper {
            -webkit-overflow-scrolling: touch;
        }

        .card {
            flex: 0 0 auto;
            margin: 20px;
            max-width: 500px;
            min-width: 350px;

        }
    </style>
    <div class="scrolling-wrapper w3-padding-16">
        <!-- START - Review section panel -->
        <div class="zoom w3-animate-zoom ">
            <a href="https://goo.gl/maps/dqviE7nvW4zK6WAD9" class=" w3-center w3-card w3-white w3-hover-opacity "
                style="text-decoration: none;">
                <div class="card w3-padding-16" style="border: none;">
                    <div>
                        <h2 style="margin:0px;border:  2px blue;">Selena Barabe</h2>
                        <h4 class="w3-medium" style="margin:0 0 40px; border:  2px green;">Edmonton</h4>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                    </div>
                    <div class="w3-container w3-dark-grey">
                        <p class="w3-medium">"Excellent work! Came right to my work and we chatted like achool kids
                            while he
                            replaced my screen. Great guy , wasn’t even 24 hours after replacing my daughters screen
                            I had
                            already recommended him to a co worker .
                            Great guy, great service all around!"</p>
                    </div>

                </div>
            </a>
        </div>
        <!-- END - Review section panel -->
        <!-- START - Review section panel -->        
        <div class="zoom w3-animate-zoom ">
            <a href="https://www.facebook.com/pg/AlmasRepair/reviews/" class=" w3-center w3-card w3-white w3-hover-opacity "
                style="text-decoration: none;">
                <div class="card w3-padding-16" style="border: none;">
                    <div>
                        <h2 style="margin:0px;border:  2px blue;">Sarah Fitzpatrick</h2>
                        <h4 class="w3-medium" style="margin:0 0 40px; border:  2px green;">Edmonton</h4>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                    </div>
                    <div class="w3-container w3-dark-grey">
                        <p class="w3-medium">"Amazing experience. Would recommend to anybody! Reasonable pricing and
                            also picks up and delivers right to your front door! So convenient and efficient! Thank you,
                            I will be going to you with my services from now on. No questions."</p>
                    </div>

                </div>
            </a>
        </div>
        <!-- END - Review section panel -->
        <!-- START - Review section panel -->        
        <div class="zoom w3-animate-zoom ">
            <a href="https://www.facebook.com/pg/AlmasRepair/reviews/"
                class=" w3-center w3-card w3-white w3-hover-opacity " style="text-decoration: none;">
                <div class="card w3-padding-16" style="border: none;">
                    <div>
                        <h2 style="margin:0px;border:  2px blue;">Christian Gersdorff</h2>
                        <h4 class="w3-medium" style="margin:0 0 40px; border:  2px green;">Edmonton</h4>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                    </div>
                    <div class="w3-container w3-dark-grey">
                        <p class="w3-medium">"Quick reply and excellent service. Right to my door too!! My phone seems
                            to work better than before too! Don’t know what he did, but I’ll be using this service from
                            now on for all my repairs. Can’t recommend him enough, very friendly and knowledgeable. Look
                            no further!"</p>
                    </div>

                </div>
            </a>
        </div>
        <!-- END - Review section panel -->
        <!-- START - Review section panel -->        
        <div class="zoom w3-animate-zoom ">
            <a href="https://www.facebook.com/pg/AlmasRepair/reviews/"
                class=" w3-center w3-card w3-white w3-hover-opacity " style="text-decoration: none;">
                <div class="card w3-padding-16" style="border: none;">
                    <div>
                        <h2 style="margin:0px;border:  2px blue;">Ron Cyr</h2>
                        <h4 class="w3-medium" style="margin:0 0 40px; border:  2px green;">Edmonton</h4>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                    </div>
                    <div class="w3-container w3-dark-grey">
                        <p class="w3-medium">"He is 100% legit. Having 3 young children makes it difficult for me to get
                            out. He came right to our home, on time, and had the phone repaired in 10 minutes. Very
                            happy. Thanks again for your help."</p><br>
                    </div>

                </div>
            </a>
        </div>
        <!-- END - Review section panel -->
    </div>

    <!--  End of Reviews Section  -->



    <div class="w3-container  col m6 s12 w3-padding-32 w3-red w3-card-4">
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