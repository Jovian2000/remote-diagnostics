<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind('path.public', function() {
            return realpath('../public_html');
        })
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
