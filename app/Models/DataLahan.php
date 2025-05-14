<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLahan extends Model
{
    use HasFactory;

    protected $table = 'data_lahans'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'jenis_tanah',
        'jenis_tanaman',
        'kondisi_cuaca',
        'metode_pengairan',
    ];
}
