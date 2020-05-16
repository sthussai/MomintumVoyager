<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Log;
use Session;

class LogoutSuccessfulListener
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
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        Log::channel('user')->info(auth()->user()->name . ' just logged out of Momintum!');
        Session::flash('logout-success', 'Log out successful.');
    }
}
