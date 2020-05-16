@extends('layouts.momintum')

@section('content')

<!-- END Hero Image div -->
</div>

<div class='w3-container  '>
  <h1> Login Details</h1>

  <a class="w3-col w3-row-padding l6 m6 s12 w3-margin-bottom ">
    <div class='w3-container w3-padding l4 s6 w3-card w3-block'>
      <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-left " style=" width:85px">
      <div class="w3-container w3-col l8 s6 "><span class="w3-large"><b>Last Login Details</b></span>
        <br>Name: {{$user->name}}
        <br>Email: {{$user->email}}
        <br>Country: {{$data->countryName}}
        <br>Province: {{$data->regionName}}
        <br>City: {{$data->cityName}}
        <br>Zip Code: {{$data->zipCode}}
      </div>

    </div>
  </a>

  <a class="w3-col w3-row-padding l6 m6 s12 w3-margin-bottom ">
    <div class='w3-container w3-padding l4 s6 w3-card w3-block'>
      <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-left " style=" width:85px">
      <div class="w3-container w3-col l8 s6 "><span class="w3-large"><b>Current Login Details</b></span>
        <br>Name: {{$user->name}}
        <br>Email: {{$user->email}}
        <br>Country: {{$data->countryName}}
        <br>Province: {{$data->regionName}}
        <br>City: {{$data->cityName}}
        <br>Zip Code: {{$data->zipCode}}
      </div>

    </div>
  </a>

</div>

@endsection