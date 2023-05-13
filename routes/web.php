<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->get('/users',['uses' => 'UserController@UserGetAll']); //get all users

$router->get('/uGet/{id}', 'UserController@userShowID'); // get user by id

$router->post('/uAdd', 'UserController@userAdd'); // create new user record

$router->put('/uUpdate/{id}', 'UserController@userUpdate'); // update user record

$router->delete('/uDelete/{id}', 'UserController@userDelete'); // delete record