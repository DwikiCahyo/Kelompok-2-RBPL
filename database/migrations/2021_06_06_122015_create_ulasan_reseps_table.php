<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlasanResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulasan_reseps', function (Blueprint $table) {
            $table->increments('idResepUlasan');
            $table->unsignedInteger('idResep');
            $table->foreign('idResep')->references('idResep')->on('reseps');
            $table->string('NamaPengguna',100);
            $table->string('UlasanResep',500);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ulasan_reseps');
    }
}
