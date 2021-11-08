<?php

namespace App\Listeners;

use App\Events\EventRegistrationDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ListenEventRegistrationDeleted
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
     * @param  EventRegistrationDeleted  $event
     * @return void
     */
    public function handle(EventRegistrationDeleted $event)
    {
        //
        Log::channel('user')->info(request()->user()->name.' deleted their registration for an event!'); 
    }
}
