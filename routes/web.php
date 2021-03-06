<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
   });
   
// $router->group(['prefix'=>'api'], function() use (router)){
//     $router->get('/users',['uses'=>''])
// } 

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middlware' => 'client.credentials'], function() use ($router){


//SITE 1
$router->get('/users1', 'User1Controller@show');
$router->post('/users1', 'User1Controller@create');
$router->get('/users1/{id}', 'User1Controller@search');
$router->put('/users1/{id}', 'User1Controller@update');
$router->delete('/users1/{id}', 'User1Controller@delete');

//SITE 2
$router->get('/users2', 'User2Controller@show');
$router->post('/users2', 'User2Controller@create');
$router->get('/users2/{id}', 'User2Controller@search');
$router->put('/users2/{id}', 'User2Controller@update');
$router->delete('/users2/{id}', 'User2Controller@delete');


});