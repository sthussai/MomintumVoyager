<?php

namespace App\Listeners;
use Mail;
use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeEmail
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {

        session(['newUserRegistered' => $event->user->name]);
        $data = array('name' => $event->user->name, 'email' => $event->user->email, 'body' => 'Welcome to our website. Hope you will enjoy our articles');
 
        Mail::send('emails.mail', $data, function($message) use ($data) {
            $message->to($data['email'])
                    ->subject('Welcome to Momintum');
            $message->from('noreply@momintum.com');
        });
    }
}
