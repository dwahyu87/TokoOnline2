<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return "halo";
});

Route::get('/latihan', [LatihanController::class, 'home']);
Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/', [HomepageController::class, 'index']);
