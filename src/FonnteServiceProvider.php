<?php

namespace Fonnte\Laravel;

use Illuminate\Support\ServiceProvider;
use Fonnte\Laravel\Fonnte;

class FonnteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/fonnte.php' => config_path('fonnte.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/fonnte.php', 'fonnte'
        );

        $this->app->singleton('fonnte', function ($app) {
            $config = $app['config']['fonnte'];
            return new Fonnte($config['token']);
        });
    }
}
