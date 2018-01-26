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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

// resource will create all the routes in PostsController
Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
// this is the link for the change password tutorial for lavarel 5.5
// https://www.5balloons.info/setting-up-change-password-with-laravel-authentication/
Route::get('/changePassword','ChangePasswordController@showChangePasswordForm');
Route::post('/changePassword','ChangePasswordController@changePassword')->name('changePassword');