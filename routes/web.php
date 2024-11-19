<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{slug}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{slug}', [PostController::class, 'destroy'])->name('posts.delete');
    Route::get('/api/posts/data', [PostController::class, 'data'])->name('posts.data');

    Route::middleware(["admin"])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('dashboard.users');
        Route::get('/dashboard/posts', [DashboardController::class, 'posts'])->name('dashboard.posts');
    });
});
