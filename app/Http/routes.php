<?php

// Welcome
Route::get('/', function () { return view('welcome'); });
// Admin template
Route::get('/admin', function () { return view('admin'); });
// Blog listing
Route::get('/blog', function () { return view('blog'); });
// About
Route::get('/about', function () { return view('about'); });

// Task routes...
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
