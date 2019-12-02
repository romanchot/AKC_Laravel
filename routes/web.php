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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/services', 'ServicesController@index')->name('services.show');
Route::get('/formServices', 'ServicesController@formServices')->name('services.form');
Route::post('/saveServices', 'ServicesController@saveServices')->name('services.save');
Route::get('/services/{service}/editServices', 'ServicesController@editService')->name('services.edit');
Route::patch('/services/{service}', 'ServicesController@updateService');
Route::delete('/services/{service}', 'ServicesController@destroy');
