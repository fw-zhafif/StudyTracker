<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\StudySessionController;


Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/study-sessions', [StudySessionController::class, 'index']);

Route::get('/study-sessions/create', [StudySessionController::class, 'create']);

Route::post('/study-sessions', [StudySessionController::class, 'store']);

Route::get('/study-sessions/{studySession}/edit', [StudySessionController::class, 'edit']);

Route::put('/study-sessions/{studySession}', [StudySessionController::class, 'update']);

Route::delete('/study-sessions/{studySession}', [StudySessionController::class, 'destroy']);