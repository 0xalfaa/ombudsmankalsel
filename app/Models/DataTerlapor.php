<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPelapor extends Model
{
    protected $table = 'kategori_pelapor';

    public function dataPelapor()
    {
        return $this->belongsTo(DataPelapor::class, 'pelapor_id');
    }
}

