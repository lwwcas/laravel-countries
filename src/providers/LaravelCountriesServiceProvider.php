<?php

namespace Lwwcas\LaravelCountries\Providers;

use Illuminate\Support\ServiceProvider;
use Lwwcas\LaravelCountries\LaravelCountries;

class LaravelCountriesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-countries');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-countries');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('laravel-countries.php'),
            ], 'laravel-countries-config');

            // Publishing the migrations.
            // $this->publishes([
            //     __DIR__ . '/../database/migrations' => database_path('migrations'),
            // ], 'laravel-countries-migrations');

            // Publishing the seeds.
            // $this->publishes([
            //     __DIR__ . '/../database/seeders' => database_path('seeders/LwwcasLaravelCountries'),
            // ], 'laravel-countries-seeds');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-countries'),
            ], 'views');*/

            // Publishing assets.
            // $this->publishes([
            //     __DIR__ . '/../resources/assets' => public_path('vendor/laravel-countries'),
            // ], 'assets');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-countries'),
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
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravel-countries');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-countries', function () {
            return new LaravelCountries;
        });
    }
}
