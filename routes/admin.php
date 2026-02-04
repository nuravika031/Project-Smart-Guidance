<?php
use Illuminate\Support\Facades\Route;

Route::prefix('admin-panel')
    ->middleware(['auth', 'verified'])
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    });
