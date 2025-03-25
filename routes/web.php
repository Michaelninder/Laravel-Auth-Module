<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/login', [LoginController::class, 'showLogin'])->name('auth.login');
Route::get('/register', [RegisterController::class, 'showRegister'])->name('auth.register');
Route::get('/logout', [LogoutController::class, 'logout'])->name('auth.logout')->middleware('auth');
