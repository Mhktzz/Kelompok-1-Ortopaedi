<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// LOGIN
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/', [AuthController::class, 'login'])->name('login.process');
