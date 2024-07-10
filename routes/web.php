<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about us', function () {
    return view('about us');
});

Route::get('/contact us', function () {
    return view('contact us');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('users', [UserController::class,'index']);