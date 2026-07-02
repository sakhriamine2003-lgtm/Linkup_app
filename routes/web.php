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

Route::get('/login', [loginController::class, 'show'])->name('login.show');;
Route::post('/login', [loginController::class, 'login']);


// Route::middleware('auth')->group(function () {
//     Route::get('/feed', [PostController::class, 'index'])->name('feed');
// });

