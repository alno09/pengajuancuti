<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    public function pegawaiDashboard() {

        return view ('pegawai/dashboard');

    }

    public function pegawaiRiwayat() {
        $srt = surat::where('nip', Auth::user()->nip)->get();
        return view ('pegawai/riwayat', ['srt' => $srt]);
    }

    public function pegawaiSimpan(Request $Request) {
        surat::create([
            'nip' => Auth::user()->nip,
            'nama_pegawai' => $Request->nama_pegawai,
            'tgl_mulai' => $Request->tgl_mulai,
            'tgl_selesai' => $Request->tgl_selesai,
            'jenis_surat' => $Request->jenis_surat,
            'durasi' => $Request->durasi,
            'deskripsi_pinjam' => $Request->deskripsi_pinjam,
            'keterangan' => $Request->keterangan
        ]);
        return redirect ('pegawai/riwayat');
    }

    public function pegawaiBatalkan($id_cuti) {
        $pinjam = surat::find($id_cuti)->delete();
        return redirect ('pegawai/riwayat');
    }


    public function pegawaiAjukan() {

        return view('pegawai/pengajuan');

    }

    public function pegawaiProfil() {

        return view('pegawai/profil');

    }
}
