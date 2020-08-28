<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'v1'], function(){
    Route::get('/api/nakama', 'NakamaController@index')->name('getall');
    Route::get('/api/nakama/{id}', 'NakamaController@show')->name('getbyid');
    Route::post('/api/nakama', 'NakamaController@store')->name('create');
    Route::put('/api/nakama/{id}', 'NakamaController@update')->name('update');
    Route::delete('/api/nakama/{id}', 'NakamaController@destroy')->name('delete');
});
