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

Route::group(['prefix' => 'posts', 'middleware' => 'auth'], function (){
    Route::get('create', 'PostController@create')->name('posts.create');
    Route::post('/','PostController@store')->name('posts.store');
    Route::get('/','PostController@index')->name('posts.list');
    Route::get('edit/{slug}','PostController@edit')->name('posts.edit');
    Route::post('{slug}','PostController@update')->name('posts.update');
});

Route::get('posts/{slug}','PostController@show')->name('posts.single');

Route::get('login', 'AuthController@login');
Route::post('login', 'AuthController@postLogin');


