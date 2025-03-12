<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

// Allow access to login page without auth
Route::get('/', function () {
    return view('login');
});

Route::get('/hr', function () {
    $currentTime = now(); // Get the current time
    return view('home', compact('currentTime')); // Pass $currentTime to the view
})->middleware(['guest'])->name('home'); // Allow for guest access in dev

// Login routes (only for guests, unauthenticated users)
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware(['guest'])
    ->name('login');

// Handle the login form submission
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['guest']);

// You can also define a logout route here
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('logout');
