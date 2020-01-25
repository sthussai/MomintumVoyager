@extends('layouts.momintum')  


@section('content')

<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/events">Home</a>           
                    <a class="w3-btn " href="/events/create">Create New Event</a>

                </div>
<div>
	<div>
<h1>Show Event
</h1></div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      {{ $event->name }}
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      {{ $event->description }}
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      {{ $event->url }}
    </div>
</div>
<figure >
  <img class="w3-image" src="{{$event->url}}">
</figure>
<a  href="/events/{{$previousID}}" class="w3-button    w3-blue-grey">Previous</a>
<a  href="/events/{{$event->id}}/edit" class="w3-button w3-green">Edit</a>
<a  href="/eventregister/{{$event->id}}" class="w3-button w3-green">Register</a>
<a  href="/events/{{$nextID}}" class="w3-button w3-blue-grey">Next</a>
<div class='w3-margin-top'><a  href="/events" class="w3-button w3-light-grey">Home</a></div>
</div>
@endsection
