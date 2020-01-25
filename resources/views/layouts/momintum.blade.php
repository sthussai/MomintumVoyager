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
body {
/*   background-image: url("https://www.w3schools.com/w3images/forestbridge.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover; */
}   
    a {
    text-decoration: none !important;
}
.detailrow {
  display: flex; /* equal height of the childrenkn knk */
}

.detailcol {
  flex: 1; /* additionally, equal width */
  
  padding: 1em;
}

  }
</style>
</head> 

<body class="w3-light-grey">
    
    <!-- Sidebar/menu -->
 
    
   <!-- Overlay effect when opening sidebar on small screens -->


<!-- Login/Register -->

@if (session('newUserRegistered'))

          <div  id="snackbar"> Welcome {{ session('newUserRegistered') }} </div>
     
     <script>
     function myFunction() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
} 
myFunction();
     </script>
     
      @endif

<!-- Navbar -->
        
<div class='w3-bar w3-theme-d2'>
    
        <div class="w3-content w3-left-align w3-large">
            
              
              <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large "><i class="fa fa-home w3-margin-right"></i>{{ config('app.name', 'Laravel') }}</a>
              <a href="{{ url('/photos') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Resturants"><i class="fa fa-photo"></i></a>
              <a href="{{ url('/events') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Events"><i class="fa fa-star"></i></a>
              <a href="{{ url('/musers') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Users"><i class="fa fa-user"></i></a>
              <a href="{{ url('/test') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Admin Mode"><i class="fa fa-adn"></i></a>
              
              @guest
                <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i> {{ __('Login') }}</a>
                                              
                      @if (Route::has('register'))
                          
                      <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-right w3-hover-white" href="{{ route('register') }}"><i class="fa fa-book"></i> {{ __('Register') }}</a>

                      @endif
              @else


                  <div class="w3-dropdown-hover w3-bar-item w3-button w3-hide-small w3-right">
                  <span class="w3-left w3-tiny">User ID:{{ Auth::user()->id }}</span>
                  @if(auth()->user()->can('admin')) 
                  <span class="w3-right w3-blue w3-round w3-tiny ">Admin</span>
                  @endif
                  <br>{{Auth::user()->name }}


                  
                    <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:43px;width:43px" alt="Avatar">
                    
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

                        <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Logout Account"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout {{ Auth::user()->name }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>  
                      </div>
                  </div>

               @endguest
          
          </div>
      
 </div>






<!-- !PAGE CONTENT! -->

  
   
    <div class="w3-bar w3-padding w3-margin-top">
        <h1><b>@yield('dashboardTitle', 'Welcome ')
        @auth {{Auth::user()->name}} @endauth
        </b></h1>
        @auth
          <!--Logged In Nav Bar -->
          <a href="/mprofile" class="w3-bar-item w3-right w3-large w3-button w3-hide-small" title="News">Profile</a><span class="w3-bar-item w3-right">/</span>
          <a href="/payment" class="w3-bar-item w3-right w3-button w3-large w3-hide-small" title="Payments">Payments</a> <span class="w3-bar-item w3-right">/</span>
          <a href="/eventregister" class="w3-bar-item w3-right w3-button w3-large w3-hide-small" title="Registrations">Registrations</i></a><span class="w3-bar-item w3-right">/</span>
          <a href="/events" class="w3-bar-item w3-right w3-button w3-large w3-hide-small" title="Events">Events</a>
        @endauth
    </div>


    @yield('content')

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>