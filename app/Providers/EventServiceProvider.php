<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\EventRegistrationCreated' => [
            'App\Listeners\ListenEventRegistrationCreated',
        ],
        'App\Events\EventRegistrationDeleted' => [
            'App\Listeners\ListenEventRegistrationDeleted',
        ],
        'Illuminate\Auth\Events\Login' => ['App\Listeners\LoginSuccessfulListener'
        ],
        'Illuminate\Auth\Events\Logout' => ['App\Listeners\LogoutSuccessfulListener'
        ],
        'App\Events\UserRegistered' => [
            'App\Listeners\SendWelcomeEmail',
        ],
        'App\Events\PaymentSubmitted' => [
            'App\Listeners\SendPaymentSubmittedNotification',
        ],
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
