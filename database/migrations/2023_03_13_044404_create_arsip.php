<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsip extends Migration
{
    public function up()
    {
        Schema::create('arsip', function (Blueprint $table) {
            $table->id();
            $table->string('kk')->nullable();
            $table->string('ktp')->nullable();
            $table->string('suratrekomendasi')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('aktakelahiran')->nullable();
            $table->timestamps();
    
        $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arsip');
    }
    
}
