<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $fillabel = [
        'idResep',
        'idPengguna',
        'NamaResep',
        'DeskripsiResep',
        'LangkahLangkah',
        'FotoResep',
        'Rasa',
        'WaktuMakan',
    ];
    
    protected $table = 'reseps';
}
