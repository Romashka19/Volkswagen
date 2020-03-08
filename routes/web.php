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

Route::get('/',['as' => 'mainPage','uses' => "User\PageController@main"]);
Route::get('models/',"User\PageController@models")->name('models');


Route::get('admin',"Admin\AdminController@index")->middleware('auth');
Route::post('admin/createCar',"Admin\AdminController@createCar");
Route::post('admin/createCompl',"Admin\AdminController@createCompl");
Route::delete('admin/deleteCar',"Admin\AdminController@deleteCar");
Route::delete('admin/deleteCompl',"Admin\AdminController@deleteCompl");


Route::get('about/{id}',"User\AboutController@index")->name('about');
Route::post('about/createOrder',['as' => 'orderCreate','uses' => "User\OrderController@createOrder"]);

Route::get('configurate/{id}',"User\ConfigurateController@index")->name('configurate');
Route::post('configurate',"User\ConfigurateController@createCustomCar");


Route::get('register',"Auth\RegisterController@showRegister");
Route::post('register', [ 'as' => 'authReqRegister', 'uses' => 'Auth\RegisterController@register']);

Route::get('login',"Auth\LoginController@showLogin");
Route::post('login', [ 'as' => 'authReqLogin', 'uses' => 'Auth\LoginController@login']);
Route::get('logout','Auth\LoginController@logout');
