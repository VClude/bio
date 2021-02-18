<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pendidikans', function (Blueprint $table) {
            $table->integer('id_riwayat_pendidikan'); 
            $table->string('jenjang_pendidikan',161); 
            $table->string('nama_institusi',161); 
            $table->string('jurusan',161); 
            $table->string('tahun_lulus',161); 
            $table->string('ipk',20); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pendidikans');
    }
}
