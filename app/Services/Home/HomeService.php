<?php

namespace App\Services\Home;

use App\Services\Service;
use App\Models\{RecConfession};

class HomeService extends Service
{
  // ---------------------------------
  // CORES
  public function index()
{
    // Data processing
    // Untuk sementara, kosongkan atau beri nilai default tanpa query ke database
    $confessionsCount = 0; // Atau nilai default lainnya

    return $this->allIndex($confessionsCount);
}



  // ---------------------------------
  // UTILITIES
  public function allIndex($confessionsCount)
  {
    $viewVariables = [
      "title" => "Selamat Datang",
      "confessionsCount" => $confessionsCount,
    ];
    return view("pages.landing-page.home.index", $viewVariables);
  }
}