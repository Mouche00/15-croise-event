<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ClientController::class, 'index'])->name('home');
Route::get('/category/{category}', [ClientController::class, 'category'])->name('category.events');
Route::get('/events', [ClientController::class, 'index'])->name('events');
Route::get('/contact', [ClientController::class, 'index'])->name('contact');

Route::get('/event/{event}', [EventController::class, 'show'])->name('event.show');

Route::middleware('guest')->group(function() {

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register/{id}', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login.store');

    Route::get('/forgot-password', [PasswordController::class, 'index'])->name('password.index');
    Route::post('/forgot-password', [PasswordController::class, 'store'])->name('password.store');

    Route::get('/reset-password/{token}', [PasswordController::class, 'edit'])->name('password.edit');
    Route::post('/reset-password', [PasswordController::class, 'update'])->name('password.update');

});

Route::middleware('auth')->group(function() {

    //    TODO: Method change to POST
    Route::get('/logout', [SessionController::class, 'destroy'])->name('logout');
});

Route::middleware('can:admin')->group(function() {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/overview', [AdminController::class, 'index'])->name('admin.overview');

    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{category}/delete', [CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/admin/events', [AdminController::class, 'events'])->name('admin.events');
    Route::put('/event/{event}/approve', [EventController::class, 'approve'])->name('event.approve');
    Route::delete('/event/{event}/reject', [EventController::class, 'reject'])->middleware('can:admin')->name('event.reject');

    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');

    Route::delete('/user/{user}/ban', [UserController::class, 'ban'])->name('user.ban');
    Route::put('/user/{user}/unban', [UserController::class, 'unban'])->name('user.unban');
});

Route::middleware('can:organizer')->group(function() {

    Route::get('/organizer', [OrganizerController::class, 'index'])->name('organizer');
    Route::get('/organizer/overview', [OrganizerController::class, 'index'])->name('organizer.overview');

    Route::get('/organizer/events', [OrganizerController::class, 'events'])->name('organizer.events');
    Route::post('/event/store', [EventController::class, 'store'])->name('event.store');

    Route::get('/event/{event}/edit', [OrganizerController::class, 'edit'])->name('event.edit');
    Route::put('/event/{event}/update', [EventController::class, 'update'])->name('event.update');

    Route::put('/event/{event}/change-status', [EventController::class, 'changeStatus'])->name('event.change-status');

    Route::delete('/event/{event}/delete', [EventController::class, 'destroy'])->name('event.delete');

    Route::get('/event/{event}/reservations', [OrganizerController::class, 'reservations'])->name('event.reservations');

    Route::put('/reservation/{reservation}/approve', [ReservationController::class, 'approve'])->name('reservation.approve');
    Route::delete('/reservation/{reservation}/reject', [ReservationController::class, 'reject'])->name('reservation.reject');
//    Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
//    Route::delete('/category/{category}/delete', [CategoryController::class, 'destroy'])->name('category.delete');
//
//    Route::get('/admin/events', [AdminController::class, 'events'])->name('admin.events');
//    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
});

Route::middleware('can:client')->group(function() {

    Route::post('/reservation/{event}/store', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/ticket/{reservation}', [ReservationController::class, 'ticket'])->name('reservation.ticket');
    Route::get('/client', [ClientController::class, 'reservations'])->name('client.reservations');
});


