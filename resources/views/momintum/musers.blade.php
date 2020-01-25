@extends('layouts.momintum')

@section('content')



<div class='w3-container  '>
<h1> Momintum Users</h1>
    @foreach ($users as $user) 

        <a class="w3-col w3-row-padding l4 m6 s12 w3-margin-bottom " >
          <div class='w3-container w3-padding l4 s6 w3-card w3-button w3-block'>
            <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-left " style=" width:85px">
            <div class="w3-container w3-col l8 s6 " >User Id: {{$user->id }} <br>
          <b>Name: {{$user->name}}</b>
          <br>Email: {{$user->email}}
          </div>

          </div>



        </a>   

    
    @endforeach
    
</div>

@endsection