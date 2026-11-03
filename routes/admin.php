<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InvestorReportController;
use App\Http\Controllers\Admin\InvestorSnapshotController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('login', [AuthController::class, 'login'])->name('admin.login.store');

Route::middleware('admin')->group(function (): void {
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('investor-reports', InvestorReportController::class)
        ->except(['show'])
        ->names('admin.investor-reports');

    Route::get('investor-snapshot', [InvestorSnapshotController::class, 'edit'])
        ->name('admin.investor-snapshot.edit');
    Route::put('investor-snapshot', [InvestorSnapshotController::class, 'update'])
        ->name('admin.investor-snapshot.update');
});
