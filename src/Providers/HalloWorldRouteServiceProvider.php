<?php

namespace HalloWorld\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HalloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','HalloWorld\Controllers\ContentController@sayHello');
    }
}
