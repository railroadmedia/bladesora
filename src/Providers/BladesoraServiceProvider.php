<?php

namespace Railroad\Bladesora\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class BladesoraServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->publishes(
            [
                __DIR__ . '/../config/bladesora.php' => config_path('bladesora.php'),
            ]
        );

        $this->loadViewsFrom(__DIR__ . '/../../views', 'bladesora');

        if (file_exists($file = __DIR__ . '/../../helpers/helpers.php')) {
            require $file;
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}