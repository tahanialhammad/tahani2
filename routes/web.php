<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\DashboardController;

// Site
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
});

// Auth only admin
Route::middleware('is_admin')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Auth users and admin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});








require __DIR__.'/auth.php';
