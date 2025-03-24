<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

Route::get('/login', [Auth\LoginController::class, 'showLogin']);
