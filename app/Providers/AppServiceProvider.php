<?php

namespace JoshGoodson\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'development') {
          $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
          $this->app->register('Laralib\L5scaffold\GeneratorsServiceProvider');
        }
    }
}
