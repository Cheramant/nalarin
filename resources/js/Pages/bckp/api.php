<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Contoh endpoint API yang bisa kamu kembangkan sesuai kebutuhan

// Endpoint untuk menyimpan skor kuis
Route::middleware('auth:sanctum')->post('/quiz-scores', [\App\Http\Controllers\QuizScoreController::class, 'store']);

// Endpoint untuk mendapatkan semua skor (untuk admin/guru, jika dibutuhkan)
Route::middleware('auth:sanctum')->get('/quiz-scores', [\App\Http\Controllers\QuizScoreController::class, 'index']);
