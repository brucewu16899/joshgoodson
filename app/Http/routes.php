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
Route::group(['prefix' => 'search'], function () {
  Route::get('/', ['as' => 'search', function () {
    return view('search');
  }]);
  Route::post('/', ['as' => 'submitSearch', function () {
    return view('search');
  }]);
});

// Admin Dashboard
Route::get('/admin', function () { return view('admin'); });

// Task routes...
Route::group(['prefix' => 'tasks'], function () {
    Route::get('/', ['as' => 'tasks', 'uses' => 'TaskController@index']);
    Route::post('/', ['as' => 'saveTask', 'uses' => 'TaskController@store']);
    Route::delete('{task}', ['as' => 'deleteTask', 'uses' => 'TaskController@destroy']);
});

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
