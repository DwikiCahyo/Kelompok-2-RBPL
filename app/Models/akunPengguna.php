<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akunPengguna extends Model
{
    protected $fillabel = [
        'idPengguna',
        'UsernamaPengguna',
        'PasswordPengguna',
        'EmailPengguna',
        'NamaLengkapPengguna',
      
    ];
    
    protected $table = 'akun_penggunas';
}
