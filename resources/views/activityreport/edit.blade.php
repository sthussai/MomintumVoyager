@extends('layouts.momintum')


@section('content')
<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/events">Home</a>           
                    <a class="w3-btn " href="/events/create">Create New Event</a>

                </div>

                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

<h3 class='w3-center'>Edit Event</h3>

<div>
<form action="/events/{{ $event->id }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">

{{ method_field('PATCH') }}
{{ csrf_field() }}


<h2 class="w3-center">Edit Event</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" required name="name" type="text" placeholder="Edit Name" value="{{ $event->name }}">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="description" type="text" placeholder="Edit Description" value="{{ $event->description }}">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="url" type="text" placeholder="Edit URl" value="{{ $event->url }}">
    </div>
</div>


<p class="w3-center">
<button class="w3-button w3-section w3-green w3-ripple"> Update </button>
</p>
</form>

<form action="/events/{{ $event->id }}" method="POST">
@method('DELETE')
@csrf
  <button class="w3-button w3-section w3-red w3-ripple"> Delete {{$event->name}}?</button>
</form>


</div>


</div>
@endsection
