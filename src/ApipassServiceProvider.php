<?php

namespace Deepsoumya\ApiPass;

use Illuminate\Support\ServiceProvider;

class ApiPassServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        // 2022_07_08_072915_create_apipass_access_tokens_table
        // if ($this->app->runningInConsole()) {
            
              $this->publishes([
                __DIR__.'/database/migrations/' => database_path('migrations')
            ], 'migrations');
        // }
       
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
