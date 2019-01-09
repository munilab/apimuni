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

$app->get('/', function () use ($app) {
    return $app->version();
});

//endpoint
$app->get('/api/user', 'userController@index');
$app->get('/api/user/{id}', 'userController@show');
$app->post('/api/user/input', 'userController@add');
$app->put('/api/user/update/{id}', 'userController@update');
$app->delete('/api/user/delete/{id}', 'userController@delete');

$app->get('/api/email', 'emailController@index');
$app->post('/api/email/add', 'emailController@add');

//barang
$app->get('/api/barang', 'barangController@index');
$app->get('/api/barang/{id}', 'barangController@show');
$app->post('/api/barang/add', 'barangController@add');
$app->put('/api/barang/update/{id}', 'barangController@update');
$app->delete('/api/barang/delete/{id}', 'barangController@delete');


$app->post('/api/degelation', 'DegelationController@index');