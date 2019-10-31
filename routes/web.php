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

Auth::routes();

Route::get('/', 'postController@index')->name('home');
Route::get('/dashboard', 'UserController@showAdminPanel')->name('user.dashboard');

Route::group(['prefix' => 'post'], function () {
    Route::get('{id}', 'postController@show')->name('post.get');
});
