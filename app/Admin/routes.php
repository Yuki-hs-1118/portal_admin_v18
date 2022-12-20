<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => 'App\\Packages\\Basis\\Application\\Controller',
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'TopController@index')->name('home');
    $router->resource('auth/users', UserController::class);

});
