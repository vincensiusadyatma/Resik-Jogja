<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Core\ForumController;

Route::get('/', function () {
    return view('main.main');
})->name('main');


Route::get('/artikel', function () {
    return view('core.articles');
})->name('artikel');


Route::get('/home', function () {
    return view('main.main');
})->name('home');


Route::get('/forum/dashboard', function () {
    return view('core.forum.dashboard_forum');
});

Route::get('/forum/posts', function () {
    return view('core.forum.post_forum');
});



Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('show-login');
        Route::get('/register', [AuthController::class, 'showRegister'])->name('show-register');
        Route::post('/register/handle', [AuthController::class, 'handleRegister'])->name('handle-register');
        Route::post('/login/handle', [AuthController::class, 'handleLogin'])->name('handle-login');
    });

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'handleLogout'])->name('handle-logout');
    });
});


Route::middleware(['CheckRole:user'])->prefix('forum')->group(function () {
    Route::get('/', [ForumController::class, 'showMain'])->name('show-main-forum');
});

Route::get('/dashboard_admin', function () {
    return view('.dashboard_admin');
})->name('admin.dashboard');

Route::get('/user_admin', function () {
    return view('.user_admin');
})->name('admin.user');

Route::get('/artikel_admin', function () {
    return view('.artikel_admin');
})->name('admin.artikel');
