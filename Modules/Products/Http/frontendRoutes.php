<?php
use Illuminate\Routing\Router;
/** @var Router $router */
if (! App::runningInConsole()) {
    $router->get('/products/{id}', [
        'uses' => 'ProductsController@show',
        'as' => 'show_product',
    ]);

}
