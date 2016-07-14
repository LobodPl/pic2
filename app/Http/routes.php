<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', 'test@index');
Route::get('/crudtest/{id}', 'crudtest@show');
Route::get('/crudtest', 'crudtest@index');
Route::post('/crudtest', 'crudtest@create');
Route::put('/crudtest/{id}', 'crudtest@update');
Route::delete('/crudtest/{id}', 'crudtest@destroy');

