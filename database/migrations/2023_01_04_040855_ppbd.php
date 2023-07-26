<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->id();
        $table->string('nisn')->unique();
        $table->string('jk');
        $table->string('nama');
        $table->string('asal_sekolah');
        $table->string('email')->unique();
        $table->string('nomor_handphone');
        $table->string('no_ayah');
        $table->string('no_ibu');
        $table->string('referensi');
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
