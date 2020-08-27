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

Route::get('/', function () {
    return view('welcome');
});

Route::get('nakama', 'NakamaController@index')->name('getall');
Route::get('nakama/{id}', 'NakamaController@show')->name('getbyid');
Route::post('nakama', 'NakamaController@store')->name('create');
Route::put('nakama/{id}', 'NakamaController@update')->name('update');
Route::delete('nakama/{id}', 'NakamaController@destroy')->name('delete');
