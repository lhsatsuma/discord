<?php

use App\Http\Controllers\AdminConfigController;
use App\Http\Controllers\DashboardAuthController;
use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Route;

Route::get('/auth/discord', [DashboardAuthController::class, 'redirect']);
Route::post('/auth/exchange', [DashboardAuthController::class, 'exchangeCode']);
Route::post('/auth/callback-failure', [DashboardAuthController::class, 'callbackFailure'])->middleware('throttle:10,1');
Route::middleware('dashboard.jwt')->group(function (): void {
    Route::get('/me', [DashboardAuthController::class, 'me']);
    Route::post('/logout', [DashboardAuthController::class, 'logout']);
    Route::get('/servers', [AdminConfigController::class, 'servers']);
    Route::get('/servers/{serverId}/config', [AdminConfigController::class, 'show']);
    Route::put('/servers/{serverId}/config', [AdminConfigController::class, 'update']);
    Route::delete('/servers/{serverId}/trivia/answers', [AdminConfigController::class, 'resetTriviaAnswers']);
    Route::get('/superadmin/status', [SuperadminController::class, 'status']);
    Route::get('/superadmin/logs/{process}', [SuperadminController::class, 'logs'])->where('process', 'app|scheduler');
});
