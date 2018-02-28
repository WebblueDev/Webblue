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

Route::get('/', [
    'as' => 'index', 'uses' => 'HomeController@index'
]);

Route::get('/impressum', [
    'as' => 'imprint', 'uses' => 'HomeController@imprint'
]);

Route::get('/agb', [
    'as' => 'agb', 'uses' => 'HomeController@agb'
]);

Route::get('/datenschutz', [
    'as' => 'legal', 'uses' => 'HomeController@legal'
]);

Route::get('/projekte', [
    'as' => 'projects', 'uses' => 'HomeController@projects'
]);

Route::get('/das-ist-andreas', [
    'as' => 'about', 'uses' => 'HomeController@about'
]);