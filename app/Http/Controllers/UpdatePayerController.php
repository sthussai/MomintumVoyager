<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;


class UpdatePayerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

//Add or Update Billing Information
    public function updateBillingInfo(Request $request)
    { 
        $user = Auth::user();

        $stripe_id = $user->stripe_id;
        \Stripe\Stripe::setApiKey("sk_test_mjbX2sjmeB1lxyk2p51BvLm0007zjhZL7i");
        $customer = \Stripe\Customer::retrieve($stripe_id);        
   
        $customer = \Stripe\Customer::update($stripe_id,
         [
             'name'=> $request->name,
             'phone'=> $request->phone,
             'email'=> $request->email,
             "address" => ['line1' => $request->address, 
                        'city' => $request->city, 
                        'state' => $request->state, 
                        'postal_code' => $request->zip, ] ,

         ]);
    
         return redirect('payment')->with('status', 'Billing Information Updated Successfully!');
        
    }


    //Form to Add new payment methos
    public function add()
    {  
    $user = auth()->user();
    $stripe_id = $user->stripe_id;
    \Stripe\Stripe::setApiKey("sk_test_mjbX2sjmeB1lxyk2p51BvLm0007zjhZL7i");
    $customer = \Stripe\Customer::retrieve($stripe_id);  
    return view('payer.add', [
        'customer'=>$customer,
        'intent' => $user->createSetupIntent()
    ]);
    }    

    //Adding new payer card after form submit
    public function added(Request $request)
    {   
        $paymentMethod = $request->input('paymentMethod');
        $user = auth()->user();
        if($user->hasPaymentMethod()){
        $user->addPaymentMethod($paymentMethod);}
        else{$user->updateDefaultPaymentMethod($paymentMethod);}

        return redirect('/payment')->with('status', 'Added Payment Method Successfully!');
    }    

    //Return View to Update Account Billing information  
    public function edit()
    {
        $user = Auth::user();
        $stripe_id = $user->stripe_id;
        \Stripe\Stripe::setApiKey("sk_test_mjbX2sjmeB1lxyk2p51BvLm0007zjhZL7i");
        $customer = \Stripe\Customer::retrieve($stripe_id);  
        return view('payer.edit_billing_info',['customer'=>$customer]);
    }    


    //Delete the selected payment method
    public function deletePaymentMethod(Request $request, $paymentMethodId)
    {
    $user = auth()->user();
    $paymentMethod = $user->findPaymentMethod($paymentMethodId); 
    $paymentMethod->delete();
    return redirect('/payment');

    }
}
