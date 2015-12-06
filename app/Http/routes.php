<?php

// Pages and Blog index
Route::group(['prefix' => '/'], function () {
  Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);
  Route::get('blog', ['as' => 'blog', 'uses' => 'PostController@index']);
  Route::get('about', ['as' => 'about', 'uses' => 'PageController@about']);
  Route::get('contact', ['as' => 'contact', 'uses' => 'PageController@contact']);
});

// Search
Route::post('search/{term}', ['as' => 'search', 'uses' => 'SearchController@search']);

// Admin template
Route::get('admin', function () { return view('admin'); });

Route::group(['middleware' => 'auth'], function() {
  Route::get('dashboard', 'DashboardController@index');
  Route::get('dashboard/edit/{user_id}', 'UserController@edit');
  Route::post('dashboard/edit/{user_id}', 'UserController@update');
});

Route::group(['middleware' => 'admin'], function() {
  Route::get('admin/dashboard', 'AdminController@index');
  Route::get('admin/dashboard/users', 'UserController@index');
  Route::get('admin/dashboard/users/create', 'UserController@create');
  Route::post('admin/dashboard/users/create', 'UserController@store');
  Route::get('admin/dashboard/users/edit/{id}', 'UserController@edit');
  Route::post('admin/dashboard/users/edit/{id}', 'UserController@update');
  Route::post('admin/dashboard/users/delete/{id}', 'UserController@destroy');
});

// Task routes...
Route::get('/tasks', ['as' => 'tasks.index', 'uses' => 'TaskController@index']);
Route::get('/task/{task}', ['as' => 'tasks.show', 'uses' => 'TaskController@show']);
Route::get('/task/{task}/edit', ['as' => 'tasks.edit', 'uses' => 'TaskController@edit']);
Route::post('/task', ['as' => 'tasks.store', 'uses' => 'TaskController@store']);
Route::post('/task/{task}', ['as' => 'tasks.update', 'uses' => 'TaskController@update']);
Route::put('/task/{task}', ['as' => 'tasks.update', 'uses' => 'TaskController@update']);
Route::delete('/task/{task}', ['as' => 'tasks.destroy', 'uses' => 'TaskController@destroy']);

// User routes...
Route::group(['prefix' => 'user'], function () {
  Route::get('profile', ['as' => 'profile', function () {
    return view('users.profile');
  }]);
  Route::get('settings', ['as' => 'settings', function () {
    return view('users.settings');
  }]);
  Route::get('messages', ['as' => 'messages', function () {
    return route('messages.show');
  }]);
});

Route::resource('roles', 'RoleController');
// Messages routes...
Route::group(['prefix' => 'messages'], function () {
  Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
  Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
  Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
  Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
  Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

// Authentication routes...
Route::group(['prefix' => 'auth'], function () {
  Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
  Route::post('login', ['as' => 'submitLogin', 'uses' => 'Auth\AuthController@postLogin']);
  Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
  Route::get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
  Route::post('register', ['as' => 'submitRegister', 'uses' => 'Auth\AuthController@postRegister']);
});

// Password Reset routes...
Route::group(['prefix' => 'password'], function () {
  // Link request...
  Route::get('email', ['as' => 'forgotPassword', 'uses' => 'Auth\PasswordController@getEmail']);
  Route::post('email', ['as' => 'submitForgotPassword', 'uses' => 'Auth\PasswordController@postEmail']);
  // Reset password...
  Route::get('reset/{token}', ['as' => 'passwordReset', 'uses' => 'Auth\PasswordController@getReset']);
  Route::post('reset', ['as' => 'submitPasswordReset', 'uses' => 'Auth\PasswordController@postReset']);
});
