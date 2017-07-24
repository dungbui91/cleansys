<?php

namespace DungBui\CleanSys;

use Illuminate\Support\ServiceProvider;

class CleansysServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerViews();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Register config
        $this->registerConfig();

        include __DIR__.'/routes.php';
        $this->app->make('DungBui\CleanSys\CleansysController');
    }

    protected function registerViews()
    {
        $location = __DIR__ . '/../resources/views';

        $this->loadViewsFrom($location, 'cleansys');

        $this->publishes([
            $location => base_path('resources/views/vendor/cleansys'),
        ], 'views');
    }

    protected function registerConfig() {
        $location = __DIR__ . "/../config/cleansys.php";

        $this->mergeConfigFrom(
                $location, "cleansys"
            );

        $this->publishes([
                $location => config_path('cleansys.php'),
            ], 'config');
    }
}
