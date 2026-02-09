<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin-panel')
    ->middleware(['auth', 'verified'])
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('majors', App\Http\Controllers\Admin\MajorController::class);
        Route::resource('competitions', App\Http\Controllers\Admin\CompetitionController::class);
        Route::resource('industries', App\Http\Controllers\Admin\IndustryController::class);
    });
