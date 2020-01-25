@extends('layouts.momintum')  


@section('content')

<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/eventregister">Home</a>           
                    <a class="w3-btn " href="/events/create">Create New Event</a>

                </div>
<div>

<div class='w3-content'>
	<div >
<h1>Registration for Event: {{$event->name}}
<span class='w3-right w3-small'>Event Registration ID:{{ $eventregister->id }}</span>
</h1></div>

<div class="w3-row w3-section">

    <div class="w3-rest">
    <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-" style="height:100px;width:100px" alt="Avatar"><br><br>

      Participant name: {{ $eventregister->name }}
    </div>
</div>

<div class="w3-row w3-section">

    <div class="w3-rest">Event Description:
      {{ $event->description }}
    </div>
</div>

<div class="w3-row w3-section">

    <div class="w3-rest">Event Cost: $
      {{ $event->cost }}
    </div>
</div>


<div class="w3-row w3-section">

    <div class="w3-rest w3-card-4 w3-large w3-padding-large">Registration Status: 
      {!! $eventregister->status !!}
      <hr>
@if($showform)
      <form action="/eventregister/confirm/{{ $eventregister->id }}" method='post'>
      @csrf
      <div class='w3-medium w3-padding'>To confirm registration, please select from the options below: 
            <div>      <br> 
            <input class="w3-radio" type="radio" name="status" value="Confirmed: Pending payment online" >
            <label>I would like to pay securely online.</label>
            </div>
            <div>
            <input class="w3-radio" type="radio" name="status" value="Confirmed: will pay in person">
            <label>I would like to pay in person.</label>
            </div>
            <div>
            <input class="w3-radio" type="radio" name="status" value="Cancelled">
            <label>I would like to cancel my registration.</label>
            </div>
            <button class="w3-button w3-section w3-light-green w3-ripple"> Submit confirmation</button>
      </div>
      
      </form>
@endif      

    </div>
</div>

        <div class='w3-margin-top'>
        @if($online)
          <button onclick="openModal()" class="w3-button    w3-blue-grey">Proceed to Payment</button>
        @endif
<!--              START modal section -->
<script>
                          function openModal(){
                              document.getElementById('id01').style.display='block';
                              
                          };
                        
                      </script>


                      <!-- The Modal -->
                      <div id="id01" class="w3-modal ">      
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                            <header class="w3-container w3-blue-grey"> 
                              <span onclick="document.getElementById('id01').style.display='none'" 
                              class="w3-button w3-display-topright">&times;</span>
                              <h2 class='w3-padding'>Submit Payment Online</h2>
                            </header>
                            <div id="modalContainter" class="w3-container">
                              
                              @include('eventregister.forms.payment_form')
                            </div>
                            <div class="w3-container w3-padding w3-blue-grey">
                                <button class="w3-button w3-right w3-white " 
                        onclick="document.getElementById('id01').style.display='none'">Close</button>

                            </div>
                        </div>
                      </div>

<!--              END modal section -->        



@if($showDeleteForm)
<form action="/eventregister/{{ $eventregister->id }}" method="POST">
@method('DELETE')
@csrf
  <button class="w3-button w3-section w3-red w3-ripple"> Delete registration in {{$event->name}}?</button>
</form>
@endif          
          

        </div>

</div>
@endsection
