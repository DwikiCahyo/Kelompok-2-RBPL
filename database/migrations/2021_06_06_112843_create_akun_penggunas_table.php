<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunPenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_penggunas', function (Blueprint $table) {
            $table->increments('IdPengguna',10);
            $table->string('UsernamePengguna',100);
            $table->string('PasswordPengguna',10);
            $table->char('EmailPengguna',100);
            $table->char('NamaLengkapPengguna',100);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun_penggunas');
    }
}
