<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [MenuController::class, 'index'])->name('index');
Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');

// Authentication
Route::get('/register', [AuthController::class, 'index']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Success Page
Route::get('/success', function () {
    return view('components.success');
});

// User Page
Route::get('/user-page', function () {
    return view('users.user-page');
})->middleware('auth');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [MenuController::class, 'showAdminProducts'])->name('admin.dashboard');

    Route::post('/admin/products', [MenuController::class, 'store'])->name('products.store');
    Route::put('/admin/products/{id}', [MenuController::class, 'update'])->name('product.update');
    Route::delete('/admin/products/{id}', [MenuController::class, 'destroy'])->name('products.destroy');

    Route::post('/admin/category', [MenuController::class, 'store_category'])->name('products.category');
});
