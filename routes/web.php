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


Route::get('admin',"AdminController@index");
Route::post('admin/createCar',"AdminController@createCar");
Route::post('admin/createCompl',"AdminController@createCompl");
Route::delete('admin/deleteCar',"AdminController@deleteCar");
Route::delete('admin/deleteCompl',"AdminController@deleteCompl");


Route::get('about/{id}',"AboutController@index")->name('about');

Route::get('configurate',"ConfigurateController@index");
Route::post('configurate',"ConfigurateController@createCustomCar");