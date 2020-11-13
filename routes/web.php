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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/portal', function () {
  return view('portal.home');
});

Route::get('/user', function () {
  return view('portal.userPage');
});

Route::get('/admin', function () {
  return view('portal.admin');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/users', 'UsersController', ['except' => ['create', 'store']]);
Route::resource('/locations', 'LocationsController');
