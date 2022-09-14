<?php

namespace App\Http\Controllers;

use App\Models\kinerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class kinerjaController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $kinerja = Kinerja::where('hasil','LIKE', '%'.$keyword.'%')
        ->orWhere('hasil','LIKE', '%'.$keyword.'%')
        ->paginate(1000);
        return view('pegawai.p_kinerja',compact('kinerja'));
    }

    public function tambah()
    {
        return view('pegawai.p_tambah_kinerja');
    }

    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $newFoto = 'foto_kinerja' . '_' . time() . '.' . $foto->extension();

        $doc = $request->file('doc');
        $newDoc = 'doc_kinerja' . '_' . time() . '.' . $doc->extension();

        $path = 'template/dist/img/kinerja/';
        $request->foto->move(public_path($path), $newFoto);
        $request->doc->move(public_path($path), $newDoc);
        // $foto = $request->file('foto');
        // $foto->storeAs('public/images', $foto->hashName());
        // $doc = $request->file('doc');
        // $doc->storeAs('public/images', $doc->hashName());
        Kinerja::create([
            'foto' => $newFoto,
            'doc' => $newDoc,
            'tgl' => $request->tgl,
            'hasil' => $request->hasil,
        ]);
        // $message="Berhasil Simpan Data";
        return redirect('/pegawai/kinerja-pegawai');
    }

    public function destroy($id, Request $request)
    {
        $kinerja = Kinerja::where('id', $id)->delete();
        $path = 'template/dist/img/kinerja/';
        File::delete($path);
        return redirect('/pegawai/kinerja-pegawai')->with('status','Data berhasil di hapus!');
    }

    public function edit($id)
    {
        $kinerja = Kinerja::find($id);
        return view('pegawai.p_edit_kinerja',compact('kinerja'));
    }

    public function update($id, Request $request)
    {
        $kinerja = Kinerja::find($id);
        $kinerja->update();
        return redirect('/pegawai/kinerja-pegawai');
    }
}
