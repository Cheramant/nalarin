<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Guest Routes
Route::get('/', fn () => Inertia::render('Home'));
Route::get('/about', fn () => Inertia::render('About'));

// Authenticated User Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profil', fn () => Inertia::render('Profil'));
    Route::get('/kuis', fn () => Inertia::render('Quiz'));

    Route::get('/latihan', fn () => Inertia::render('latihan/LatihanSatu'));
    Route::get('/latihan/latihanDua', fn() => Inertia::render('latihan/LatihanDua'))->name('latihan.dua');
    Route::get('/latihan/latihanTiga', fn() => Inertia::render('latihan/LatihanTiga'))->name('latihan.tiga');



    Route::get('/materi', fn () => Inertia::render('Materi'));

    Route::prefix('/materi')->group(function () {

        // Abstraksi
        Route::get('/abstraksi/intro', fn () => Inertia::render('materi/AbstraksiIntro'));
        Route::get('/abstraksi/somatic', fn () => Inertia::render('materi/AbstraksiSomatic'));
        Route::get('/abstraksi/auditory', fn () => Inertia::render('materi/AbstraksiAuditory'));
        Route::get('/abstraksi/visual', fn () => Inertia::render('materi/AbstraksiVisual'));
        Route::get('/abstraksi/intellectual', fn () => Inertia::render('materi/AbstraksiIntellectual'));
        Route::get('/abstraksi/kesimpulan', fn () => Inertia::render('materi/AbstraksiKesimpulan'));

        // Dekomposisi
        Route::get('/dekomposisi/intro', fn () => Inertia::render('materi/DekomposisiIntro'));
        Route::get('/dekomposisi/somatic', fn () => Inertia::render('materi/DekomposisiSomatic'));
        Route::get('/dekomposisi/auditory', fn () => Inertia::render('materi/DekomposisiAuditory'));
        Route::get('/dekomposisi/visual', fn () => Inertia::render('materi/DekomposisiVisual'));
        Route::get('/dekomposisi/intellectual', fn () => Inertia::render('materi/DekomposisiIntellectual'));
        Route::get('/dekomposisi/kesimpulan', fn () => Inertia::render('materi/DekomposisiKesimpulan'));

        // Pola
        Route::get('/pola/intro', fn () => Inertia::render('materi/PolaIntro'));
        Route::get('/pola/somatic', fn () => Inertia::render('materi/PolaSomatic'));
        Route::get('/pola/auditory', fn () => Inertia::render('materi/PolaAuditory'));
        Route::get('/pola/visual', fn () => Inertia::render('materi/PolaVisual'));
        Route::get('/pola/intellectual', fn () => Inertia::render('materi/PolaIntellectual'));
        Route::get('/pola/kesimpulan', fn () => Inertia::render('materi/PolaKesimpulan'));

        // Algoritma
        Route::get('/algoritma/intro', fn () => Inertia::render('materi/AlgoritmaIntro'));
        Route::get('/algoritma/somatic', fn () => Inertia::render('materi/AlgoritmaSomatic'));
        Route::get('/algoritma/auditory', fn () => Inertia::render('materi/AlgoritmaAuditory'));
        Route::get('/algoritma/visual', fn () => Inertia::render('materi/AlgoritmaVisual'));
        Route::get('/algoritma/intellectual', fn () => Inertia::render('materi/AlgoritmaIntellectual'));
        Route::get('/algoritma/kesimpulan', fn () => Inertia::render('materi/AlgoritmaKesimpulan'));

    });
});
