<?php

use Laravel\Lumen\Routing\Router;

/** @var Router $router */

$router->get('/', function () use ($router) {
    return view('index');
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'cash-register'], function () use ($router) {
        $router->get('/', 'CashRegisterController@index');
    });

    $router->group(['prefix' => 'categories'], function () use ($router) {
        $router->get('/', 'CategoryController@index');
        $router->post('/', 'CategoryController@create');
        $router->post('/{id}', 'CategoryController@update');
        $router->delete('/{id}', 'CategoryController@delete');
    });

    $router->group(['prefix' => 'subcategories'], function () use ($router) {
        $router->get('/', 'SubcategoryController@index');
        $router->post('/', 'SubcategoryController@create');
        $router->post('/{id}', 'SubcategoryController@update');
        $router->delete('/{id}', 'SubcategoryController@delete');
    });

    $router->group(['prefix' => 'products'], function () use ($router) {
        $router->get('/', 'ProductController@index');
        $router->post('/', 'ProductController@create');
        $router->get('/{id}', 'ProductController@read');
        $router->post('/{id}', 'ProductController@update');
        $router->delete('/{id}', 'ProductController@delete');
    });

});
