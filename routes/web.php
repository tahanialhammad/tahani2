<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

// Site
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
});

// Auth admin
Route::middleware('is_admin')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});

 // Auth users
//  Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [UserController::class, 'users'])->name('dashboard');
// });



require __DIR__.'/auth.php';
