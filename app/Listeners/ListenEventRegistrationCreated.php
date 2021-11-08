<?php

namespace App\Listeners;

use App\Events\EventRegistrationCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ListenEventRegistrationCreated
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
     * @param  EventRegistrationCreated  $event
     * @return void
     */
    public function handle(EventRegistrationCreated $event)
    {
        //
        Log::channel('user')->info(request()->user()->name.' registered for an event!');
    }
}
