<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\QuizScore;

Route::middleware('auth:sanctum')->post('/quiz-scores', function (Request $request) {
    $request->validate([
        'score' => 'required|integer'
    ]);

    return QuizScore::create([
        'user_id' => $request->user()->id,
        'score' => $request->score
    ]);
});

Route::middleware('auth:sanctum')->get('/quiz-scores', function () {
    return \App\Models\QuizScore::with('user')->latest()->get();
});

Route::middleware('auth:sanctum')->get('/quiz-scores/last', function (Request $request) {
    return QuizScore::where('user_id', $request->user()->id)->latest()->first();
});
