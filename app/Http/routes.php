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

Route::group(['middleware' => 'auth'], function() {
  // User Dashboard routes...
  Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    Route::get('settings', ['as' => 'dashboard.settings', 'uses' => 'DashboardController@settings']);
    Route::get('{user}/profile', ['as' => 'users.profile', 'uses' => 'UserController@profile']);
    Route::get('{user}/edit', ['as' => 'users.profile.edit', 'uses' => 'UserController@profileEdit']);
    Route::post('{user}', ['as' => 'users.profile.update', 'uses' => 'UserController@profileUpdate']);
    Route::put('{user}', ['as' => 'users.profile.update', 'uses' => 'UserController@profileUpdate']);
  });

  // Messages routes...
  Route::get('messages', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);
  Route::group(['prefix' => 'message'], function () {
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::get('{message}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::post('{message}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
    Route::put('{message}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
  });
});

// Task routes...
Route::get('/tasks', ['as' => 'tasks.index', 'uses' => 'TaskController@index']);
Route::get('/task/{task}', ['as' => 'tasks.show', 'uses' => 'TaskController@show']);
Route::get('/task/{task}/edit', ['as' => 'tasks.edit', 'uses' => 'TaskController@edit']);
Route::post('/task', ['as' => 'tasks.store', 'uses' => 'TaskController@store']);
Route::post('/task/{task}', ['as' => 'tasks.update', 'uses' => 'TaskController@update']);
Route::put('/task/{task}', ['as' => 'tasks.update', 'uses' => 'TaskController@update']);
Route::delete('/task/{task}', ['as' => 'tasks.destroy', 'uses' => 'TaskController@destroy']);
Route::group(['middleware' => 'role:admin'], function() {
  Route::group(['prefix' => 'admin/dashboard'], function () {
    Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'AdminController@index']);
    Route::get('settings', ['as' => 'admin.dashboard.settings', 'uses' => 'AdminController@settings']);
  });

  // Admin template
  Route::get('admin', function () { return view('admin'); });

Route::resource('roles', 'RoleController');
  Route::resource('users', 'UserController');
});

// Authentication routes...
Route::group(['prefix' => 'auth'], function () {
  Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin']);
  Route::post('login', ['as' => 'auth.authenticate', 'uses' => 'Auth\AuthController@postLogin']);
  Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);
  Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
  Route::post('register', ['as' => 'auth.store', 'uses' => 'Auth\AuthController@postRegister']);
});

// Password Reset routes...
Route::group(['prefix' => 'password'], function () {
  // Link request...
  Route::get('email', ['as' => 'password.forgot', 'uses' => 'Auth\PasswordController@getEmail']);
  Route::post('email', ['as' => 'password.email', 'uses' => 'Auth\PasswordController@postEmail']);
  // Reset password...
  Route::get('reset/{token}', ['as' => 'password.token', 'uses' => 'Auth\PasswordController@getReset']);
  Route::post('reset', ['as' => 'password.reset', 'uses' => 'Auth\PasswordController@postReset']);
});
