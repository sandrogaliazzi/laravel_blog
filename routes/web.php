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
Route::get('/loadcoments', 'ComentController@loadComents');

Route::group(['prefix' => 'post'], function () {
    Route::get('create', 'postController@create')->name('post.create');
    Route::get('{id}', 'postController@show')->name('post.get');
    Route::post('store', 'postController@store')->name('post.store');
    Route::get('edit/{id}', 'postController@edit')->name('post.edit');
    Route::put('update/{id}', 'postController@update')->name('post.update');
    Route::get('destroy/{id}', 'postController@destroy')->name('post.destroy');
});
