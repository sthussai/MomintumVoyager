@extends("eventregister.layout")



@section('content1')

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="w3-center    w3-panel w3-card">



  <form action="/eventregister" method='POST' class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
    {{ csrf_field() }}




    <div class="w3-row w3-section">
      <div class='w3-container'>
        <h2 class="w3-center w3-padding "> Register For Event: {{$event->name}}</h2>
        <p>Event Cost: {{$event->cost}}</p>
        <p class='w3-left'>Event Details: {{$event->description}}</p><br>

      </div>
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" required name="name" type="text" placeholder="Name"
          value="{{Auth::user()->name}}">
        <input class="w3-input w3-border w3-disabled" type="hidden" name="event_id" value="{{ $event->id }}">
        <input class="w3-input w3-border w3-disabled" type="hidden" name="event_name" value="{{ $event->name }}">
      </div>
    </div>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="email" type="text" placeholder="Email" value="{{ Auth::user()->email}}">
      </div>
    </div>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
      </div>
    </div>




    <p class="w3-center">
      <button class="w3-button w3-section w3-blue w3-ripple"> Send </button>
    </p>
  </form>

</div>
@endsection