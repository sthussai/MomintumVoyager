@extends("programs.layout")



@section('content1')


<div class="w3-center    w3-panel w3-card">

  <div>

    <div class='w3=content'>

      <h2 class="">{{ $program->title }}</h2>
      <div class="w3-display-container mySlides">
        <img src="{{url('/storage/'.$program->url)}}" style="width:80%;max-width:400px;margin-bottom:6px">
      </div>

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


      <div class='w3-container'>
        <button class="w3-rest w3-button w3-blue-grey "
          onclick="document.getElementById('subscribe').style.display='block'">Try out a class!</button>
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