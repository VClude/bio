<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id'); 
            $table->string('posisi',50); 
            $table->string('nama',50); 
            $table->string('no_ktp',50); 
            $table->string('ttl',50); 
            $table->boolean('kelamin');
            $table->string('agama',50); 
            $table->string('golongan_darah',50); 
            $table->string('status',50); 
            $table->string('alamat_ktp',161); 
            $table->string('alamat_tinggal',161); 
            $table->string('email',50); 
            $table->string('notelp',161); 
            $table->string('notelpalternative',161); 
            $table->integer('id_pendidikan_terakhir'); 
            $table->integer('id_riwayat_pelatihan'); 
            $table->integer('id_riwayat_pekerjaan'); 
            $table->string('skill',161); 
            $table->boolean('bersedia');
            $table->string('harapan_upah',50); 




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_entries');
    }
}
