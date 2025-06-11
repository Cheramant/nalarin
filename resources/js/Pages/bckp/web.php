<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Guest Routes
Route::get('/', fn () => Inertia::render('Home'))->name('home');
Route::get('/about', fn () => Inertia::render('About'))->name('about');

// Authenticated Routes (middleware)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn () => Inertia::render('Dashboard'))->name('dashboard');
    Route::get('/profil', fn () => Inertia::render('Profil'))->name('profil');
    Route::get('/hasil-kuis', fn () => Inertia::render('HasilKuis'))->name('hasil-kuis');
    Route::get('/latihan', fn () => Inertia::render('Latihan'))->name('latihan');
    Route::get('/kuis', fn () => Inertia::render('Kuis'))->name('kuis');

    // Materi Route
    Route::prefix('materi')->name('materi.')->group(function () {
        Route::get('/', fn () => Inertia::render('Materi'))->name('index');

        // Dekomposisi
        Route::get('/dekomposisi/teori', fn () => Inertia::render('Materi/DekomposisiTeori'))->name('dekomposisi.teori');
        Route::get('/dekomposisi/savi', fn () => Inertia::render('Materi/DekomposisiSAVI'))->name('dekomposisi.savi');

        // Pengenalan Pola
        Route::get('/pola/teori', fn () => Inertia::render('Materi/PatternTeori'))->name('pola.teori');
        Route::get('/pola/savi', fn () => Inertia::render('Materi/PatternSAVI'))->name('pola.savi');

        // Abstraksi
        Route::get('/abstraksi/intro', fn () => Inertia::render('Materi/AbstraksiIntro'))->name('abstraksi.intro');
        Route::get('/abstraksi/somatic', fn () => Inertia::render('Materi/AbstraksiSomatic'))->name('abstraksi.somatic');
        Route::get('/abstraksi/auditory', fn () => Inertia::render('Materi/AbstraksiAuditory'))->name('abstraksi.auditory');
        Route::get('/abstraksi/visual', fn () => Inertia::render('Materi/AbstraksiVisual'))->name('abstraksi.visual');
        Route::get('/abstraksi/intellectual', fn () => Inertia::render('Materi/AbstraksiIntellectual'))->name('abstraksi.intellectual');
        Route::get('/abstraksi/kesimpulan', fn () => Inertia::render('Materi/AbstraksiKesimpulan'))->name('abstraksi.kesimpulan');

        // Algoritma
        Route::get('/algoritma/intro', fn () => Inertia::render('Materi/AlgoritmaIntro'))->name('algoritma.intro');
        Route::get('/algoritma/somatic', fn () => Inertia::render('Materi/AlgoritmaSomatic'))->name('algoritma.somatic');
        Route::get('/algoritma/auditory', fn () => Inertia::render('Materi/AlgoritmaAuditory'))->name('algoritma.auditory');
        Route::get('/algoritma/visual', fn () => Inertia::render('Materi/AlgoritmaVisual'))->name('algoritma.visual');
        Route::get('/algoritma/intellectual', fn () => Inertia::render('Materi/AlgoritmaIntellectual'))->name('algoritma.intellectual');
        Route::get('/algoritma/kesimpulan', fn () => Inertia::render('Materi/AlgoritmaKesimpulan'))->name('algoritma.kesimpulan');
    });
});

require __DIR__.'/auth.php';
