<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JonathanTorres\MediumSdk\Medium;

class MediumServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register the medium
        $this->app->bind('medium-php-skd', function () {
            return new Medium(config('medium'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // make a route
        $this->app->make('router')->get('medium', function () {
            return "working Route";
        });
    }
}
