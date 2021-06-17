<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlasanTempatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulasan_tempats', function (Blueprint $table) {
            $table->increments('idTempatUlasan');
            $table->unsignedInteger('idTempat');
            $table->foreign('idTempat')->references('idTempat')->on('tempats');
            $table->string('NamaPengguna',100);
            $table->string('UlasanTempat',500);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ulasan_tempats');
    }
}
