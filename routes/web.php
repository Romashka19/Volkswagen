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

Route::get('/', "PageController@main");
Route::get('models/',"PageController@models")->name('models');
Route::resource('admin',"AdminController");
Route::get('about/{id}',"AboutController@index")->name('about');
Route::resource('configurate',"ConfigurateController");