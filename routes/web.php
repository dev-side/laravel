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
Route::get('/post/list','PostController@index');

Route::get('/post/view/{id}', 'PostController@view');
Route::post('/post/add/', 'PostController@add');

Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/update/{id}', 'PostController@update');
Route::get('/post/delete/{id}', 'PostController@delete');

Route::get('/', function () {
    return view('welcome');
});


