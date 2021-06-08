<?php

use Laravel\Lumen\Routing\Router;

/** @var Router $router */

$router->get('/', function () use ($router) {
    return view('index');
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('/dashboard', 'DashboardController@index');

    $router->group(['prefix' => 'categories'], function () use ($router) {
        $router->get('/', 'CategoryController@index');
        $router->post('/', 'CategoryController@create');
        $router->put('/{id}', 'CategoryController@update');
        $router->delete('/{id}', 'CategoryController@delete');
    });

    $router->group(['prefix' => 'subcategories'], function () use ($router) {
        $router->get('/', 'SubcategoryController@index');
        $router->post('/', 'SubcategoryController@create');
        $router->put('/{id}', 'SubcategoryController@update');
        $router->delete('/{id}', 'SubcategoryController@delete');
    });

    $router->group(['prefix' => 'products'], function () use ($router) {
        $router->get('/', 'ProductController@index');
        $router->post('/', 'ProductController@create');
        $router->get('/{id}', 'ProductController@read');
        $router->put('/{id}', 'ProductController@update');
        $router->delete('/{id}', 'ProductController@delete');
    });
});
