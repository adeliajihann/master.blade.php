<?php

use Illuminate\Support\Facades\Route;

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
    return view('pegawai.p_dashboard',[
        "title"=>"SPINER | Dashboard Pegawai"
    ]);
});

Route::get('/pegawai/kinerja-pegawai', function () {
    return view('pegawai.p_kinerja',[
        "title"=>"SPINER | Kinerja Pegawai"
    ]);
});

Route::get('/pegawai/tambah-kinerja-pegawai', function () {
    return view('pegawai.p_tambah_kinerja',[
        "title"=>"SPINER | Tambah Kinerja"
    ]);
});

Route::get('/pegawai/edit-kinerja-pegawai', function () {
    return view('pegawai.p_edit_kinerja',[
        "title"=>"SPINER | Edit Kinerja"
    ]);
});

Route::get('/pegawai/laporan-terverifikasi', function () {
    return view('pegawai.p_laporan',[
        "title"=>"SPINER | Laporan Terverifikasi"
    ]);
});

Route::get('/pegawai/pengaturan', function () {
    return view('pegawai.p_pengaturan',[
        "title"=>"SPINER |  Pengaturan Pegawai"
    ]);
});

Route::get('/pegawai/edit-profil', function () {
    return view('pegawai.p_edit_profil',[
        "title"=>"SPINER |  Edit Profil Pegawai"
    ]);
});

Route::get('/pegawai/edit-password', function () {
    return view('pegawai.p_edit_password',[
        "title"=>"SPINER |  Edit Password Pegawai"
    ]);
});


