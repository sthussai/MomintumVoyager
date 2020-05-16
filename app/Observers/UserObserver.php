<?php

namespace App\Observers;

use App\User;
use Illuminate\Support\Facades\Log;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        Log::channel('user')->info('New user created with the following name: ' . $user->name . ' and email: '
        . $user->email);
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        Log::channel('user')->info('user UPDATED with the following name: ' . $user->name . ' and email: '
        . $user->email);
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        Log::channel('user')->info('user DELETED with the following name: ' . $user->name . ' and email: '
        . $user->email);
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
