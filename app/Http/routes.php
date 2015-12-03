<?php

// Home/Welcome
Route::get('/', ['as' => 'home', function () {
  return view('welcome');
}]);
// Blog
Route::get('/blog', ['as' => 'blog', function () {
  return view('blog');
}]);
// About
Route::get('/about', ['as' => 'about', function () {
  return view('about');
}]);
// Contact
Route::get('/contact', ['as' => 'contact', function () {
  return view('contact');
}]);

// Search
Route::get('/search', ['as' => 'search', function () {
  return view('search');
}]);
// Search Submit
Route::post('/search', ['as' => 'submitSearch', function () {
  return view('search');
}]);

// Admin Dashboard
Route::get('/admin', function () { return view('admin'); });

// User Profile
Route::get('/user/profile', ['as' => 'profile', function () {
  return view('users.profile');
}]);
// User Settings
Route::get('/user/settings', ['as' => 'settings', function () {
  return view('users.settings');
}]);
// User Settings
Route::get('/user/messages', ['as' => 'messages', function () {
  return view('messages.inbox');
}]);

// Task routes...
Route::get('/tasks', ['as' => 'tasks', 'uses' => 'TaskController@index']);
Route::post('/task', ['as' => 'saveTask', 'uses' => 'TaskController@store']);
Route::delete('/task/{task}', ['as' => 'deleteTask', 'uses' => 'TaskController@destroy']);

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', ['as' => 'submitLogin', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Password reset link request routes...
Route::get('password/email', ['as' => 'forgotPassword', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email', ['as' => 'submitForgotPassword', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}', ['as' => 'passwordReset', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset', ['as' => 'submitPasswordReset', 'uses' => 'Auth\PasswordController@postReset']);

// Registration routes...
Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', ['as' => 'submitRegister', 'uses' => 'Auth\AuthController@postRegister']);
