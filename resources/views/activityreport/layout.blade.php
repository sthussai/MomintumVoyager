@extends('layouts.momintum')


@section('title','Event Index')

@section('content')

<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/events">Home</a>           
                    <a class="w3-btn " href="/events/create">Create New Event</a>


                </div>

@yield('content1')

</div>

@endsection