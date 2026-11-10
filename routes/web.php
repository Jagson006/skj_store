<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'guest.welcome');
Route::middleware(['auth','verified'])->group(function () {
    Route::view('dashboard', 'users.dashboard')
        ->name('dashboard');

    Route::view('profile', 'users.profile')
        ->name('profile');
});

require __DIR__.'/auth.php';
