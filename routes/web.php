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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/enter', function () {
    return view('enter');
});

Route::post('/login','App\Http\Controllers\UserController@login');

Route::post('/register','App\Http\Controllers\UserController@register');

Route::get('/logout','App\Http\Controllers\UserController@logout');

Route::get('/profile','App\Http\Controllers\Controller@profile');

Route::get('/password-recovery', function () {
    return view('password-recovery');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::fallback(function() {
    return view('404');
});
