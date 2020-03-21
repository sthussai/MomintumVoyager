<!DOCTYPE html>

<html>

<head>
  <title>Profile</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link href="{{ asset('css/wheelmenu.css') }}" rel="stylesheet">
  <link href="{{ asset('css/stripe.css') }}" rel="stylesheet">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



  <style>
    a {
      text-decoration: none !important;
    }

    .detailrow {
      display: flex;
      /* equal height of the childrenkn knk */
    }

    .detailcol {
      flex: 1;
      /* additionally, equal width */

      padding: 1em;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
      background-image: url('{{$hero_url ?? "https://www.w3schools.com/w3images/nature.jpg"}}');
      min-height: 100%;
      animation-name: example;
      animation-duration: 20s;
      animation-iteration-count: 2;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body>

@if (session('login-success'))
  @component('components.alert')
  {{ session('login-success') }}
  @endcomponent
@endif


  <!-- Sidebar/menu -->


  <!-- Overlay effect when opening sidebar on small screens -->


  <!-- Login/Register -->


  <!-- Navbar -->

  <div class='w3-bar w3-theme-d2  '>

    <div class=" w3-left-align w3-content w3-large ">

      <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large "><i
          class="fa fa-home w3-margin-right"></i>{{ config('app.name', 'Laravel') }}</a>
      <a href="{{ url('/photos') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
        title="Resturants"><i class="fa fa-photo"></i></a>
      <a href="{{ url('/events') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
        title="Events"><i class="fa fa-star"></i></a>
      <a href="{{ url('/musers') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
        title="Users"><i class="fa fa-user"></i></a>
      <a href="{{ url('/test') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
        title="Admin Mode"><i class="fa fa-adn"></i></a>

      @guest



      <a href="{{ route('login') }}"
        class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i
          class="fa fa-user"></i> {{ __('Login') }}</a>

      @if (Route::has('register'))

      <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-right w3-hover-white"
        href="{{ route('register') }}"><i class="fa fa-book"></i> {{ __('Register') }}</a>

      @endif

      @else

      <!--  START Top LEFT Navigation Notification dropdown -->
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span
            class="w3-badge w3-right w3-small w3-green">3</span></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
          <a href="#" class="w3-bar-item w3-button">One new friend request</a>
          <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
          <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
        </div>
      </div>
      <!--  END Top LEFT Navigation Notification dropdown -->

      <!--  START Top RIGHT Navigation User dropdown -->
      <div class="w3-dropdown-hover w3-bar-item w3-button w3-hide-small w3-right">
        <span class="w3-left w3-tiny">User ID:{{ Auth::user()->id }}</span>
        <br>{{Auth::user()->name }}
        <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:43px;width:43px"
          alt="Avatar">

        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
          <div class="w3-bar-item w3-small w3-padding-large w3-hover-grey">
            @if(!auth()->user()->hasVerifiedEmail())
            {{Auth::user()->email }}
            <form class="w3-right" action="{{ route('verification.resend') }}" method="POST">@csrf
              <button class=" w3-pale-red w3-round w3-padding ">Verify Email</button>
            </form>
            @elseif(auth()->user()->hasVerifiedEmail())
            {{Auth::user()->email }}
            <span class=" w3-green w3-round w3-tiny ">Verified</span>

            @endif
          </div>

          <a href="{{ route('logout') }}"
            class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Logout Account"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout {{
            Auth::user()->name }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </div>
      </div>
      <!--  END Top RIGHT Navigation User dropdown -->


      @endguest


      <!--START Navbar on small screens (remove the onclick attribute if you want the navbar 
      to always show on top of the content when clicking on the links) -->

      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)"
        onclick="smallNavFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

      <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top"
        style="margin-top:46px">

        @guest
        <a href="{{ route('login') }}" class="w3-bar-item w3-button   w3-padding-large w3-hover-white"
          title="Account Settings" onclick="smallNavFunction()"><i class="fa fa-user"></i> {{ __('Login') }}</a>
        @if (Route::has('register'))

        <a class="w3-bar-item w3-button  w3-padding-large  w3-hover-white" href="{{ route('register') }}"
          onclick="smallNavFunction()"><i class="fa fa-book"></i> {{ __('Register')
          }}</a>

        @endif

        @endguest

        @auth
        <a href="/mprofile" onclick="smallNavFunction()" class="w3-bar-item w3-large w3-button "
          title="News">Profile</a>
        <a href="/payment" onclick="smallNavFunction()" class="w3-bar-item w3-button w3-large "
          title="Payments">Payments</a>
        <a href="/eventregister" onclick="smallNavFunction()" class="w3-bar-item w3-button w3-large "
          title="Registrations">Registrations</i></a>
        <a href="/events" onclick="smallNavFunction()" class="w3-bar-item w3-button w3-large " title="Events">Events</a>
        <a href="/mmain" onclick="smallNavFunction()" class="w3-bar-item w3-button w3-large " title="Home">Home</a>
        @endauth
      </div>

      <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function smallNavFunction() {
          var x = document.getElementById("navDemo");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }
      </script>

      <!--END Navbar on small screens (remove the onclick attribute if you want the navbar
      to always show on top of the content when clicking on the links) -->



    </div>

  </div>

  <!-- !PAGE CONTENT! -->

  <!--  START of HERO Image div  -->
  <div class="bgimg-1 w3-display-container w3-padding-32" id="hero_div">

    <div class="w3-container w3-bar w3-opacity-min w3-text-white ">
      <h1><b>@yield('dashboardTitle', 'Welcome ')
          @auth {{Auth::user()->name}} @endauth
        </b></h1>
      @auth
      <!--Logged In Nav Bar -->
      <a href="/mprofile" class="w3-bar-item w3-right w3-large w3-button w3-hide-small" title="News">Profile</a><span
        class="w3-bar-item w3-right w3-hide-small">/</span>
      <a href="/payment" class="w3-bar-item w3-right w3-button w3-large w3-hide-small" title="Payments">Payments</a>
      <span class="w3-bar-item w3-right w3-hide-small">/</span>
      <a href="/eventregister" class="w3-bar-item w3-right w3-button w3-large w3-hide-small"
        title="Registrations">Registrations</i></a><span class="w3-bar-item w3-right  w3-hide-small">/</span>
      <a href="/events" class="w3-bar-item w3-right w3-button w3-large w3-hide-small" title="Events">Events</a>
      @endauth
    </div>


    @yield('content')

    <!-- Footer -->
    <footer class="w3-container w3-theme-d3 w3-padding-16">
      <h5>Footer</h5>
      @auth
      @if(Auth::user()->last_login_at)
      <a href="test" class="w3-right">Last Login On: {{Auth::user()->last_login_at->toDayDateTimeString()}}</a>
      @endif
      @endauth
    </footer>