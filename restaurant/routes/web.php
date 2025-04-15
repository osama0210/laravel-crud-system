<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;

Route::get('/', [MenuController::class, 'index']);
Route::get('/register', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
