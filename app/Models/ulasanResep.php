<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasanResep extends Model
{
    protected $fillabel = [
        'idResepUlasan',
        'idResep',
        'NamaPengguna',
        'UlasanResep',    
    ];
    
    protected $table = 'ulasan_reseps';
}
