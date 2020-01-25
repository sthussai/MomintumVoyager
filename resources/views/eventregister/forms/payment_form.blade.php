<form action="/payevent" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue-grey w3-margin">
@csrf
<div class="red"><?php  ?></div>
<div class="green"><?php  ?></div>
<!-- <select class="w3-select" name="select_event" required>
  <option value="" disabled selected>Select your option</option>
  <option value="Momintum Mastermind">Momintum Mastermind</option>
  <option value="Camping in the Mountains">Camping in the Mountains</option>
  <option value="Canoeing on the River">Canoeing on the River</option>
</select>
 --> 

 <div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-gray" name="user_id" type='hidden'value="{{ Auth::id()}}">
      <input class="w3-input w3-border w3-gray" name="eventregister_id" type='hidden'value="{{ $eventregister->id}}">
      <input class="w3-input w3-border w3-gray" name="email" value="{{ Auth::user()->email}}">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-gray" name="name" type="text" value="{{ Auth::user()->name }}" placeholder="Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">      
      <div class="w3-input w3-border w3-gray"   >Event Description: {{ $event->description }}</div>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">      
      <input class="w3-input w3-border w3-gray" name="cost"  value="{{ $event->cost }}">
    </div>
</div>

<input class="w3-check" type="checkbox" name="event_name" value="{{ $event->name }}" required>
<label>I would like to confirm online payment for {{$event->name}}.</label><br>

<input class="w3-check" type="checkbox" required>
<label>I authorize charging my card on file for the Event registration cost in the amount of ${{$event->cost}}.</label><br>

<button class="w3-button w3-section w3-light-green w3-ripple"> Submit payment</button>


</form>
