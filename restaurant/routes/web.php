<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;

Route::get('/', [MenuController::class, 'index']);

Route::get('/register', [AuthController::class, 'index']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/test-users', [AuthController::class, 'testUsers']);
Route::get('/success', function () {
    return view('components.success');
});

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::get('/user-page', function (){
    return view('users.user-page');
})->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
