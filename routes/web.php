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

Route::get('/', '\App\Http\Controllers\MainController@index')->name('main_page');



Route::get('/registration_page', '\App\Http\Controllers\RegisterController@getRegisterPage')->name('registration_page');

Route::post('/sign_up', '\App\Http\Controllers\RegisterController@signUp')->name('sign_up');



Route::get('/login_page', '\App\Http\Controllers\LoginController@getLoginPage')->name('login_page');

Route::post('/login', '\App\Http\Controllers\LoginController@login')->name('login');

Route::get('/logout', '\App\Http\Controllers\LoginController@logout')->name('logout');



Route::get('/user_profile', '\App\Http\Controllers\UserController@getUserProfile')->name('user_profile');

Route::get('/admin', '\App\Http\Controllers\AdminController@getAdminPage')->name('admin_page');


