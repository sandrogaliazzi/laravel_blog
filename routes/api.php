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

Route::post('/coment', 'ComentController@store')->name('coment.create');
Route::post('/editComent', 'ComentController@edit');
Route::get('/showComent/{id}', 'ComentController@show');
Route::get('/loadcoments/{id}', 'ComentController@loadComents')->middleware('web');
Route::put('/updateComent', 'ComentController@update');
Route::delete('/deleteComent{id}', 'ComentController@destroy');
