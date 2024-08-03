<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// LOGIN
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// REGISTER
Route::get('register',[RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');

// USERS - resource gets index/create/store/show/edit/update/destroy
Route::resource('users', UserController::class);

// DELETE
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// BOOKING
Route::resource('bookings', BookingController::class);

