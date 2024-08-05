<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Booking\BookingController;

use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', [FrontendHomeController::class, 'index'])->name('home')->middleware('auth');

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
Route::get('my-bookings', [BookingController::class, 'myBookings'])->name('bookings.my_bookings');

// // BOOKING GET BOOKING TO EDIT
// Route::get('bookings/{booking}/edit', BookingController::class)->name('booking.edit');
// // UPDATE
// Route::put('boookings/{booking}', [BookingController::class, 'myBookings'])->name('booking.my_bookings');

// PROFILE ROUTES

Route::middleware(['auth'])->group(function () {
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update'); // Fix here
});
