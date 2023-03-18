<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->id('id_cuti');
            $table->foreign('nip')->references('nip')->on('pegawai');
            $table->string('jenis_surat');
            $table->string('nama_pegawai');
            $table->string('durasi');
            $tablee->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('keterangan');
            $table->date('tgl_pengajuan');
            $table->string('ttd');
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
        Schema::dropIfExists('surat');
    }
}
