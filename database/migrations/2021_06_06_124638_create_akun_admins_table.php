<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_admins', function (Blueprint $table) {
            $table->increments('IdAdmin',10);
            $table->string('UsernameAdmin',100);
            $table->string('PasswordAdmin',10);
            $table->char('EmailAdmin',100);
            $table->char('NamaLengkapAdmin',100);
            
            // $table->id();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun_admins');
    }
}
