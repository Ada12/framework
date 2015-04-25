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
| Controller Routing Documentation: http://laravel.com/docs/5.0/controllers#restful-resource-controllers
| Routing Documentation: http://laravel.com/docs/5.0/routing
*/



Route::pattern('id', '[0-9]+');

Route::get('/', ['uses' => 'WelcomeController@index']);

Route::resource('session', 'SessionController',
                ['only' => ['store', 'destroy']]);
Route::resource('users', 'UserController',
                ['only' => ['store']]);
Route::get('users/sign-in', ['uses' => 'UserController@signIn']);

Route::resource('question.comment','CommentController');