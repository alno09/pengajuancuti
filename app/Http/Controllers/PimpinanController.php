<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use Illuminate\Support\Facades\Auth;

class PimpinanController extends Controller
{
    public function pimpinanDashboard() {
        return view ('pimpinan/dashboard');
    }

    public function pimpinanRiwayat() {
        $srt = surat::all();
        return view ('pimpinan/riwayat', ['srt' => $srt]);
    }

    public function adminApprove ($id_cuti, Request $Request) {
        $srt = surat::find( $id_cuti);
        $srt->status = $Request->status;
        $srt->save();
        if ($psrt->status == "Ditolak") {
            $srt->delete();
        } elseif ($srt->status == "Disetujui") {
            $srt->save();
        }
        return redirect ('pimpinan/riwayat');
    }
}
