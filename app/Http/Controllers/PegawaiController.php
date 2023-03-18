<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function pegawaiDashboard() {

        return view ('pegawai/dashboard');

    }

    public function pegawaiRiwayat() {

        return view ('pegawai/riwayat');

    }

    public function pegawaiAjukan() {

        return view('pegawai/pengajuan');

    }

    public function pegawaiProfil() {

        return view('pegawai/profil');

    }
}
