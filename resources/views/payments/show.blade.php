@extends('payments.layout')

@section('content1')

<!-- Start Refunds section -->
<!-- <div class='w3-responsive w3-padding-16' >                              
            <h3>View Refunds</h3>
                                                      <table  class="w3-table-all w3-hoverable ">
                                                        <thead>
                                                          <tr class="w3-blue-grey">
                                                            
                                                            <th>Payment Intent ID</th>
                                                            <th>Charge ID</th>
                                                            <th>Refund Amount</th>
                                                            <th>Customer</th>


                                                     
                                                          </tr>
                                                        </thead>  
                                                        @foreach ($refunds as $refund)
                                                        <tr>
                                                          <td>{{$refund->payment_intent}}</td>
                                                          <td>{{$refund->charge}}</td>
                                                          <td>{{$refund->amount}}</td>
                                                          <td>{{$refund->charge}}</td>
                                                                
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                      </table>
    
        </div> -->
<!-- END Refunds section -->




<!-- Start Charges Section -->
<!--         <div class='w3-responsive w3-padding-16' >                              
          <h3>View All Charges</h3>
                                                      <table  class="w3-table-all w3-hoverable ">
                                                        <thead>
                                                          <tr class="w3-blue-grey">
                                                            
                                                            <th>Date</th>
                                                            <th>Amount</th>
                                                            <th>Customer</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Invoice</th>
                                                            <th>Action</th>
                                                          </tr>
                                                        </thead>
                                                        foreach ($charges as $charge)
                                                        <tr>
                                                          <td>{{$charge->created}}</td>
                                                          <td>{{$charge->amount}}</td>
                                                          <td>{{$charge->customer}}</td>
                                                          <td>{{$charge->description}}</td>
                                                          <td>{{$charge->payment_intent}}</td>
                                                          <td>{{$charge->status}}</td>

                                  
                                                  
                                                          <td>
                                                          <form method='get' action="/user/refund/{{ $charge->payment_intent }}/{{$charge->id}}">
                                                          @csrf
                                                          <button class='w3-btn w3-pale-red'>Cancel</button>
                                                          </form>
                                                          </td>
                                                      
                                                                
                                                        </tr>
                                                        endforeach
                                                        <tr>
                                                      </table>
    
        </div> -->
<!-- END Charges Section -->


@endsection