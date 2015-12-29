<?php

namespace Matrix\Applications\Api;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider {

    public function boot()
    {

        $this->registerRoutes($this->app['router']);

    }


    public function register()
    {

    }

    public function registerRoutes(Router $router)
    {
        $router->group(['namespace' => 'Matrix\Applications\Api\Http\Controllers',
            'prefix' => 'api'
        ], function ($router) {
            require app_path('Applications/Api/Http/routes.php');
        });
    }
}