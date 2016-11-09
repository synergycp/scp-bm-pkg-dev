<?php

namespace _NAMESPACE_\_STUB_;

use App\Http\RouteServiceProvider;
use Illuminate\Routing\Router;

/**
 * Routes regarding Switches.
 */
class _STUB_RoutesProvider
extends RouteServiceProvider
{
    protected function api(Router $router)
    {
        $router->resource(
            '_ROUTE_',
            _STUB_Controller::class
        );
    }
}
