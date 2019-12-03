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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->group(['prefix' => 'api'], function () use ($router) {
// $router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {
    
    $router->get('characteristics',  ['uses' => 'CharacteristicController@showAll']);
    $router->get('characteristics/{id}', ['uses' => 'CharacteristicController@findById']);
    $router->post('characteristics', ['uses' => 'CharacteristicController@create']);
    $router->put('characteristics', ['uses' => 'CharacteristicController@edit']);
    $router->delete('characteristics/{id}', ['uses' => 'CharacteristicController@delete']);
    
});

