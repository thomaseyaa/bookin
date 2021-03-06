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


// Auth routes
Route::get('/auth','App\Http\Controllers\AuthController@auth');
Route::post('/login','App\Http\Controllers\AuthController@login');
Route::post('/register','App\Http\Controllers\AuthController@register');
Route::get('/logout','App\Http\Controllers\AuthController@logout');
Route::get('/passwordRecovery','App\Http\Controllers\AuthController@passwordRecovery');


// User routes
Route::get('/admin','App\Http\Controllers\ProfileController@admin');
Route::get('/profile','App\Http\Controllers\ProfileController@profile')->name('profile');
Route::get('/profileForm','App\Http\Controllers\ProfileController@profileForm');
Route::post('/updateUser','App\Http\Controllers\ProfileController@updateUser');
Route::get('/passwordForm','App\Http\Controllers\ProfileController@passwordForm');
Route::post('/updatePassword','App\Http\Controllers\ProfileController@updatePassword');
Route::get('/billingPortal','App\Http\Controllers\ProfileController@billingPortal');


// Admin Users routes
Route::get('/usersList','App\Http\Controllers\AdminUsersController@usersList');
Route::get('/adminAddUserForm', 'App\Http\Controllers\AdminUsersController@adminAddUserForm');
Route::post('/adminAddUser', 'App\Http\Controllers\AdminUsersController@adminAddUser');
Route::get('/adminUpdateUserForm/{id}', 'App\Http\Controllers\AdminUsersController@adminUpdateUserForm');
Route::post('/adminUpdateUser/{id}','App\Http\Controllers\AdminUsersController@adminUpdateUser');
Route::get('/adminDeleteUser/{id}','App\Http\Controllers\AdminUsersController@adminDeleteUser');


// Admin News routes
Route::get('/newsList','App\Http\Controllers\AdminNewsController@newsList');
Route::get('/adminAddNewsForm', 'App\Http\Controllers\AdminNewsController@adminAddNewsForm');
Route::post('/adminAddNews', 'App\Http\Controllers\AdminNewsController@adminAddNews');
Route::get('/adminUpdateNewsForm/{id}', 'App\Http\Controllers\AdminNewsController@adminUpdateNewsForm');
Route::post('/adminUpdateNews/{id}','App\Http\Controllers\AdminNewsController@adminUpdateNews');
Route::get('/adminDeleteNews/{id}','App\Http\Controllers\AdminNewsController@adminDeleteNews');


// Contact routes
Route::get('/contact','App\Http\Controllers\ContactController@contact');
Route::post('/sendMessage','App\Http\Controllers\ContactController@sendMessage');


// Checkout routes
Route::get('/checkout/{id}','App\Http\Controllers\CheckoutController@checkout');
Route::post('/checkout/{id}','App\Http\Controllers\CheckoutController@payment');
Route::get('/payment/success','App\Http\Controllers\CheckoutController@paymentSuccess');
Route::get('/payment/error','App\Http\Controllers\CheckoutController@paymentError');


// News routes
Route::get('/news','App\Http\Controllers\NewsController@showNews');
Route::get('/article/{id}', 'App\Http\Controllers\NewsController@showOneNews');
Route::post('/searchNews', 'App\Http\Controllers\NewsController@searchNews');


// Autre
Route::get('/library', function () {
    return view('library');
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