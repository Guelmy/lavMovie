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

Route::get('/', 'movieController@index');

//api vue
Route::get('/api/movie', 'movieController@getAll');
Route::get('/api/movie/{title}', 'movieController@getTo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//controllers
Route::resource('/movie','movieController');
Route::resource('/favorite_movie', 'favoriteMovieController');
Route::resource('/user', 'UserController');