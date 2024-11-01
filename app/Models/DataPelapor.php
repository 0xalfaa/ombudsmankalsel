<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPelapor extends Model
{
    protected $table = 'data_pelapor';

    public function kategoriPelapor()
    {
        return $this->hasOne(KategoriPelapor::class, 'pelapor_id');
    }

    public function dataTerlapor()
    {
        return $this->hasMany(DataTerlapor::class, 'pelapor_id');
    }
}

