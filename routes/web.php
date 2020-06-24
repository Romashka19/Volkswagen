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


Route::get('admin/dashboard',"Admin\AdminController@index")->middleware('auth');
Route::get('admin/users',"Admin\AdminController@users")->middleware('auth');
Route::post('admin/dashboard/createCar',"Admin\AdminController@createCar");
Route::post('admin/dashboard/createCompl',"Admin\AdminController@createCompl");
Route::delete('admin/dashboard/deleteCar',"Admin\AdminController@deleteCar");
Route::delete('admin/dashboard/deleteCompl',"Admin\AdminController@deleteCompl");

Route::get('about/{id}',"User\AboutController@index")->name('about');
Route::post('about/createOrder',['as' => 'orderCreate','uses' => "User\AboutController@createCarOrder"]);

Route::get('configurate/{id}',"User\ConfigurateController@index")->name('configurate');
Route::post('configurate',['as' => 'customOrder', 'uses' => "User\ConfigurateController@createCustomCar"]);


Route::get('register',"Auth\RegisterController@showRegister");
Route::post('register', [ 'as' => 'authReqRegister', 'uses' => 'Auth\RegisterController@register']);

Route::get('login',['as' => 'authLogin', 'uses' => "Auth\LoginController@showLogin"]);
Route::post('login', [ 'as' => 'authReqLogin', 'uses' => 'Auth\LoginController@login']);
Route::get('logout','Auth\LoginController@logout');

Route::get('user','User\UserController@user');
