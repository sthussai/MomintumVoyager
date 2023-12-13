@extends("programs.layout")



@section('content1')

<style>
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

  .vertical-center {
    margin: 0;
    position: absolute;
    top: 50%;
    width: 100%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  /* Display at medium width */
  @media screen and (max-width: 600px) {

    .text {
      font-size: 16px;
    }

    .row {

      flex-direction: column;
    }



  }
</style>

<div class="w3-center" style="margin:20px 0 0;">

  <div>

    <div class='w3=content'>


      <!-- Start Flex container - 2 divs side by side -->
      <div class="row " style='margin:0px'>
        <div class="col w3-display-container" style="padding: 0">

          <img class='w3-image' src="{{$program->url}}" style="width:100%; max-height:500px">
          <span style='width:100%' class='w3-display-topmiddle w3-padding-large w3-white w3-center w3-opacity'>
            <h1 class='w3-text-black '>{{ $program->title }}</h1>

          </span>

          <span class='w3-display-bottommiddle w3-padding-large  w3-center  w3-round '>
            @auth
            @if (auth()->user()->subscribed($program->name))
            <div title="Thanks! You've subscribed to {{$program->name}}"
              class="w3-padding w3-green w3-large w3-margin-bottom">Subscribed!</div>
            @else <a href="/programregister/create/{{$program->id}}"
              class="w3-button w3-opacity-min w3-large w3-white w3-margin-bottom">Register</a>
            @endif
            @endauth
          </span>
        </div>

        <div class="col row1" style='padding:0;'>
          <div>
            <div style='padding: 0 px' class=" vertical-center w3-hide-small">
              <h2 class='w3-center'>{{ $program->title }} </h2>
              <h4>{{ $program->description }}</h4>
              <p class='text'>Lorem ipsum dolor sit amet., sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. </p>
              <button class="w3-rest w3-button w3-blue-grey "
                onclick="document.getElementById('subscribe').style.display='block'">Try out a class!</button>
            </div>
            <!--             Visible on small screen -->
            <div class="w3-hide-large w3-hide-medium w3-padding-top" style="padding-top:2em; ">
              <h2 class='w3-center'>{{ $program->title }}</h2>
              <h4>{{ $program->description }}</h4>
              <p class='text'>Lorem ipsum dolor sit amet., sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. </p>
              <button class="w3-rest w3-button w3-blue-grey "
                onclick="document.getElementById('subscribe').style.display='block'">Try out a class!</button>

            </div>
          </div>
        </div>

      </div>
      <!-- END Flex container - 2 divs side by side -->
      <hr>

      <!-- START Three panel section -->
      <div class="w3-row-padding w3-content w3-center w3-text-black w3-margin-top w3-padding-64">
        <div class="zoom w3-third  w3-round-large w3-padding">
          <div class=" w3-container" style="min-height:260px">
            <i class="fa fa-bicycle w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
            <h3>{{ $program->subheading }} </h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat aliquam.</p>

          </div>
        </div>
        <div class="zoom w3-third w3-round-large w3-padding">
          <div class=" w3-container" style="min-height:260px">
            <i class="fa fa-bicycle w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
            <h3>{{ $program->subheading2 }} </h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat aliquam.</p>

          </div>
        </div>
        <div class="zoom w3-third w3-round-large w3-padding">
          <div class=" w3-container" style="min-height:260px">
            <i class="fa fa-bicycle w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
            <h3>{{ $program->subheading }} </h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat aliquam.</p>

          </div>
        </div>

      </div>

      <!-- END Three panel section -->


      <div class="w3-cell-row">
        <div class="w3-cell w3-container w3-row w3-large w3-mobile">
          <h4><strong>Program Features</strong></h4>
          <div class="w3-col s6">
            <p><i class="fa fa-fw fa-shower"></i> Outdoors</p>
            <p><i class="fa fa-fw fa-wifi"></i> Network</p>

          </div>
          <div class="w3-col s6">
            <p><i class="fa fa-fw fa-cutlery"></i> Meals</p>
            <p><i class="fa fa-fw fa-thermometer"></i> Exercise</p>

          </div>

        </div>


        <div class="w3-cell w3-container w3-row w3-large w3-mobile">
          <h4><strong>Program Details</strong></h4>
          <div class="w3-col s6">
            <p><i class="fa fa-fw fa-male"></i> Class size: 4</p>
            <p><i class="fa fa-fw fa-map"></i> Location: Room 1</p>
          </div>
          <div class="w3-col s6">
            <p><i class="fa fa-fw fa-clock-o"></i> Start Time: After 3PM</p>
            <p><i class="fa fa-fw fa-clock-o"></i> End Time: 12PM</p>
          </div>
        </div>
      </div>
      <hr>

      <div class="w3-cell-row">
        <div class="w3-cell w3-container w3-row w3-large w3-mobile">
          <h4><strong>{{$program->subheading}}</strong></h4>
          <p>{{$program->description}}, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <hr>

        <div class="w3-cell w3-container w3-row w3-large w3-mobile">
          <h4><strong>{{$program->subheading2}}</strong></h4>
          <p>{{$program->description2}}, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <hr>
      </div>


      <!-- Subscribe Modal -->
      <div id="subscribe" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-padding-large">
          <div class="w3-container w3-white w3-center">
            <i onclick="document.getElementById('subscribe').style.display='none'"
              class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
            <h2>Register</h2>
            <p>Try out a class!</p>
            <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
            <button type="button" class="w3-button w3-padding-large w3-green w3-margin-bottom"
              onclick="document.getElementById('subscribe').style.display='none'">Submit</button>
          </div>
        </div>
      </div>

      <div class='w3-container'>
        <button class="w3-rest w3-button w3-blue-grey "
          onclick="document.getElementById('subscribe').style.display='block'">Register for {{$program->title}}</button>
        <hr>
      </div>
      <a href="/mmain" class="w3-button w3-light-grey">Home</a>


    </div>

  </div>
  @endsection