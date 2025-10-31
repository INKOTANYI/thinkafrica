<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebFormController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('about');
});

// Public form endpoints
Route::post('/appointments', [WebFormController::class, 'storeAppointment'])->name('appointments.store');
Route::post('/subscriptions', [WebFormController::class, 'storeSubscription'])->name('subscriptions.store');
Route::post('/contact', [WebFormController::class, 'storeContact'])->name('contact.store');

// Admin auth (simple session-based)
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.attempt');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin area
Route::middleware('admin')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/appointments/{appointment}/approve', [DashboardController::class, 'approveAppointment'])->name('admin.appointments.approve');
    Route::post('/admin/appointments/{appointment}/reject', [DashboardController::class, 'rejectAppointment'])->name('admin.appointments.reject');
    Route::post('/admin/messages/{message}/approve', [DashboardController::class, 'approveMessage'])->name('admin.messages.approve');
    Route::post('/admin/messages/{message}/reject', [DashboardController::class, 'rejectMessage'])->name('admin.messages.reject');
    Route::post('/admin/appointments/{appointment}/note', [DashboardController::class, 'saveAppointmentNote'])->name('admin.appointments.note');
    Route::post('/admin/messages/{message}/note', [DashboardController::class, 'saveMessageNote'])->name('admin.messages.note');
});
