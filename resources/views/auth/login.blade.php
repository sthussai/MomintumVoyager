<!DOCTYPE html>

<html>

<head>
    <title>{{__('Momintum')}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

    <style>
        body,
        html {
            height: 100%;
        }

        /* First image (Logo. Full height) */
        .bgimg-1 {
            background-image: url('{{$hero_url ?? "https://www.w3schools.com/w3images/forestbridge.jpg"}}');
            min-height: 100%;
            animation-name: example;
            animation-duration: 20s;
            animation-iteration-count: 2;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @import url('https://fonts.googleapis.com/css?family=Rubik:400,700');

        * {
            font-family: 'Rubik', sans-serif;
        }

        #form {
            margin: 60px auto;
            width: 400px;
            padding: 0px;
            position: relative;
            box-shadow: 5px 5px 25px rgba(0, 0, 0, .2);
            border-radius: 1px;
            background-color: #2c3e50;
            height: 600px;
            overflow: hidden
        }

        #form #toggle-forms {
            position: absolute;
            margin: 15px;
            width: 90%;
            border-radius: 1px;
            overflow: hidden;
            z-index: 99
        }

        #form #toggle-forms>a {
            border: none;
            background: none;
            background-color: #34495e;
            color: #FFF;
            width: 49%;
            padding: 2px 10px;
        }

        #form #toggle-forms>a:first-of-type {
            border-right: 0;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;

        }

        #form #toggle-forms>a.active {
            background-color: #3498db;
        }

        .input-field label.active {
            color: #FFF !important;
            font-size: 1.1rem
        }

        #form form input:focus {
            border-bottom-color: dodgerblue !important
        }

        #form .row>button {
            background-color: dodgerblue
        }



        #form form {
            padding: 45px 40px 15px;
            position: absolute;
            top: 5px;
            height: 100%;
            width: 100%;
            transition: all .3s linear;
            z-index: 2
        }

        #form form:last-of-type {
            left: 100%
        }

        #form.active form:first-of-type {
            left: -100% !important
        }

        #form.active form:last-of-type {
            left: 0 !important
        }

        @media (max-width: 767px) {
            #form {
                width: 290px !important;
            }
        }

        .animate {
            height: 100%;
            display: block;
            margin: 10;
            padding: 0;
            width: 100%
        }

        .animate>li {
            position: absolute;
            height: 50px;
            width: 2px !important;
            top: 100%;
            left: 10px;
            background-color: rgba(255, 255, 255, .1);
            z-index: -1;
            overflow: hidden;
            animation: move 10s linear infinite;
        }

        .animate>li:nth-last-of-type(2) {
            left: 70px;
            animation-delay: 3.5s;
            height: 15px;
            width: 15px;
        }

        .animate>li:nth-last-of-type(3) {
            left: 140px;
            animation-delay: 3s
        }

        .animate>li:nth-last-of-type(4) {
            left: 210px;
            animation-delay: 5.5s
        }

        .animate>li:nth-last-of-type(5) {
            left: 280px;
            animation-delay: 1.8s;
            height: 65px;
            width: 65px
        }

        .animate>li:nth-last-of-type(6) {
            left: 140px;
            animation-delay: 6.8s;
            height: 25px;
            width: 25px
        }

        .animate>li:nth-last-of-type(7) {
            left: 280px;
            animation-delay: 5s;
            height: 35px;
            width: 35px
        }

        .row {
            position: relative;
            margin-top: 35px;
        }


        input {
            display: block;
            padding: 20px 12px;
            width: 100%;
            height: 50px;
            max-width: 350px;
            border-radius: 5px;
            border: 2px solid grey;
            color: #777777;
            font-size: 20px;
        }

        label {
            position: absolute;
            font-weight: 600;
            color: #777777;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            cursor: text;
            user-select: none;
            transition: 0.15s ease-in-out;
        }

        /* input[data-empty="false"] + label, */
        input:valid+label,
        input:focus+label {
            top: -10px;
            left: 0px;
            font-size: 10px;
            color: #ffffff;
        }

        #checkbox {
            font-size: 20px;

        }

        @keyframes move {
            to {
                top: -50px
            }

        }

        .loader{
  width: 20px;
  height: 20px;
  border-radius: 100%;
  position: relative;
  display: none;
}

/* LOADER 1 */

#loader-1:before, #loader-1:after{
  content: "";
  position: absolute;
  top: 10px;
  left: 10px;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 3px solid transparent;
  border-top-color: #3498db;
}

#loader-1:before{
  z-index: 100;
  animation: spin 0.5s infinite;
}

#loader-1:after{
  border: 3px solid #ccc;
}

@keyframes spin{
  0%{
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100%{
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: absolute;
  z-index: 10;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.5); /* Black with a little bit see-through */
}

    </style>
</head>

<body>

    <!--  START of HERO Image div  -->
    <div class="bgimg-1 w3-display-container w3-padding-32" id="hero_div">
        <a href="/" class="btn w3-display-topleft w3-text-white w3-padding-large w3-xlarge">
            Momintum
        </a>
        <section id="form" class="w3-opacity-min">
        <div id="myOverlay" class="overlay"></div>

            <div id="toggle-forms">
                <!-- <div class="">
                    <a href="{{ url('/') }}" class="w3-padding w3-large w3-blue-grey w3-margin-bottom w3-btn ">{{
                        config('app.name', 'Laravel') }}</a>
                </div> -->
                <a href="login" class="btn waves-effect waves-light w3-large w3-padding active" id="login">Login</a>
                <a href="register" class="btn waves-effect waves-light w3-large w3-padding " id="register">Register</a>

            </div>


            <form name="loginForm" method="POST" action="{{ route('login') }}" class="col s12 w3-text-white">
                @csrf

                <div class="row">
                    <h4 class="w3-text-white w3-large">Welcome</h4>
                </div>

                <div class="row">
                    <input id="email" name="email" type="email" class="" value="{{ old('email') }}" required>
                    <label for="email">{{ __('E-Mail')}}</label>
                    @if ($errors->has('email'))
                    <div class="w3-text-red w3-padding-top">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <input id="password" type="password" class="" name="password" required>

                    @if ($errors->has('password'))
                    <div class="w3-text-red w3-padding-top">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                    @endif
                    <label for="password">{{ __('Password')}}</label>

                </div>

                <div class="row " style="margin-top:25px">
                    <input class="w3-check" style="padding:-15px;" type="checkbox">
                    <span id="checkbox" style="font-size:15px;padding:15px;" for="checkbox">Remember Me</span>
                </div>

                <div class=" row " style="margin-top:25px">

                    <button onclick="showLoader()" class="btn w3-button w3-blue-grey w3-padding w3-large waves-effect waves-light">
                        Login
                    </button>
                    <span class="loader w3-right" id="loader-1"></span>
                </div>

                <div class="row">
                    <label for="reset" class="w3-text-white">Password lost? <a href="{{ route('password.request') }}"
                            class="w3-hover-shadow"
                            style="cursor:pointer; text-decoration: underline;">Reset</a></label>
                </div>
                <div class="row">
                    <label for="register" class="w3-text-white">Not registered? <a href="{{ route('register') }}"
                            class="w3-hover-shadow"
                            style="cursor:pointer; text-decoration: underline;">Register</a></label>
                </div>

                <ul class="animate">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </form>


            <form method="" action="" class="col w3-text-white s12">


                <div class="row center-align">
                    <h4 class="w3-text-white w3-large">New User Registertion</h4>
                </div>
                <div class="row" style="margin-top:25px">
                    <input id="name " name="name" required type="name">
                    <label for="name">Name</label>
                </div>
                <div class="row">
                    <input id="email " name="email" required type="email">
                    <label for="email">Email</label>
                </div>
                <div class="row">
                    <input id="password" type="password" required>
                    <label for="password">Password</label>

                </div>

                <div class="row">
                    <input id="confirmPassword" type="password" required>
                    <label for="confirmPassword">Confirm Password</label>

                </div>
                <div class="row">
                    <button class="btn w3-button w3-blue-grey w3-padding w3-large waves-effect waves-light">
                        Register
                    </button>
                </div>
                <ul class="animate">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </form>


        </section>

    </div>

    <script>
        let $id = (id) => document.getElementById(id);
        var [login, register, form] = ['login', 'register', 'form'].map(id => $id(id));

        [login, register].map(element => {
            element.onclick = function() {
                [login, register].map($ele => {
                    $ele.classList.remove("active");
                });
                this.classList.add("active");
                this.getAttribute("id") === "register" ? form.classList.add("active") : form.classList
                    .remove("active");
            }
        });

        function showLoader() {
            var email = document.forms["loginForm"]["email"].value;
            var password = document.forms["loginForm"]["password"].value;
            if (email == "" || password =="" ){
                console.log('something is empty');
                return false;
            }            
        document.getElementById("myOverlay").style.display = "block";
        document.getElementById("loader-1").style.display = "block";
}

    </script>

</body>