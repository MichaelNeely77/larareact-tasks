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

Route::get('tasks', 'TaskController@index');
Route::get('tasks', 'TaskController@show');
Route::post('tasks', 'TaskController@store');
Route::put('tasks', 'TaskController@update');
Route::delete('tasks', 'TaskController@delete');
