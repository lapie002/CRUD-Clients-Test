<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', 'ClientsController@index');

Route::get('/formclients', 'ClientsController@create');

Route::post('/saveclient', 'ClientsController@store');


Route::get('/editclient/{id}', 'ClientsController@editClient')->where('id', '[0-9]+');

Route::post('/updateclient/{id}', 'ClientsController@updateClient');

Route::get('/deleteclient/{id}', 'ClientsController@deleteClient')->where('id', '[0-9]+');
