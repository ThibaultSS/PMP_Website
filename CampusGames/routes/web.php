<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Homecontroller::class, 'index']);
Route::get('/statistiek', [\App\Http\Controllers\Statisticcontroller::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\Contactcontroller::class, 'index']);
Route::post('/contact', [\App\Http\Controllers\Contactcontroller::class, 'submit']);