<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' => '', 'middleware'=>'doNotCacheResponse'], function (Router $router) {
    $router->get('user', ['as' => 'user', 'uses' => 'DatatablesController@getIndex']);
    $router->get('user/{id}/edit', ['as' => 'user.edit', 'uses' => 'UserAdminController@edit']);
    $router->get('user/ajax/get_list', ['as' => 'datatables.data', 'uses' => 'DatatablesController@anyData']);

    /*--Role route--*/
    Route::get('roles',['as'=>'roles.index','uses'=>'RoleAdminController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleAdminController@create','middleware' => ['permission:role-create']]);
    Route::post('roles/store',['as'=>'roles.store','uses'=>'RoleAdminController@store','middleware' => ['permission:role-create']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleAdminController@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleAdminController@edit','middleware' => ['permission:role-edit']]);
    Route::post('roles/{id}',['as'=>'roles.update','uses'=>'RoleAdminController@update','middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleAdminController@destroy','middleware' => ['permission:role-delete']]);


});

