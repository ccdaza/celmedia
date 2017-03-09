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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/services', 'ServicesController@index');

Route::post('/services/new', 'ServicesController@newService');

Route::get('/services/edit/{service_id}', 'ServicesController@editService');

Route::post('/services/edit/{service_id}', 'ServicesController@edit');

Route::get('/services/inactive/{service_id}', 'ServicesController@inactiveService');