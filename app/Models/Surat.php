<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    Protected $table = 'surat';
    protected $primaryKey = 'id_cuti';
    Protected $fillable = ['nama_pegawai', 'nip','id_cuti', 'jenis_surat', 'durasi', 'tgl_mulai', 'tgl_selesai', 'keterangan', 'st_approve'];
}
