<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PimpinanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//pegawai
Route::get('/pegawai/dashboard', [PegawaiController::class, 'pegawaiDashboard']);
Route::get('/pegawai/riwayat', [PegawaiController::class, 'pegawaiRiwayat']);
Route::get('/pegawai/pengajuan', [PegawaiController::class, 'pegawaiAjukan']);
Route::post('/pegawai/pengajuan/simpan', [PegawaiController::class, 'pegawaiSimpan']);
Route::delete('/pegawai/pengajuan/delete/{id_pinjam}', [PegawaiController::class, 'pegawaiBatalkan'])->name('pengajuan.destroy');
Route::get('/pegawai/profil', [PegawaiController::class, 'pegawaiProfil']);

//pimpinan
Route::get('/pimpinan/dashboard', [PimpinanController::class, 'pimpinanDashboard']);
Route::get('/pimpinan/riwayat', [PimpinanController::class,'pimpinanRiwayat']);