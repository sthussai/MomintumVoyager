@extends('voyager::master')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">

@foreach($users as $user)

<a class="w3-col w3-row-padding l4 m6 s12 w3-margin-bottom ">
  <div class='w3-container w3-padding l4 s6 w3-card w3-button w3-block'>
    <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-left " style=" width:85px">
    <div class="w3-container w3-col l8 s6 ">User Id: {{$user->id }} <br>
      <b>Name: {{$user->name}}</b>
      <br>Email: {{$user->email}}
      <br>
      Status:       
      @if($user->isOnline()) <span class="w3-text-green">Online</span>
      @else <span class="w3-text-dark-gray">Offline</span>
      @endif
    </div>

  </div>

</a>

@endforeach
<hr>
<div class="w3-bar w3-center w3-padding">
  <a href="/activitieslog" class="w3-xlarge w3-center w3-button w3-blue-grey">View All User Activities</a>
</div>

@stop