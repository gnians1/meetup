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
Route::get('/', 'WelcomeController@index');
Route::get('about', 'WelcomeController@about');
Route::resource('issues', 'IssuesController');
Route::resource('pjax','PjaxController');
//登录
Auth::routes();

Route::get('blog','BlogController');

