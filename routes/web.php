<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('guest')->group(function() {

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register/{id}', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login.store');

    Route::get('/forgot-password', [PasswordController::class, 'index'])->name('auth.password.request');
    Route::get('/reset-password/{token}', [PasswordController::class, 'store'])->name('auth.password.reset');
});

Route::middleware('auth')->group(function() {

    //    TODO: Method change to POST
    Route::get('/logout', [SessionController::class, 'destroy'])->name('logout');
});

Route::middleware('can:admin')->group(function() {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

