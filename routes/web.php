<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\{
    HomeController,
    AboutController,
    UserController,
    PengaduanController,
    ContactController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route untuk halaman landing page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, "index"]);

