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

Route::get('/dashboard_admin', function () {
    return view('.dashboard_admin');
})->name('admin.dashboard');

Route::get('/user_admin', function () {
    return view('.user_admin');
})->name('admin.user');
