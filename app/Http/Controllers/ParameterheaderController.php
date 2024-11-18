<?php

namespace App\Http\Controllers;

use App\Models\Parameterheader;
use Illuminate\Http\Request;

class ParameterheaderController extends Controller
{
    function tampil() {
        $parameterheader = Parameterheader::get();
        return view('parameterheader.tampil',compact('parameterheader'));
    }

    function tambah() {
        return view('parameterheader.tambah');
    }

    function submit(Request $request) {
        $parameterheader = new Parameterheader();
        $parameterheader->table_name = $request->table_name;
        $parameterheader->description = $request->description;
        $parameterheader->status = $request->status;
        $parameterheader->created_by = $request->created_by;
        $parameterheader->save();

        return redirect()->route('parameterheader.tampil');
    }

    function edit($id) {
        $parameterheader = Parameterheader::find($id);
        return view('parameterheader.edit',compact('parameterheader'));
    }

    function update(Request $request,$id) {
        $parameterheader = Parameterheader::find($id);
        $parameterheader->table_name = $request->table_name;
        $parameterheader->description = $request->description;
        $parameterheader->status = $request->status;
        $parameterheader->created_by = $request->created_by;
        $parameterheader->update();
        return redirect()->route('parameterheader.tampil');        
    }

    function delete($id) {
        $parameterheader = Parameterheader::find($id);
        $parameterheader->delete();
        return redirect()->route('parameterheader.tampil');        
    }
}
