<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed',
[PostController::class, 'index']
);




// Login
Route::get('/login', [loginController::class, 'show'])->name('login.show');;
Route::post('/login', [loginController::class, 'login'])->name('login.store');;

// Register
Route::get('/register', [LoginController::class, 'regst'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register.store');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Feed protégé
Route::middleware('auth')->group(function () {
    Route::get('/feed', [PostController::class, 'index'])->name('index');
    Route::get('/feedcreate', [PostController::class, 'create'])->name('create');
    Route::post('/feed', [PostController::class, 'store'])->name('feed.store');
});


