<?php

namespace Matrix\Applications\Site\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class SiteServiceProvider extends ServiceProvider {

    public function boot()
    {

        $this->registerRoutes($this->app['router']);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'site');

    }


    public function register()
    {

    }

    public function registerRoutes(Router $router)
    {
        $router->group(['namespace' => 'Matrix\Applications\Site\Http\Controllers'], function ($router) {
            require app_path('Applications/Site/Http/routes.php');
        });
    }
}