<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/logged', 'HomeController@index')->middleware('verified')->name('logged');
Route::get('/main', 'MainController@index')->middleware('auth')->name('main');
Route::match(['get','post'],'/main/create', 'MainController@create')->middleware('auth')->name('create');
Route::get('/main/store', 'MainController@store')->middleware('auth')->name('store');



