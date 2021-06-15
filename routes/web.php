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

// Home
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


// Controller
Route::get('/enter','App\Http\Controllers\Controller@enter');

Route::post('/login','App\Http\Controllers\Controller@login');

Route::post('/register','App\Http\Controllers\Controller@register');

Route::get('/logout','App\Http\Controllers\Controller@logout');

Route::get('/passwordRecovery', function () {
    return view('passwordRecovery');
});


// User Controller
Route::get('/profile','App\Http\Controllers\UserController@profile');
Route::get('/profileForm','App\Http\Controllers\UserController@profileForm');
Route::post('/updateUser','App\Http\Controllers\UserController@updateUser');
Route::get('/passwordForm','App\Http\Controllers\UserController@passwordForm');
Route::post('/updatePassword','App\Http\Controllers\UserController@updatePassword');


// Admin Controller
Route::get('/admin','App\Http\Controllers\AdminController@admin');
Route::get('/usersList','App\Http\Controllers\AdminController@usersList');
Route::get('/adminUserForm', 'App\Http\Controllers\AdminController@adminUserForm');
Route::post('/adminUpdateUser/{id}','App\Http\Controllers\AdminController@adminUpdateUser');
Route::get('/adminDeleteUser/{id}','App\Http\Controllers\AdminController@adminDeleteUser');


// Autre
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

Route::get('/price', function () {
    return view('price');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/privacy', function () {
    return view('privacy');
});