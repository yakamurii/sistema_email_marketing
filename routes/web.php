<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/send', 'EmailController@index');
Route::post('/send/new', 'EmailController@store');
Route::post('/send/new/{id}', 'EmailController@update');

Route::get('/edit', 'EditController@index');
Route::get('/edit/{id}', 'EditController@edit');
Route::post('/edit/{id}', 'EditController@update');

Route::get('/details/{id}', 'DetailsController@show');

Route::get('delete/{id}', 'HomeController@destroy');


