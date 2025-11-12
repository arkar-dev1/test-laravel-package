<?php

namespace Cubepasses\Axess;

use Illuminate\Support\ServiceProvider;

class AxessServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'cubepasses');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'cubepasses');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Load package routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'axess');
        
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/axess.php', 'axess'); 
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['axess'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/axess.php' => config_path('axess.php'),
        ], 'axess.config');

        // Publishing the views.
       $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/cubepasses'),
        ], 'axess.views');

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/cubepasses'),
        ], 'axess.assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/cubepasses'),
        ], 'axess.lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
