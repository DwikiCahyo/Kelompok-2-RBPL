<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akunAdmin extends Model
{
    protected $fillabel = [
        'idAdmin',
        'UsernamaAdmin',
        'PasswordAdmin',
        'EmailAdmin',
        'NamaLengkapAdmin',
      
    ];
    
    protected $table = 'akun_admins';

}
