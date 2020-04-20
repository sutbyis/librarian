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

Route::get('/', function () {
    return view('welcome');
});

// userにアクセス時処理。（userにアクセスするとUserController内のindex_homeが処理される。）
Route::get('/user', 'UserController@index_home');


// userにアクセス時処理。（userにアクセスするとUserController内のindex_homeが処理される。）
Route::get('/chart', 'ChartController@chart_home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
