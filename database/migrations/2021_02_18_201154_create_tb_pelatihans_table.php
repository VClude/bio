<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pelatihans', function (Blueprint $table) {
            $table->integer('id_riwayat_pelatihan'); 
            $table->string('nama_kursus',161); 
            $table->boolean('sertifikat'); 
            $table->string('tahun',4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pelatihans');
    }
}
