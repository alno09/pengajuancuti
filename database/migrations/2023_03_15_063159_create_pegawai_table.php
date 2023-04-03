<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->integer('nip');
                $table->string('nama_pegawai');
                $table->string('jns_kelamin');
                $table->string('jabatan');
                $table->string('tmpt_lahir');
                $table->date('tgl_lahir');
                $table->string('gol_darah');
                $table->string('agama');
                $table->integer('no_telp');
                $table->integer('sisa_cuti');
                $table->string('alamat');
                $table->string('hak_akses');
                $table->string('username');
                $table->string('password');
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
        Schema::dropIfExists('pegawai');

    }
}
