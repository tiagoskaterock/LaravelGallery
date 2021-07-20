<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PostControlador@index');

Route::post('/', 'App\Http\Controllers\PostControlador@store');

Route::delete('/{id}', 'App\Http\Controllers\PostControlador@destroy');

Route::get('/download/{id}', 'App\Http\Controllers\PostControlador@download');