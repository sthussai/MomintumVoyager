@extends('layouts.momintum')

@section("content")


<!-- Main Page Blocks section -->

<div class="w3-row-padding w3-margin-top">

<!-- Section 1 of 3 -->
<div id='mainBlock' class=" w3-animate-zoom w3-col w3-center l4 m6 w3-margin-top">
                      <a class="w3-card w3-white w3-hover-opacity  w3-opacity-min  w3-btn">
                          <div class="w3-container w3-padding  w3-light-grey">
                              <h3>Momintum Mastermind</h3>        
                          </div>
                          
                      <!-- Start Flex container - 2 divs side by side -->
                      <div style="display:flex; align-items: center;  solid 2px blue"> 
                          
                          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style="width:50%;solid 2px red;">
                          

                          <div style='width:50%;  solid 2px red;'>
                              <h4>5 Terre d</h4>
                              <h4>5 Terre d</h4>
                          </div>
                      </div>
                      <!-- END Flex container - 2 divs side by side -->

                          <div class="w3-container w3-dark-grey" style='margin-top:5px'>
                          <p>Lorem ipsum dolor sit amet.</p>
                          <p>2 Hours Ago</p>
                          </div>
                          
                      </a>
                  </div>
                  <!-- END of section 1 0f 3 -->

                  <!-- Section 1 of 3 -->
                  <div id='mainBlock' class="w3-animate-zoom w3-col w3-center l4 m6 w3-margin-top">
                      <a class="w3-card w3-white w3-hover-opacity  w3-opacity-min  w3-btn">
                          <div class="w3-container w3-padding  w3-light-grey">
                              <h3>Momintum Leadership</h3>        
                          </div>
                          
                      <!-- Start Flex container - 2 divs side by side -->
                      <div style="display:flex; align-items: center;  solid 2px blue"> 
                          
                          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style="width:50%;solid 2px red;">
                          

                          <div style='width:50%;  solid 2px red;'>
                              <h4>5 Terre d</h4>
                              <h4>5 Terre d</h4>
                          </div>
                      </div>
                      <!-- END Flex container - 2 divs side by side -->

                          <div class="w3-container w3-dark-grey" style='margin-top:5px'>
                          <p>Lorem ipsum dolor sit amet.</p>
                          <p>2 Hours Ago</p>
                          </div>
                          
                      </a>
                  </div>
                  <!-- END of section 1 0f 3 -->

                  <!-- Section 1 of 3 -->
                  <div id='mainBlock' class="w3-animate-zoom w3-col w3-center l4 m6 w3-margin-top">
                      <a class="w3-card w3-white w3-hover-opacity  w3-opacity-min  w3-btn">
                          <div class="w3-container w3-padding  w3-light-grey">
                              <h3>Adventures</h3>        
                          </div>
                          
                      <!-- Start Flex container - 2 divs side by side -->
                      <div style="display:flex; align-items: center;  solid 2px blue"> 
                          
                          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style="width:50%;solid 2px red;">
                          

                          <div style='width:50%;  solid 2px red;'>
                              <h4>5 Terre d</h4>
                              <h4>5 Terre d</h4>
                          </div>
                      </div>
                      <!-- END Flex container - 2 divs side by side -->

                          <div class="w3-container w3-dark-grey" style='margin-top:5px'>
                          <p>Lorem ipsum dolor sit amet.</p>
                          <p>2 Hours Ago</p>
                          </div>
                          
                      </a>
                  </div>
                  <!-- END of section 1 0f 3 -->



  @foreach($programs as $program)

  <!-- Section 1 of 6 -->
  <div id='mainBlock' class="w3-animate-zoom w3-col w3-center l4 m6 w3-margin-top ">
    <a href="/program/{{str_replace(' ', '_', $program->title)}}"
      class="w3-card w3-white w3-hover-opacity  w3-opacity-min w3-btn">
      <div class="w3-container w3-padding ">
        <p class="w3-large">{{$program->title}}</p>
      </div>

      <!-- Start Flex container - 2 divs side by side -->
      <div style="display:flex; align-items: center;">

<!--         <img class='w3-image' src="{{url('/storage/'.$program->url)}}" style="width:50%;"> -->
        <img class='w3-image' src="{{$program->url}}" style="width:50%;">


        <div style='width:50%; '>
          <p class="w3-medium">{{$program->subheading}}</p>
          <p class="w3-medium">{{$program->subheading}}</p>
        </div>
      </div>
      <!-- END Flex container - 2 divs side by side -->

      <div class="w3-container w3-dark-grey" style='margin-top:5px'>
        <p class="w3-small">{{$program->description}}</p>
        <p class="w3-small">Lorem ipsum dolor sit amet.</p>
      </div>

    </a>
  </div>
  <!-- END of section 1 0f 6 -->
  @endforeach



  <!--  End of main section div  -->
</div>


<!--  End of HERO Image div  -->
</div>

<!-- Menu Article Section Container -->
<div class="w3-container w3-padding-64 w3-large" id="menu">
  <div class="w3-content">

    <div class="w3-row w3- ">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Upcoming');" id="myLink">
        <div class="w3-col l2 m3 s6 w3-center tablink w3-padding">Upcoming</div>

      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'News');">
        <div class="w3-col l2 m3 s6 tablink w3-padding">News</div>
      </a>

    </div>

    <div id="Upcoming" class="w3-container menu w3-padding-32 w3-white ">
<!-- Start Article Section 1 of 3 -->    
<div class='w3-row-padding w3-content w3-large' style="solid 2px blue">
          <div class='w3-mobile w3-col l4 m5 s12' style="solid 2px red">
          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_manarola.jpg" style="max-height:250px;solid 2px red">
          </div>
          <div class='w3-mobile w3-col l8 m7 s12' style="margin-top:10px; solid 2px red;">
          <h3><b>Upcoming </b> <span class="w3-right w3-tag w3-dark-grey w3-round">New</span></h3>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          </div>
      </div>
      <!-- END Article Section 1 of 3 -->      
      <hr>
      @foreach($posts as $post)
      @if($post->featured)
      <!-- Start Article Section 1 of 3 -->
      <div id="posts" class='w3-row-padding w3-content w3-large'>
        <div class='w3-mobile w3-col l4 m5 s12'>
          <img class='w3-image' src="{{url('/storage/'.$post->image)}}" style="max-height:250px;">
        </div>
        <div class='w3-mobile w3-col l8 m7 s12' style="margin-top:10px; ;">
          <h3><b>{{$post->title}}</b> <span class="w3-right w3-tag w3-dark-grey w3-round">New</span></h3>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          <a href="" class="w3-button w3-border w3-border-black w3-small">Details</a>
        </div>
      </div>
      <hr>
      <!-- END Article Section 1 of 3 -->
      @endif
      @endforeach
    </div>



    <div id="News" class="w3-container menu w3-padding-32 w3-white">

          <!-- Start Article Section 1 of 3 -->    
          <div class='w3-row-padding w3-content w3-large' style="solid 2px blue">
          <div class='w3-mobile w3-col l4 m5 s12 ' style="solid 2px red">
          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style="max-height:250px;solid 2px red">
          </div>
          <div class='w3-mobile w3-col l8 m7 s12 ' style="margin-top:10px; solid 2px red;">
          <h3><b>Event coming up</b> <span class="w3-right w3-tag w3-dark-grey w3-round">New</span></h3>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          </div>
      </div>
      <!-- END Article Section 1 of 3 -->      
      <hr>
      @foreach($posts as $post)
      @if(!$post->featured)
      <!-- Start Article Section 1 of 3 -->
      <div class='w3-row-padding w3-content w3-large'>
        <div class='w3-mobile w3-col l4 m5 s12'>
          <img class='w3-image' src="{{url('/storage/'.$post->image)}}" style="max-height:250px;">
        </div>
        <div class='w3-mobile w3-col l8 m7 s12' style="margin-top:10px; ;">
          <h3><b>{{$post->title}}</b> <span class="w3-right w3-tag w3-dark-grey w3-round">New</span></h3>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          <a class="w3-button w3-border w3-border-black w3-small">Details</a>
        </div>
      </div>
      <hr>
      <!-- END Article Section 1 of 3 -->
      @endif
      @endforeach
    </div>
  </div>

</div>

<script>
  // Tabbed Menu
  function openMenu(evt, menuName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("menu");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
    }
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-dark-grey";
  }
  document.getElementById("myLink").click();
</script>

@endsection