<?php

    use Framework\Route;
    use Framework\Router;

    Router::addRoute(new Route('user/{name}/create', 'UserController@create', Route::METHOD_GET));
    Router::addRoute(new Route('user/{name}/update', 'UserController@update', Route::METHOD_GET));  
    Router::addRoute(new Route('user/{name}', 'UserController@index', Route::METHOD_GET));
    
