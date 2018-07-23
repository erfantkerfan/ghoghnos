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
Route::get('/', 'HomeController@landing')->name('landing');
Route::middleware(['Admin'])->group(function () {
    Route::get('/map', 'HomeController@map')->name('map');
    Route::get('/home', 'HomeController@index')->name('home'); # ToDo shity view
    // ToDo localaziong Database
});

Route::middleware(['CheckTime','auth'])->group(function () {
    // Start Stats Locations Routes
    Route::post('/location', 'GameController@location')->name('location');
    Route::get('/start', 'GameController@start')->name('start'); #
    Route::get('/stat', 'GameController@stat')->name('stat'); #
    // Get Routes
    Route::get('/1', 'GetController@g_1')->name('g_1');
    Route::get('/2', 'GetController@g_2')->name('g_2');
    Route::get('/3', 'GetController@g_3')->name('g_3');
    Route::get('/4', 'GetController@g_4')->name('g_4');
    Route::get('/5', 'GetController@g_5')->name('g_5');
    Route::get('/6', 'GetController@g_6')->name('g_6');
    Route::get('/7', 'GetController@g_7')->name('g_7');
    Route::get('/8', 'GetController@g_8')->name('g_8');
    Route::get('/9', 'GetController@g_9')->name('g_9');
    Route::get('/10', 'GetController@g_10')->name('g_10');
    // Post Routes
    Route::post('/1', 'PostController@p_1')->name('p_1');
    Route::post('/2', 'PostController@p_2')->name('p_2');
    Route::post('/3', 'PostController@p_3')->name('p_3');
    Route::post('/4', 'PostController@p_4')->name('p_4');
    Route::post('/5', 'PostController@p_5')->name('p_5');
    Route::post('/6', 'PostController@p_6')->name('p_6');
    Route::post('/7', 'PostController@p_7')->name('p_7');
    Route::post('/8', 'PostController@p_8')->name('p_8');
    Route::post('/9', 'PostController@p_9')->name('p_9');
    Route::post('/10', 'PostController@p_10')->name('p_10');
});