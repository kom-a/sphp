<?php

    use Framework\Route;
    use Framework\Router;

    Router::addRoute(new Route('users', 'UserController@users', Route::METHOD_GET));
    Router::addRoute(new Route('user/{id}', 'UserController@user', Route::METHOD_GET));
    
