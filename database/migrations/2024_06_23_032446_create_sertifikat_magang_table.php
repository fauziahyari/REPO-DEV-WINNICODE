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
        Schema::create('db_sertifikat_magang', function (Blueprint $table) {
            $table->id();
            $table->string('reg_sertifikat');
            $table->string('nama_lengkap');
            $table->string('departemen');
            $table->string('status');
            $table->string('qrcode_sertifikat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sertifikat_magang');
    }
};
