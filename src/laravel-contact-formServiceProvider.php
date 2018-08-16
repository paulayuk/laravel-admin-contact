<?php

namespace paulayuk\laravel-contact-form;

use Illuminate\Support\ServiceProvider;

class laravel-contact-formServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'paulayuk');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'paulayuk');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/laravel-contact-form.php' => config_path('laravel-contact-form.php'),
            ], 'laravel-contact-form.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/paulayuk'),
            ], 'laravel-contact-form.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/paulayuk'),
            ], 'laravel-contact-form.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/paulayuk'),
            ], 'laravel-contact-form.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-contact-form.php', 'laravel-contact-form');

        // Register the service the package provides.
        $this->app->singleton('laravel-contact-form', function ($app) {
            return new laravel-contact-form;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-contact-form'];
    }
}