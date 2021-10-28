<?php

namespace WDevs\LaravelValueserp\Providers;

use Illuminate\Support\ServiceProvider;
use WDevs\LaravelValueserp\LaravelValueserp;

class LaravelValueserpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-valueserp');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-valueserp');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/valueserp.php' => config_path('valueserp.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-valueserp'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-valueserp'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-valueserp'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/valueserp.php', 'laravel-valueserp');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-valueserp', function () {
            return new LaravelValueserp;
        });
    }
}
