@extends('voyager::master')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <p>Biscuits NEED Gravy!</p>

  <a class="w3-col w3-row-padding l4 m6 s12 w3-margin-bottom " >
          <div class='w3-container w3-padding l4 s6 w3-card w3-button w3-block'>
            <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-left " style=" width:85px">
            <div class="w3-container w3-col l8 s6 " >User Id: {{'user->id' }} <br>
          <b>Name: {{'name'}}</b>
          <br>Email: {{'email'}}
          </div>

          </div>



        </a>   
@stop