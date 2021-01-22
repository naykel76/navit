<?php

namespace Naykel\Navit;

use Illuminate\Support\ServiceProvider;

class NavitServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'navit');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // required files
        $this->publishes(
            [
                __DIR__ . '/Database/seeders' => database_path('/seeders'),
                // __DIR__ . '/../resources/views' => resource_path('views'),
            ],
            'nkr'
        );
    }


    public function register()
    {
        $this->app->singleton('navit', function ($app) {
            return new Navit;
        });
    }
}
