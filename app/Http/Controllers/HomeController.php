<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Misalkan Anda ingin mengirim data jumlah pengakuan
        $confessionsCount = 200; // Gantilah dengan data dinamis jika diperlukan

        return view('pages.landing-page.home.index', compact('confessionsCount'));
    }
}
