<?php

use Illuminate\Routing\Router;
///** @var Router $router */
$router->group(['prefix' => 'auth', 'middleware'=>'doNotCacheResponse'], function (Router $router) {
//    # Login
    $router->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $router->post('login', 'Auth\LoginController@login');
    $router->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    $router->post('register', 'Auth\RegisterController@register');
    $router->post('password/reset', 'Auth\ResetPasswordController@reset');
    $router->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $router->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $router->get('password/reset', [ 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'])->name('password.request');
    $router->get('logout', ['as' => 'logout', 'uses' => 'Auth\LogoutController@logout']);

});

Route::group(['middleware' => ['auth']], function() {


//    Route::get('/home', 'HomeController@index');

    Route::resource('users','UserController');

});
