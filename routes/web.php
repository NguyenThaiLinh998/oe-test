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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','OeTest\OeTestController@home')->name('home');
Route::get('/sort','OeTest\OeTestController@sort')->name('sort');
Route::get('/fillter-ajax','OeTest\OeTestController@fillter_ajax')->name('fillter_ajax');
Route::get('/store-ajax','OeTest\OeTestController@store')->name('store');
