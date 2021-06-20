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


// Auth Controller
Route::get('/auth','App\Http\Controllers\AuthController@auth');
Route::post('/login','App\Http\Controllers\AuthController@login');
Route::post('/register','App\Http\Controllers\AuthController@register');
Route::get('/logout','App\Http\Controllers\AuthController@logout');
Route::get('/passwordRecovery', function () {
    return view('passwordRecovery');
});


// User Controller
Route::get('/admin','App\Http\Controllers\ProfileController@admin');
Route::get('/profile','App\Http\Controllers\ProfileController@profile');
Route::get('/profileForm','App\Http\Controllers\ProfileController@profileForm');
Route::post('/updateUser','App\Http\Controllers\ProfileController@updateUser');
Route::get('/passwordForm','App\Http\Controllers\ProfileController@passwordForm');
Route::post('/updatePassword','App\Http\Controllers\ProfileController@updatePassword');


// Admin Users Controller
Route::get('/usersList','App\Http\Controllers\AdminUsersController@usersList');
Route::get('/adminAddUserForm', 'App\Http\Controllers\AdminUsersController@adminAddUserForm');
Route::post('/adminAddUser', 'App\Http\Controllers\AdminUsersController@adminAddUser');
Route::get('/adminUserForm/{id}', 'App\Http\Controllers\AdminUsersController@adminUserForm');
Route::post('/adminUpdateUser/{id}','App\Http\Controllers\AdminUsersController@adminUpdateUser');
Route::get('/adminDeleteUser/{id}','App\Http\Controllers\AdminUsersController@adminDeleteUser');


// Admin News Controller
Route::get('/newsList','App\Http\Controllers\AdminNewsController@newsList');
Route::get('/adminAddUserForm', 'App\Http\Controllers\AdminNewsController@adminAddNewForm');
Route::post('/adminAddNew', 'App\Http\Controllers\AdminNewsController@adminAddNew');
Route::get('/adminUpdateNewForm/{id}', 'App\Http\Controllers\AdminNewsController@adminUpdateNewForm');
Route::post('/adminUpdateNew/{id}','App\Http\Controllers\AdminNewsController@adminUpdateNew');
Route::get('/adminDeleteNew/{id}','App\Http\Controllers\AdminNewsController@adminDeleteNew');


// Contact Controller
Route::get('/contact','App\Http\Controllers\ContactController@contact');
Route::post('/sendMessage','App\Http\Controllers\ContactController@sendMessage');


// Autre
Route::get('/news', function () {
    return view('news');
});
Route::get('/article', function () {
    return view('article');
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