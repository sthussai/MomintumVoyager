<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Log;
use Session;

class LoginSuccessfulListener
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
     * @param Login $event
     * @return void
     */
    public function handle(Login $event)
    {
        Log::channel('user')->info(auth()->user()->name . ' just logged into Momintum!');
        Session::flash('login-success', 'Hello ' . $event->user->name . ', welcome back!');
    }
}
