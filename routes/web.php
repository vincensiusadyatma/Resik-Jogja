<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('main.main');
})->name('main');


Route::get('/artikel', function () {
    return view('main.articles_page_main');
})->name('artikel');


Route::get('/home', function () {
    return view('main.main');
})->name('home');
   

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::post('/register/handle', [AuthController::class, 'handleRegister'])->name('handle-register');
    Route::post('/login/handle', [AuthController::class, 'handleLogin'])->name('handle-login');
});

Route::post('/auth/logout', [AuthController::class, 'handleLogout'])->name('handle-logout');
