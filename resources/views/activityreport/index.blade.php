@extends("events.layout")



@section('content1')



    <div class="w3-content w3-center w3-panel w3-card">
      <h1>All Events </h1>

      @foreach ($events as $event)

      <a href="/events/{{$event->id}}" class="w3-card  w3-block w3-hover-shadow w3-margin-bottom">
      <div style="border: solid 2px darkgrey" class=' w3-content w3-padding-16 w3-display-container'>
        {{$event->name}}
       
        
      </div>
      </a>
              

      @endforeach
    </div>

@endsection