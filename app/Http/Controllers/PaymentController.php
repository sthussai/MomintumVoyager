<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\User;
use App\EventRegister;
use App\Events\PaymentSubmitted;
use App\Notifications\PaymentReceived;
use Illuminate\Support\Collection;

class PaymentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        session(['Event' => 'Processing Payments Through Stripe']);

        $user = Auth::user();

        $stripe_id = $user->stripe_id;

        if ($stripe_id === null) {
            $stripe_enabled = false;
            $message = "You currently don't have online payment options enabled. Would you like to enable online payment options? ";
            return view('payments.index', ['message' => $message, 'stripe_enabled' => $stripe_enabled]);
        } else {
            $stripe_enabled = true;
        }

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $charges = \Stripe\Charge::all(['limit' => 10, 'customer' => $stripe_id]);
        $refunds = \Stripe\Refund::all(['limit' => 10]);
        $customer = \Stripe\Customer::retrieve($stripe_id);

        $invoices = $user->invoices();

        // dd($invoices);

        $user->updateDefaultPaymentMethodFromStripe();

        if ($user->hasPaymentMethod()) {
            $cardonfile = 'Yes';
            $paymentMethods = $user->paymentMethods();
            $defaultPaymentMethod = $user->defaultPaymentMethod();
        } else {
            $cardonfile = null;
            $paymentMethods = null;
            $defaultPaymentMethod = null;
        }

        return view(
            'payments.index',
            ['defaultPaymentMethod' => $defaultPaymentMethod,
                'paymentMethods' => $paymentMethods,
                'stripe_enabled' => $stripe_enabled,
                'refunds' => $refunds,
                'invoices' => $invoices,
                'customer' => $customer,
                'cardonfile' => $cardonfile,
                'user' => $user,
                'charges' => $charges,
            ]
        );
    }

    // Refund an invoice using $payment_intent and void it using $invoice_id

    public function refund(Request $request, $payment_intent, $invoice_id)
    {
        $user = Auth::user();

        $user->refund($payment_intent);
        return redirect('payment')->with('status', 'Invoice Voided Successfully!');
    }

    public function success()
    {
        return view('payment.success');
    }

    public function store(Request $request)
    {
        $token = $request->stripeToken;
        /*         $plan = $request->plan;
                $stripe_plan = $request->stripe_plan;

                $user->newSubscription($plan, $stripe_plan)->create($token); */

        return redirect('/payment');
    }

    public function destroy(Request $request)
    {
        $user = User::find(auth()->id());
        $user->subscription('Momintum')->cancelNow();

        return redirect('/payment');
    }

    public function charge(Request $request)
    {
        $user = auth()->user();
        //dd($request);
        //$paymentMethod ='pm_1FwjYmBGJ32CkWyoT09EC5Mi';
        //$stripeCharge = $user->charge(100, $paymentMethod);
        $user->invoiceFor(
            'One Time Fee',
            400,
            [
                'description' => 50,
            ],
            [
                'description' => 21,
            ]
        );
        event(new PaymentSubmitted($request));
        return redirect('payment')->with('status', 'Invoice Paid Successfully!');
    }

    //Pay event registration fee using default payment method and Update event status
    public function payevent(Request $request, EventRegister $eventregister)
    {
        $user = auth()->user();
        $eventregister = EventRegister::findOrFail(request()->eventregister_id);

        if ($user->hasPaymentMethod()) {
            $user->invoiceFor(
                request()->event_name,
                request()->cost * 100,
                [
                    'description' => $request->event_name,
                ],
                [
                    'description' => $request->event_name,
                ]
            );
            $eventregister->status = 'Paid Online';
            $eventregister->save();

            Notification::send(request()->user(), new PaymentReceived());

            return redirect('payment')->with('status', 'Paid Event Registration Fee Successfully!');
        } else {
            return redirect('payment')->with('status', 'No Payment Method on File');
            ;
        }
    }

    //Adds decimal point to stripe charge value

/*           $charge->amount = substr_replace($charge->amount,".",-2,0);
          $charge->amount = substr_replace($charge->amount,"$",0,0); */

//        $eventregisters = EventRegister::where('owner_id', auth()->id())->get();
//        $activityreports = ActivityReport::where('owner_id', auth()->id())->get();

 //       $charges = \Stripe\Charge::all(["customer" => $stripe_id, "limit" => 5 ]);

 //return($value);
 /* if (session()->has('status')){
     return(session('status'));
 } */

/* $user->newSubscription('main', 'Momintum@Markaz')->create($token, [

    'name' => Auth::user()->name,
    'email' => Auth::user()->email,
    ]);
 */
}
