<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsip extends Migration
{
    public function up()
    {
        Schema::create('arsip', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_user')->nullable();
            $table->string('kk')->nullable();
            $table->string('ktp')->nullable();
            $table->string('suratrekomendasi')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('aktakelahiran')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arsip');
    }
    
}
