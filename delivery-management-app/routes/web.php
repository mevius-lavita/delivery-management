<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/register', [UserController::class, 'registerview']);
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'loginview'])->name('login');
