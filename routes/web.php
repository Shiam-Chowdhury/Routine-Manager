<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/login','pagesController@getLogin');

Route::get('/about', 'pagesController@getAbout');

Route::get('/', 'pagesController@getIndex');

Route::get('/register', 'pagesController@getRegister');
