<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\DashboardController;

// Site
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/helpcenter', 'helpcenter')->name('site.helpcenter.index');
});

// Auth only admin
Route::middleware('is_admin')->group(function () {   
    // FAQ
    Route::get('/faq', [FaqController::class, 'index'])->name('admin.faq.index');
    Route::post('faq/section/edit', [FaqController::class, 'addOrEditSection'])->name('admin.faq.addOrEditSection');
    Route::post('faq/edit', [FaqController::class, 'addOrEditFaq'])->name('admin.faq.addOrEditFaq');
});

// Auth users and admin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});








require __DIR__.'/auth.php';
//lateste update before delete from laptop and npm run production uuuuuuuuuuuuuu