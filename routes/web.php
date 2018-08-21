<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', 'UserController@index');

Route::get('posts/create', 'PostController@create')->middleware('auth');
Route::post('posts','PostController@store')->middleware('auth');

Route::get('login', 'AuthController@login');
Route::post('login', 'AuthController@postLogin');


