<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;

// Site
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/helpcenter', 'helpcenter')->name('site.helpcenter.index');
});

// Auth only admin
Route::middleware(['auth', 'is_admin'])->group(function () {   
    // accounts
    Route::get('/accounts', [AdminController::class, 'accounts'])->name('admin.accounts.index');

    // Service
    Route::get('/service', [ServiceController::class, 'index'])->name('admin.service.index');
    Route::post('service/add', [ServiceController::class, 'addOrEditService'])->name('admin.service.addOrEditService');
    Route::delete('service/{service}', [ServiceController::class, 'deleteService'])->name('admin.service.deleteService');

    // Invoices
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('admin.invoice.index');
    Route::post('invoices/add', [InvoiceController::class, 'addOrEditInvoice'])->name('admin.invoice.addOrEditInvoice');

    // Orders
    Route::get('/orders', [OrderController::class, 'index'])->name('admin.order.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('admin.order.show');
    Route::post('orderes/add', [OrderController::class, 'addOrEditOrder'])->name('admin.order.addOrEditOrder');

    // FAQ
    Route::get('/faq', [FaqController::class, 'index'])->name('admin.faq.index');
    Route::post('faq/section/edit', [FaqController::class, 'addOrEditSection'])->name('admin.faq.addOrEditSection');
    Route::post('faq/edit', [FaqController::class, 'addOrEditFaq'])->name('admin.faq.addOrEditFaq');
});

// Auth users and admin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Orders
    Route::get('/myorders', [OrderController::class, 'myorders'])->name('user.order.myorders');

     // Service
     Route::get('/services-store', [ServiceController::class, 'servicesStore'])->name('user.services.index');
});








require __DIR__.'/auth.php';
//lateste update before delete from laptop and npm run production uuuuuuuuuuuuuu