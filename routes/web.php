<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\viewcontroller;
use Illuminate\Support\Facades\Route;
use App\http\Middleware\isadmin;

Route::get('/', [viewcontroller::class,'landinguser'])->middleware('isadmin')->name('landingpage');

Route::get('/dashboard', [viewcontroller::class, 'landingadmin'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
