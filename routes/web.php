<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

Route::get('/login', [Auth\LoginController::class, 'showLogin'])->name('auth.login');
Route::get('/register', [Auth\RegisterController::class, 'showRegister'])->name('auth.register');
Route::get('/logout', [Auth\LogoutController::class, 'logout'])->name('auth.logout')->middleware('auth');
