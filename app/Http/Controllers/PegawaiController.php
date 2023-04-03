<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class PegawaiController extends Controller
{
    public function pegawaiDashboard() {

        return view ('pegawai/dashboard');

    }

    public function pegawaiRiwayat() {
        $srt = surat::all();
        return view ('pegawai/riwayat', ['srt' => $srt]);
    }

    public function pegawaiAjukan() {

        return view('pegawai/pengajuan');

    }

    public function pegawaiProfil() {

        return view('pegawai/profil');

    }
}
