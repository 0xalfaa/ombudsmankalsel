<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTerlapor extends Model
{
    protected $table = 'data_terlapor';

    public function dataPelapor()
    {
        return $this->belongsTo(DataPelapor::class, 'pelapor_id');
    }
}

