<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'coment'], function () {
    Route::post('create', 'ComentController@store')->name('coment.create');
    Route::post('edit', 'ComentController@edit')->name('coment.edit');
    Route::get('show/{id}', 'ComentController@show')->name('coment.show');
    Route::post('load', 'ComentController@loadComents')->name('coment.load');
    Route::put('update', 'ComentController@update')->name('coment.update');
    Route::delete('delete/{id}', 'ComentController@destroy')->name('coment.destroy');
});


