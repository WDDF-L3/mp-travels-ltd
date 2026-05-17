<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendJobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/jobs', [FrontendJobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [FrontendJobController::class, 'show'])->name('jobs.show');
Route::post('/jobs/{job}/apply', [JobApplicationController::class, 'store'])->name('jobs.apply');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/jobs', JobController::class)->only(['index', 'create', 'store']);
});