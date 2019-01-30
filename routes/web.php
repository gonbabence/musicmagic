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

//Home routes
Route::get('/', 'Home@index');
Route::get('/home', 'Home@index');

//Ads routes
Route::get('/ads/list', 'Ads@index');
Route::get('/ads/create', 'Ads@create');
Route::get('/ads/{adid}', 'Ads@details');//->where('adid', '/^[a-f\d]{24}$/i');
Route::post('/ads/save', 'Ads@save');
