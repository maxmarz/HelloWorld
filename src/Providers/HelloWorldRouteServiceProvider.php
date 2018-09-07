<?php

namespace HelloWorld\Providers;

use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $router->get('hello','HelloWorld\Controllers\ContentController@sayHello');
    }
}
