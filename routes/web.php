<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendJobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/jobs', [FrontendJobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [FrontendJobController::class, 'show'])->name('jobs.show');
Route::post('/jobs/{job}/apply', [JobApplicationController::class, 'store'])->name('jobs.apply');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/applications', [DashboardController::class, 'applications'])->name('applications');
        Route::get('/contacts', [DashboardController::class, 'contacts'])->name('contacts');
        Route::resource('/jobs', JobController::class);
    });

Route::get('/applications', [DashboardController::class, 'applications'])->name('applications');
Route::get('/contacts', [DashboardController::class, 'contacts'])->name('contacts');


require __DIR__.'/auth.php';