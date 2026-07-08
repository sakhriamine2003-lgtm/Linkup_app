<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});


// Feed protégé
Route::middleware('auth')->group(function () {
    Route::get('/feed', [PostController::class, 'index'])->name('feed');
    Route::get('/feedcreate', [PostController::class, 'create'])->name('create');
    Route::post('/feed', [PostController::class, 'store'])->name('feed.store');
});



Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');

// Register
Route::get('/register', [LoginController::class, 'regst'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register.store');




Route::get('/commenter/{post}', [CommentController::class, 'AjouteCommenter'])->name('AjouteCommenter');

Route::post('/posts/{post}/comments', [CommentController::class, 'SaveComment'])->name('SaveComment');

Route::get('/AffCommenter/{post}', [CommentController::class, 'AffCommenter'])->name('PostUserComments');




