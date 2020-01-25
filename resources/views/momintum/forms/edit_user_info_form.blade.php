<form action="/updateuser" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue-grey w3-margin">
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
      <div class="w3-input w3-border w3-gray" >{{ Auth::user()->email }}</div>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="name" required type="text" value="{{ Auth::user()->name }}" placeholder="Name">
    </div>
</div>



<input class="w3-radio" type="radio" name="gender" value="male" checked>
<label>Male</label>

<input class="w3-radio" type="radio" name="gender" value="female">
<label>Female</label>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="parent" type="text" required placeholder="Parent/Emergency Contact">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" required placeholder="Phone">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" required placeholder="Email">
    </div>
</div>





<button class="w3-button w3-block w3-section w3-blue-grey w3-ripple w3-padding" name="submit">Submit</button>

</form>
