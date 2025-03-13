<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;

// Allow access to login page without auth
Route::get('/', function () {
    return view('login');
});

Route::get('/hr', function () {
    $currentTime = now(); // Get the current time
    return view('home', compact('currentTime')); // Pass $currentTime to the view
})->middleware(['guest'])->name('home'); // Allow for guest access in dev

Route::get('/hr/employees', [DashboardController::class, 'employees'])->middleware(['guest'])->name('hr.employees');

Route::get('/hr/payroll', [DashboardController::class, 'payroll'])->middleware(['guest'])->name('hr.payroll');

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
