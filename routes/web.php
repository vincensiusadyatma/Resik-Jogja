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

Route::get('/forum', function () {
    return view('main.forum');
})->name('forum');

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show-login');
     Route::get('/register', [AuthController::class, 'showRegister'])->name('show-register');
    Route::post('/register/handle', [AuthController::class, 'handleRegister'])->name('handle-register');
    Route::post('/login/handle', [AuthController::class, 'handleLogin'])->name('handle-login');
});

Route::post('/auth/logout', [AuthController::class, 'handleLogout'])->name('handle-logout');



Route::get('/dashboard_admin', function () {
    return view('.dashboard_admin');
})->name('admin.dashboard');

Route::get('/user_admin', function () {
    return view('.user_admin');
})->name('admin.user');
