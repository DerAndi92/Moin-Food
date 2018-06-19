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

require_once base_path('routes/backend.php');

Route::get('/', [
    'as' => 'home', 'uses' => 'HomeController@home'
]);

Route::get('/restaurant/{id}', [
    'as' => 'restaurant', 'uses' => 'HomeController@restaurant'
]);

Route::post('/search', [
    'as' => 'search', 'uses' => 'HomeController@search'
]);
