<?php

namespace Deepsoumya\Apipass;

use Deepsoumya\Apipass\Http\Middleware\ApipassMiddleware;
use Illuminate\Routing\Router;
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
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('apipass', ApipassMiddleware::class);
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
