<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasanTempat extends Model
{
    protected $fillabel = [
        'idTempatUlasan',
        'idTempat',
        'NamaPengguna',
        'UlasanTempat',    
    ];
    
    protected $table = 'ulasan_tempats';
}
