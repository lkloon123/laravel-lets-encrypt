<?php
/**
 * @author Lam Kai Loon <lkloon123@hotmail.com>
 */

namespace NeoSon\LetsEncrypt;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class LetsEncryptServiceProvider extends LaravelServiceProvider
{
    public function register()
    {
        $routeConfig = [
            'namespace' => 'NeoSon\LetsEncrypt\Controllers',
            'middleware' => [
                'web',
            ],
        ];

        app('router')->group($routeConfig, function (Router $router) {
            $router->get('/.well-known/acme-challenge/{key}', 'WellKnownController@index');
        });
    }
}