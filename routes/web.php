<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.main');
})->name('main');



Route::get('/about', function () {
    return view('main.about_us_main');
})->name('about');