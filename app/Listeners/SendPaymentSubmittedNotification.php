<?php

namespace App\Listeners;

use App\Events\PaymentSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPaymentSubmittedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PaymentSubmitted  $event
     * @return void
     */
    public function handle(PaymentSubmitted $event)
    {
        $event->request->session()->put('Event', 'Payment Received');
        //        return redirect('payment')->with('status', 'Event Listener Says: Paid Event Registration Fee Successfully!');
       // dd($event);
    }
}
