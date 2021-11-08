@extends('layouts.momintum')

<link href="{{ asset('css/stripe.css') }}" rel="stylesheet">
<script src="https://js.stripe.com/v3/"></script>
@section('title','Payments')

@section('content')



<!-- START Payment Nav Bar -->
<div class="w3-center w3-text-white    w3-panel w3-card">

    <a class="w3-btn" href="/payment">Home</a>
    <a class="w3-btn " href="/addpaymentmethod">Add Payment Method</a>
    <a class="w3-btn " href="/editbillinginfo">Update Billing Information</a>


</div>
<!-- END Payment Nav Bar -->

</div>
<!-- END HERO Image DIV -->
@yield('content1')





@endsection