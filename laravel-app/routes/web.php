<?php
use App\Http\Controllers\PostController;

// Route dashboard (protégée, après login)
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Routes posts (toutes protégées par auth)
Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class);
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Route::post('/cache/flush', ...)->name('cache.flush');
});
