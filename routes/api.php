<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Auth routes
Route::post('/login','App\Http\Controllers\ApiController@login');
Route::post('/register','App\Http\Controllers\ApiController@register');
Route::get('/logout','App\Http\Controllers\ApiController@logout');

// Profile route
Route::post('/profile','App\Http\Controllers\ApiController@profile');

// News routes
Route::get('/news','App\Http\Controllers\ApiController@showNews');
Route::get('/article/{id}', 'App\Http\Controllers\ApiController@showOneNews');

// Contact route
Route::post('/sendMessage','App\Http\Controllers\ApiController@sendMessage');

