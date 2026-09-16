<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\StudySessionController;


Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/study-sessions', [StudySessionController::class, 'index'])->name('study-sessions.index');

Route::get('/study-sessions/create', [StudySessionController::class, 'create'])->name('study-sessions.create');

Route::post('/study-sessions', [StudySessionController::class, 'store'])->name('study-sessions.store');

Route::get('/study-sessions/{studySession}/edit', [StudySessionController::class, 'edit'])->name('study-sessions.edit');

Route::put('/study-sessions/{studySession}', [StudySessionController::class, 'update'])->name('study-sessions.update');

Route::delete('/study-sessions/{studySession}', [StudySessionController::class, 'destroy'])->name('study-sessions.destroy');