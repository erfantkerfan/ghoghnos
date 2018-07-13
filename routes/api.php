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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::get('/stat' , 'GameController@stat');

Route::post('/location/{id}' , 'GameController@stat');

Route::post('/start' , 'GameController@stat');

Route::get('/{u_id}/1' , 'GameController@g_1');
Route::get('/{u_id}/2' , 'GameController@stat');
Route::get('/{u_id}/3' , 'GameController@stat');
Route::get('/{u_id}/4' , 'GameController@stat');
Route::get('/{u_id}/5' , 'GameController@stat');
Route::get('/{u_id}/6' , 'GameController@stat');
Route::get('/{u_id}/7' , 'GameController@stat');
Route::get('/{u_id}/8' , 'GameController@stat');
Route::get('/{u_id}/9' , 'GameController@stat');
Route::get('/{u_id}/10' , 'GameController@stat');

Route::post('/{u_id}/1' , 'GameController@stat');
Route::post('/{u_id}/2' , 'GameController@stat');
Route::post('/{u_id}/3' , 'GameController@stat');
Route::post('/{u_id}/4' , 'GameController@stat');
Route::post('/{u_id}/5' , 'GameController@stat');
Route::post('/{u_id}/6' , 'GameController@stat');
Route::post('/{u_id}/7' , 'GameController@stat');
Route::post('/{u_id}/8' , 'GameController@stat');
Route::post('/{u_id}/9' , 'GameController@stat');
Route::post('/{u_id}/10' , 'GameController@stat');
