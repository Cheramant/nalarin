<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Guest Routes
Route::get('/', fn () => Inertia::render('Home'));
Route::get('/about', fn () => Inertia::render('About'));

// Authenticated User Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profil', fn () => Inertia::render('Profil'));
    Route::get('/hasil-kuis', fn () => Inertia::render('HasilKuis'));
    Route::get('/kuis', fn () => Inertia::render('Quiz'));

    Route::get('/latihan', fn () => Inertia::render('LatihanIndex'));
    Route::get('/latihan/atm', fn () => Inertia::render('LatihanATM'));
    Route::get('/latihan/belanja', fn () => Inertia::render('LatihanBelanja'));
    Route::get('/latihan/jadwal', fn () => Inertia::render('LatihanJadwal'));

    Route::get('/materi', fn () => Inertia::render('Materi'));

    Route::prefix('/materi')->group(function () {
        Route::get('/abstraksi/teori', fn () => Inertia::render('materi/AbstraksiTeori'));
        Route::get('/abstraksi/savi', fn () => Inertia::render('materi/AbstraksiSAVI'));
        Route::get('/dekomposisi/teori', fn () => Inertia::render('materi/DekomposisiTeori'));
        Route::get('/dekomposisi/savi', fn () => Inertia::render('materi/DekomposisiSAVI'));
        Route::get('/pola/teori', fn () => Inertia::render('materi/PolaTeori'));
        Route::get('/pola/savi', fn () => Inertia::render('materi/PolaSAVI'));
        Route::get('/algoritma/teori', fn () => Inertia::render('materi/AlgoritmaTeori'));
        Route::get('/algoritma/savi', fn () => Inertia::render('materi/AlgoritmaSAVI'));
    });
});
