<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.main');
})->name('main');


Route::get('/artikel', function () {
    return view('main.articles_page_main');
})->name('artikel');


Route::get('/home', function () {
    return view('main.main');
})->name('home');
