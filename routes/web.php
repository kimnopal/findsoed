<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware("guest")->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('auth.doLogin');
    Route::post('/register', [AuthController::class, 'doRegister'])->name('auth.doRegister');
});

Route::middleware("auth")->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
});
