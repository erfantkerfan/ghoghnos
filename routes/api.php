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

Route::middleware(['CheckTime'])->group(function () {

    // Start Stats Locations Routes
    Route::post('/start', 'GameController@start');
    Route::get('/stat', 'GameController@stat');
    Route::post('/location/{id}', 'GameController@location');


    // Get Routes
    Route::get('/{id}/2', 'GetController@g_2');
    Route::get('/{id}/4', 'GetController@g_4');
    Route::get('/{id}/7', 'GetController@g_7');
    Route::get('/{id}/8', 'GetController@g_8');
    Route::get('/{id}/10', 'GetController@g_10');

    // Post Routes
    Route::post('/{id}/1', 'PostController@p_1');
    Route::post('/{id}/2', 'PostController@p_2');
    Route::post('/{id}/3', 'PostController@p_3');
    Route::post('/{id}/4', 'PostController@p_4');
    Route::post('/{id}/5', 'PostController@p_5');
    Route::post('/{id}/6', 'PostController@p_6');
    Route::post('/{id}/7', 'PostController@p_7');
    Route::post('/{id}/8', 'PostController@p_8');
    Route::post('/{id}/9', 'PostController@p_9');
    Route::post('/{id}/10', 'PostController@p_10');
});