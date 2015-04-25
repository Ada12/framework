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

Route::delete('session', ['uses' => 'SessionController@destroy']);
Route::resource('session', 'SessionController',
                ['only' => ['store']]);

Route::get('sign-in', ['uses' => 'UserController@signIn']);
Route::get('sign-up', ['uses' => 'UserController@signUp']);
Route::resource('users', 'UserController',
                ['only' => ['store']]);

Route::resource('questions', 'QuestionController',
                ['only' => ['store']]);
Route::resource('question.comment','CommentController');
