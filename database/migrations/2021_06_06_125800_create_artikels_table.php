<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->increments('idArtikel',10);
            $table->unsignedInteger('idAdmin');
            $table->foreign('idAdmin')->references('idAdmin')->on('akun_admins');
            $table->char('JudulArtikel',100);
            $table->string('Deskripsi Artikel',10000);
            $table->binary('FotoArtikel');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
