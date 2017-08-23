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

//主页
Route::get('/','IndexController@index');


//注册 登陆
Auth::routes();

//个人中心
Route::get('/home', 'HomeController@index')->name('home');
