<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('testing');
});

Route::get('/login', function () {
    return view('.login');
})->name('login');

Route::get('/register', function () {
    return view('.register');
})->name('register');
