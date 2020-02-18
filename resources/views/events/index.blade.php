@extends("events.layout")



@section('content1')




<div class="w3-content w3-center w3-panel w3-card">
  <h1>All Events </h1>





  @foreach ($events as $event)

  <!-- Start Event Listing 1 -->
  <a href="/events/{{$event->id}}" class='w3-row-padding w3-content w3-large' style="solid 2px blue">
    <div class='w3-mobile w3-col l4 m5 s12' style="solid 2px red">
      <img class='w3-image' src="{{$event->url}}" style="max-height:250px;solid 2px red">
    </div>
    <div class='w3-mobile w3-col l8 m7 s12' style="margin-top:10px; solid 2px red;">
      <h3><b>{{$event->name}}</b>
        @if($event->end_date->isPast())
        <span class="w3-right w3-small w3-tag w3-dark-grey w3-round">Event Expired</span>
        @else
        <span class="w3-right w3-small w3-tag w3-blue-grey w3-round">Upcoming Event</span>
        @endif
      </h3>
      <p class="w3-text-grey">{{$event->description}}. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
      <p class="w3-text-grey">Event Dates: {{$event->start_date->toFormattedDateString()}} to
        {{$event->end_date->toFormattedDateString()}}</p>

      <p class='w3-small w3-text-grey'>Created or Updated {{$event->updated_at->diffForHumans()}}</p>
    </div>
  </a>
  <!-- END Event Listing 1 -->




  <hr>



  @endforeach

</div>

@endsection