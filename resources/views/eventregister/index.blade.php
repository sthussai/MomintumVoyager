@extends("eventregister.layout")



@section('content1')



    <div class="w3-content w3-center w3-panel w3-card">
      <h1>All Events Registrations</h1>

      @foreach ($eventregisters as $eventregister)
      
      <a href="/eventregister/{{$eventregister->id}}" class=" w3-row-padding w3-card  w3-block w3-hover-shadow w3-margin-bottom">
          <div class='w3-col m3 s12 w3-padding-16'>
          <br> {!! $eventregister->status !!}  <hr>
          <p class='w3-center'><img src='https://www.w3schools.com/w3images/avatar2.png' class='w3-image' style='max-height: 100px' alt='Avatar'></p>
          </div>
          <div  class='w3-col m9 s12 w3-padding-16 w3-center'>

        <b>Event Registration ID: {{$eventregister->id}}</b><br>
        Name: {{$eventregister->name}}<br>
        User ID: {{$eventregister->owner_id}}<br>
        Email: {{$eventregister->email}}<br>
        Phone: {{$eventregister->phone}}<br>
        Event ID: {{$eventregister->event_id}}<br>
        Event Name: {{$eventregister->event_name}}<br>
        Created: {{$eventregister->created_at}}<br>
       
        
      </div>
      </a>
              

      @endforeach
              

    </div>

@endsection