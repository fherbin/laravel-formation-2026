<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('tasks', TaskController::class);
    Route::get('/user', fn (Request $r) => $r->user());
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});
