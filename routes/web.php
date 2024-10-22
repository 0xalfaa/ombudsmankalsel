<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

// Main landing page

// Authentication routes
Auth::routes();

// Laporan page route
Route::get('/', function () {
    return view('laporan');
});

Route::get('/laporan/form', [LaporanController::class, 'create'])->name('laporan.form');