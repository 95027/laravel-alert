<?php

namespace Saicoder\Alert;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'alert');

        // Publish config + view
        $this->publishes([
            __DIR__ . '/../config/alert.php' => config_path('alert.php'),
        ], 'alert-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/alert'),
        ], 'views');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/alert.php', 'alert');

        $this->app->singleton('alert', function () {
            return new Alert();
        });
    }
}
