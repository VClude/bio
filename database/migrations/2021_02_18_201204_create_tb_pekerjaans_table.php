<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pekerjaans', function (Blueprint $table) {
            $table->integer('id_riwayat_pekerjaan'); 
            $table->string('nama_pt',161); 
            $table->string('posisi_terakhir',161); 
            $table->string('pendapatan_terakhir',161); 
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
        Schema::dropIfExists('tb_pekerjaans');
    }
}
