<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;

Route::get('/', [MenuController::class, 'index'])->name('index');

Route::get('/menu', function (){
    return view('menu.menu');
})->name('menu');

Route::get('/register', [AuthController::class, 'index']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/test-users', [AuthController::class, 'testUsers']);
Route::get('/success', function () {
    return view('components.success');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::get('/user-page', function (){
    return view('users.user-page');
})->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/admin', function () {
    return view('admin.admin-dashboard');
})->middleware('auth', 'admin');


Route::get('/admin', [MenuController::class, 'showAdminProducts'])->middleware(['auth', 'admin']);
Route::post('/admin/products', [MenuController::class, 'store'])->name('products.store');

Route::post('/admin/category', [MenuController::class, 'store_category'])->name('products.category');

Route::put('/admin/products/{id}', [MenuController::class, 'update'])->name('product.update');

Route::delete('/admin/products/{id}', [MenuController::class, 'destroy'])->name('products.destroy');
