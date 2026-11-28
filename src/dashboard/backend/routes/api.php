<?php

use App\Http\Controllers\AdminConfigController;
use App\Http\Controllers\DashboardAuthController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\TriviaContentController;
use Illuminate\Support\Facades\Route;

Route::get('/auth/discord', [DashboardAuthController::class, 'redirect']);
Route::post('/auth/exchange', [DashboardAuthController::class, 'exchangeCode']);
Route::post('/auth/callback-failure', [DashboardAuthController::class, 'callbackFailure'])->middleware('throttle:10,1');
Route::get('/public-config', [DashboardAuthController::class, 'publicConfig']);
Route::middleware('dashboard.jwt')->group(function (): void {
    Route::get('/me', [DashboardAuthController::class, 'me']);
    Route::post('/logout', [DashboardAuthController::class, 'logout']);
    Route::get('/trivia/library', [TriviaContentController::class, 'library']);
    Route::get('/servers', [AdminConfigController::class, 'servers']);
    Route::get('/servers/{serverId}/config', [AdminConfigController::class, 'show']);
    Route::put('/servers/{serverId}/config', [AdminConfigController::class, 'update']);
    Route::delete('/servers/{serverId}/trivia/answers', [AdminConfigController::class, 'resetTriviaAnswers']);
    Route::get('/servers/{serverId}/trivia/content', [TriviaContentController::class, 'categories']);
    Route::post('/servers/{serverId}/trivia/categories', [TriviaContentController::class, 'storeCategory']);
    Route::post('/servers/{serverId}/trivia/questions', [TriviaContentController::class, 'storeQuestion']);
    Route::post('/servers/{serverId}/trivia/questions/import', [TriviaContentController::class, 'importQuestions']);
    Route::get('/superadmin/status', [SuperadminController::class, 'status']);
    Route::get('/superadmin/logs/{process}', [SuperadminController::class, 'logs'])->where('process', 'app|scheduler');
    Route::get('/superadmin/trivia/review', [SuperadminController::class, 'triviaReview']);
    Route::post('/superadmin/trivia/categories/{categoryId}/approve', [SuperadminController::class, 'approveTriviaCategory']);
    Route::delete('/superadmin/trivia/categories/{categoryId}', [SuperadminController::class, 'rejectTriviaCategory']);
    Route::post('/superadmin/trivia/questions/{questionId}/approve', [SuperadminController::class, 'approveTriviaQuestion']);
    Route::delete('/superadmin/trivia/questions/{questionId}', [SuperadminController::class, 'rejectTriviaQuestion']);
});
