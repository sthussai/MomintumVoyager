@extends('layouts.momintum')


@section('title','Payments')

@section('content')



<div class="w3-center    w3-panel w3-card">

<!-- START Payment Nav Bar -->
                    <a class="w3-btn" href="/payment">Home</a>           
                    <a class="w3-btn " href="/addpaymentmethod">Add Payment Method</a>
                    <a class="w3-btn " href="/editbillinginfo">Update Billing Information</a>


                </div>
<!-- END Payment Nav Bar -->    

    </div>            

@yield('content1')





 @endsection



