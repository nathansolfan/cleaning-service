<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\PostcodeController;
use App\Http\Controllers\ReviewController;
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
// FOR ADMIN later
Route::resource('users', UserController::class);

// DELETE
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// BOOKING
Route::resource('bookings', BookingController::class);
Route::get('my_bookings', [BookingController::class, 'myBookings'])->name('bookings.my_bookings');

Route::get('bookings/{booking}', [BookingController::class, 'show'])->name('bookings.show');
// // BOOKING GET BOOKING TO EDIT
// Route::get('bookings/{booking}/edit', BookingController::class)->name('booking.edit');
// // UPDATE
// Route::put('boookings/{booking}', [BookingController::class, 'myBookings'])->name('booking.my_bookings');


// PROFILE ROUTES
Route::middleware(['auth'])->group(function () {
    // display edit page
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    // send update request
    Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // booking calendar
    Route::get('bookings/calendar', [BookingController::class, 'calendar'])->name('bookings.calendar');
});
// Route::get('bookings/history', [BookingController::class, 'history'])->name('bookings.history');


// PAGES

// Can also be writen like this
// Route::view('/services', 'services.index')->name('services');
Route::get('services', function () {
    return view('pages.services');
})->name('services');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact.submit');


Route::middleware('auth')->group( function () {
    Route::get('bookings/{booking}/review', [ReviewController::class, 'create' ])->name('reviews.create');
    Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');
});
