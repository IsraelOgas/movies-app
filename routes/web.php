<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'index');
// Route::view('/movie', 'show');

Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');

// Route::get('/', function () {
//     return view('welcome');
// });
