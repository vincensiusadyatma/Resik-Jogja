<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('testing');
})->name('main');

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/register/handle', [AuthController::class, 'handleRegister'])->name('handle-register');
    Route::get('/login/handle', [AuthController::class, 'handleLogin'])->name('handle-login');
});

Route::get('/auth/logout', [AuthController::class, 'handleLogout'])->name('handle-logout');