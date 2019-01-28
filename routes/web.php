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

// Route::get('/swagger/doc', 'SwaggerController@doc');

Route::group(['prefix' => 'swaggerdoc'], function () {
    Route::get('json', 'SwaggerController@getJSON');
    Route::get('my-data', 'SwaggerController@getMyData');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
