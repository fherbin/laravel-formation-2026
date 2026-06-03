<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\StatsController;

// Route dashboard (protégée, après login)
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Routes posts (toutes protégées par auth)
Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/preferences', [PreferenceController::class, 'index'])->name('preferences.index');
    Route::post('/preferences', [PreferenceController::class, 'store'])->name('preferences.store');
    Route::get('/stats', [StatsController::class, 'index'])->name('stats.index');
    Route::resource('newsletters', NewsletterController::class)
        ->only(['index', 'create', 'store'])
        ->middleware('role:admin');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
     Route::post('/cache/flush', [StatsController::class, 'flush'])->name('cache.flush');
});
