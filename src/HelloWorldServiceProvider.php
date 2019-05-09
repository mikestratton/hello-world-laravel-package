<?php

namespace Mikestratton\Hello;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__ . '/../routes/hello-world.php';
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'helloworldpackage');
    }
}
