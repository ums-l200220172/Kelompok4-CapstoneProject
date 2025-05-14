<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbandingan extends Model
{
    use HasFactory;

    protected $table = 'data_pupuk'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'nama_pupuk',
        'nitrogen',
        'fosfor',
        'kalium',
        'manfaat',
    ];
}