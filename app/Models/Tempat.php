<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $fillabel = [
        'idTempat',
        'idAdmin',
        'NamaTempat',
        'DeskripsiTempat',
        'Kota',
        'Kecamatan',
        'LokasiTempat',
        'LinkLokasi',
        'JenisKategori',
        'FotoTempat',
      
    ];
    
    protected $table = 'tempats';
}
