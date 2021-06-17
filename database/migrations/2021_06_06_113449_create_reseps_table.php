<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->increments('idResep',10);
            $table->unsignedInteger('idPengguna');
            $table->foreign('idPengguna')->references('idPengguna')->on('akun_penggunas');
            $table->char('NamaResep',200);
            $table->string('DeskripsiResep',100);
            $table->string('LangkahLangkah',100);
            $table->binary('FotoResep');
            $table->char('Rasa',10);
            $table->char('WaktuMakan',10);


        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseps');
    }
}
