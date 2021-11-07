@extends('voyager::master')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<a class="w3-col w3-row-padding l4 m6 s12 w3-margin-bottom ">
  <div class='w3-container w3-padding l4 s6 w3-card w3-button w3-block'>
    <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-left " style=" width:85px">
    <div class="w3-container w3-col l8 s6 ">User Id: {{'user->id' }} <br>
      <b>Name: {{'name'}}</b>
      <br>Email: {{'email'}}
    </div>

  </div>

  

  
  <div>
    <h5>Feeds</h5>
    <table class="w3-table w3-striped w3-white">
      <tr>
        <th>Log Name</th>
        <th>Subject Type/ID</th>
        <th>Action</th>
        <th>Causer Type/ID</th>
        <th>Changes Made</th>
        <th>Updated At</th>
      </tr>
      @foreach($activities as $activity)
      <tr>
<!--         <td><i class="fa fa-user w3-text-blue w3-large"></i></td> -->
        <td>{{$activity->log_name}}</td>
        <td>{{$activity->subject_type}} Id: {{$activity->subject_id}}</td>
        <td>{{$activity->description}}</td>
        <td >{{$activity->causer_type}} Id: {{$activity->causer_id}}</td>
        <td style="max-width: 200px">{{$activity->properties}}</td>
        <td><i>{{$activity->updated_at}}</i></td>
      </tr>
      @endforeach

    </table>
  </div>

</a>
@stop