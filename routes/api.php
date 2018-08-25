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

Route::group(['middleware'  =>  'cors', 'prefix'=>'posts'], function () {
    Route::get('getAllWithCode/{code?}', 'PostsController@getAllWithCode');
    Route::get('showWithCode/{code?}/{id?}', 'PostsController@showWithCode');
    Route::post('store', 'PostsController@store');
    Route::put('update/{id}', 'PostsController@update');
    Route::delete('destroy/{id?}', 'PostsController@destroy');
});
