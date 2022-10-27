<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




// Route::get('/', [HomepageController::class, 'index']);

Route::prefix('mahasiswa')->group(function () {

    Route::get('pendaftaran', function () {
        $title = 'Pendaftaran';
        $text = 'Halaman Pendaftaran';

        return view('mahasiswa.index', compact('title', 'text'));
    });

    Route::get('ujian', function () {
        $title = 'ujian';
        $text = 'Halaman Ujian';

        return view('mahasiswa.index', compact('title', 'text'));
    });

    Route::get('nilai', function () {
        $title = 'Nilai';
        $text = 'Halaman Nilai';

        return view('mahasiswa.index', compact('title', 'text'));
    });

});
// Route::get('/latihan', [LatihanController::class, 'home']);
// Route::get('/beranda', [LatihanController::class, 'beranda']);
// Route::get('/index', [HomepageController::class, 'index']);
// Route::get('/about', [HomepageController::class, 'about']);
// Route::get('/kontak', [HomepageController::class, 'kontak']);
// Route::get('/kategori', [HomepageController::class, 'kategori']);
// Route::get('/admin', [DashboardController::class, 'index']);


