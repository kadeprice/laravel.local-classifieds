<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('hello', function(){ return view('hello'); });

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('users', 'UsersController');
Route::get('users/post/{id}', ['as' => 'users.posts', 'uses' => 'UsersController@posts']);

Route::resource('post', 'PostsController');

Route::get('post/category/{name}', ['as' => 'post.category', 'uses' => 'PostsController@category']);

