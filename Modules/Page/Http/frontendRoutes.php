<?php

use Illuminate\Routing\Router;
/** @var Router $router */
if (! App::runningInConsole()) {
    $router->get('/', [
        'uses' => 'PageController@homepage',
        'as' => 'homepage',
    ]);
    $router->get('page', [
        'uses' => 'PageController@index'
    ]);
    $router->get('/home', [
        'uses' => 'PageController@homepage',
        'as' => 'homepage',
    ]);
    $router->get('/lessons', [
            'uses' => 'LessonController@index',
            'as' => 'lessons',
        ]);

}
