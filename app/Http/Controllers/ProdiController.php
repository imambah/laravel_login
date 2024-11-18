<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    function tampil() {
        $prodi = Prodi::get();
        return view('prodi.tampil',compact('prodi'));
    }

    function tambah() {
        return view('prodi.tambah');
    }

    function submit(Request $request) {
        $prodi = new Prodi();
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->fakultas = $request->fakultas;
        $prodi->jenjang = $request->jenjang;
        $prodi->angkatan = $request->angkatan;
        $prodi->jumlah_mhs = $request->jumlah_mhs;
        $prodi->jumlah_dosen = $request->jumlah_dosen;
        $prodi->status = $request->status;
        $prodi->created_by = $request->created_by;
        $prodi->save();

        return redirect()->route('prodi.tampil');
    }

    function edit($id) {
        $prodi = Prodi::find($id);
        return view('prodi.edit',compact('prodi'));
    }

    function update(Request $request,$id) {
        $prodi = Prodi::find($id);
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->fakultas = $request->fakultas;
        $prodi->jenjang = $request->jenjang;
        $prodi->angkatan = $request->angkatan;
        $prodi->jumlah_mhs = $request->jumlah_mhs;
        $prodi->jumlah_dosen = $request->jumlah_dosen;
        $prodi->status = $request->status;
        $prodi->created_by = $request->created_by;
        $prodi->update();
        return redirect()->route('prodi.tampil');        
    }

    function delete($id) {
        $prodi = Prodi::find($id);
        $prodi->delete();
        return redirect()->route('prodi.tampil');        
    }
}
