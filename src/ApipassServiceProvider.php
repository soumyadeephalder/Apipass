<?php

namespace Deepsoumya\ApiPass;

use Illuminate\Support\ServiceProvider;

class ApipassServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
