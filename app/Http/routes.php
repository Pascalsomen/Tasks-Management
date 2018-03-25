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
Route::get('/login', [
    'as' => 'user.login',
    'uses' => 'PagesController@login'
]);
Route::get('/logout', [
    'as' => 'user.logout',
    'uses' => 'PagesController@logout'
]);


Route::post('/login', [
    'as' => 'login',
    'uses' => 'PagesController@postLogin'
]);
Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);


Route::resource('tasks', 'TasksController');
