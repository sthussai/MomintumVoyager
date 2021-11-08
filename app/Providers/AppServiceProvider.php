<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\Observers\UserObserver;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Paginator::useBootstrap();
    }
}
