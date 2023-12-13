@extends('layouts.momintum')


@section('title','Programs')

@section('content')

<div class="w3-center w3-text-white   w3-panel w3-card">
    <div class="links w3-center w3-large w3-bar w3-padding-large">
        <a class="w3-btn" href="/mmain">Back to Main Page</a>
    </div>
</div>

<!-- END Hero Image Div -->
</div>
@yield('content1')
 
<!-- Posts -->
<div class="w3-card w3-content w3-margin-top ">
    <div class="w3-container w3-padding ">
        <h4><strong>Other Programs</strong></h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
        @foreach($programs as $listing)
        <a href="/program/{{str_replace(' ', '_', $listing->title)}}">
            <li class="w3-padding-64">
                <img src="{{$listing->url}}" alt="Image" class="w3-left w3-margin-right"
                    style="height:100px; max-width:150px;">
                <span class="w3-large">{{$listing->title}}</span><br>
                <span>{{$listing->subheading}}</span>
            </li>
        </a>
        @endforeach
    </ul>
</div>
<hr>

</div>

@endsection