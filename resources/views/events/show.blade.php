@extends("events.layout")



@section('content1')


<div class="w3-center    w3-panel w3-card">


  <div class='w3-content'>

    <h1>{{ $event->name }}
    </h1>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest"> Cost: $
        {{ $event->cost }}
      </div>
    </div>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">Description:
        {{ $event->description }}
      </div>
    </div>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
      <div class="w3-rest">
        {{ $event->start_date }}
      </div>
    </div>
    <figure>
      <img class="w3-image" src="{{$event->url}}">
    </figure>

    <div class='w3-container'>
      <h3 class="w3-rest">Event Registrations</h3>

      <hr>
      @forelse ($eventregisters as $eventregister)

      <a href='/eventregister/{{$eventregister->id}}' class="w3-col w3-row-padding l4 m6 s12 w3-margin-bottom ">
        <div class='w3-container w3-padding l4 s6 w3-card w3-button w3-block'>
          <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-left " style=" width:85px">
          <div class="w3-container w3-col l8 s6 ">Event Register Id: {{$eventregister->id }} <br>
            <b>Name: {{$eventregister->name}}</b>
            <br>Email: {{$eventregister->email}}
            <br>Registered: {{$eventregister->created_at}}
            <br>Status: {{$eventregister->status}}
          </div>

        </div>



      </a>
      @empty
      <h5 class=' w3-padding'>No current event registrations</h5>
      @endforelse
    </div>

    <a href="/events/{{str_replace(' ', '_', $previousEvent)}}" class="w3-button    w3-blue-grey">Previous</a>
    <a href="/events/{{$event->id}}/edit" class="w3-button w3-green">Edit</a>
    <a href="/eventregister/create/{{$event->id}}" class="w3-button w3-green">Register</a>
    <a href="/events/{{str_replace(' ', '_', $nextEvent)}}" class="w3-button w3-blue-grey">Next</a>
    <div class='w3-margin-top'><a href="/events" class="w3-button w3-light-grey">Home</a></div>
  </div>

</div>
@endsection