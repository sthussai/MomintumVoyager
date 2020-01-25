@extends('payments.layout')

@section('content1')


<div class='w3-card w3-content w3-padding-large'>

<form action="/updatebillinginfo" method="post" id="">
@csrf
@method('PATCH')




<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="name" type="text" placeholder="Name on Card" value="{{$customer->name}}">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-address-card-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="address" type="text" placeholder="Address" @isset($customer->address->line1) value="{{$customer->address->line1}}" @endisset>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge w3-hide-small fa fa-institution"></i></div>


    <div class="w3-quarter w3-margin-right">
      <input class="w3-input w3-border w3-margin-bottom" name="city" type="text" placeholder="City" @isset($customer->address->line1) value="{{$customer->address->city}}" @endisset>
    </div>
    <div class="w3-quarter w3-margin-right">
      <input class="w3-input w3-border w3-margin-bottom" name="state" type="text" placeholder="State" @isset($customer->address->line1) value="{{$customer->address->state}}" @endisset"> 
    </div>
    
</div>




<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Email" value="{{$customer->email}}">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone" value="{{$customer->phone}}">
    </div>
</div>


<button class='w3-button w3-section w3-blue w3-ripple'>Update Billing Information</button>
</form>



</div>




@endsection
