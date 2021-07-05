<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/','HomeController@index');
Route::get('/board','HomeController@show');

Route::get('/projects','ProjectController@index');
Route::get('/tasks','TaskController@index');
Route::get('/tasks/create','TaskController@create');
Route::post('/tasks','TaskController@store');
Route::get('/tasks/{id}','TaskController@show');
Route::get('/tasks/{id}/edit','TaskController@edit');
Route::put('/tasks/{id}','TaskController@update');
Route::DELETE('/tasks/{id}','TaskController@destroy');

