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
Route::post('/crudtest', 'crudtest@create');
Route::put('/crudtest/{id}', 'crudtest@update');
Route::delete('/crudtest/{id}', 'crudtest@destroy');
Route::get('/resttest/{id}', 'resttest@show');
Route::get('/resttest', 'resttest@index');
Route::post('/resttest', 'resttest@create');
Route::put('/resttest/{id}', 'resttest@update');
Route::delete('/resttest/{id}', 'resttest@destroy');


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/crudtest', [
    'middleware' => 'auth',
    'uses' => 'crudtest@index'
]);
Route::get('/password/change', [
    'middleware' => 'auth',
    'uses' => 'password@index'
]);
Route::post('/password/change', [
    'middleware' => 'auth',
    'uses' => 'password@change'
]);