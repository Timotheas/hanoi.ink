<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ----------------------------
// Public landing page route
// ----------------------------
// Displays the welcome page for all visitors.
Route::get('/', function () {
    return view('welcome');
});

// ----------------------------
// Dashboard (user home) route
// ----------------------------
// Only accessible by authenticated AND verified users.
// All users land here after login, including admins.
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ----------------------------
// User profile routes
// ----------------------------
// Only accessible by authenticated users (no guests).
Route::middleware('auth')->group(function () {
    // Show the edit profile page
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Update the profile (PATCH request)
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Delete the profile/account
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ----------------------------
// Auth routes (register, login, logout, etc.)
// ----------------------------
// These are provided by Laravel Breeze or Jetstream.
// Contains: /login, /register, /forgot-password, etc.
require __DIR__.'/auth.php';
