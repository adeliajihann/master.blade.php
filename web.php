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
    return view('layouts.p_kinerja',[
        "title"=>"SPINER | Pegawai"
    ]);
});

Route::get('/tambah_kinerja_pegawai', function () {
    return view('layouts.p_tambah_kinerja',[
        "title"=>"SPINER | Tambah Pegawai"
    ]);
});

Route::get('/laporan_pegawai', function () {
    return view('layouts.p_laporan',[
        "title"=>"SPINER | Laporan Pegawai"
    ]);
});

