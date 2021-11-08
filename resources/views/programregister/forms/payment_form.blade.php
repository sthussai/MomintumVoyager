<form action="/payprogramregistration" method="post"
  class="w3-container w3-card-4 w3-light-grey w3-text-blue-grey w3-margin">
  @csrf

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <div class="w3-input w3-border w3-gray w3-medium">Name: {{ $programregister['registration']->name }}</div>
    </div>
  </div>

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-book"></i></div>
    <div class="w3-rest">
      <div class="w3-input w3-border w3-gray w3-medium">Program Description: {{ $program->description }}</div>
    </div>
  </div>

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-dollar"></i></div>
    <div class="w3-rest">
      <div class="w3-input w3-border w3-gray w3-medium">Program Cost: ${{ $program->monthly_cost }}/month</div>
    </div>
  </div>

  <input class="w3-check" type="checkbox" name="program_name" value="{{ $program->name }}" required>
  <label>I would like to confirm online payment for {{$program->name}}.</label><br>

  <input class="w3-check" type="checkbox" required>
  <label>I authorize charging my card on file for the Program registration cost in the amount of
    ${{$program->monthly_cost}}/month.</label><br>

  <b class="w3-left pt-4 pb-4 pl-2">Email Confirmation and Recipt to:</b>
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-white" name="email" value="{{ Auth::user()->email}}">
    </div>
  </div>

  <button class="w3-button w3-section w3-light-green w3-ripple"> Submit payment</button>

  <!--   Hidden inputs -->
  <input class="w3-input w3-border w3-gray" name="user_id" type='hidden' value="{{ Auth::id()}}">
  <input class="w3-input w3-border w3-gray" name="programregister_id" type='hidden'
    value="{{ $programregister['registration']->id}}">
  <input class="w3-input w3-border w3-gray" name="cost" type='hidden' value="{{ $program->_monthlycost}}">

</form>