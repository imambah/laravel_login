<?php

namespace App\Http\Controllers;

use App\Models\Quizheader;
use Illuminate\Http\Request;

class QuizheaderController extends Controller
{
    function tampil() {
        $quizheader = Quizheader::get();
        return view('quizheader.tampil',compact('quizheader'));
    }

    function tambah() {
        return view('quizheader.tambah');
    }

    function submit(Request $request) {
        $quizheader = new Quizheader();
        $quizheader->description = $request->description;
        $quizheader->jenis = $request->jenis;
        $quizheader->narasi = $request->narasi;
        $quizheader->petunjuk = $request->petunjuk;
        $quizheader->field01 = $request->field01;
        $quizheader->field02 = $request->field02;
        $quizheader->field03 = $request->field03;
        $quizheader->field04 = $request->field04;
        $quizheader->field05 = $request->field05;
        $quizheader->status = $request->status;
        $quizheader->responden = $request->responden;
        $quizheader->created_by = $request->created_by;
        $quizheader->save();

        return redirect()->route('quizheader.tampil');
    }

    function edit($id) {
        $quizheader = Quizheader::find($id);
        return view('quizheader.edit',compact('quizheader'));
    }

    function update(Request $request,$id) {
        $quizheader = Quizheader::find($id);
        $quizheader->description = $request->description;
        $quizheader->jenis = $request->jenis;
        $quizheader->narasi = $request->narasi;
        $quizheader->petunjuk = $request->petunjuk;
        $quizheader->field01 = $request->field01;
        $quizheader->field02 = $request->field02;
        $quizheader->field03 = $request->field03;
        $quizheader->field04 = $request->field04;
        $quizheader->field05 = $request->field05;
        $quizheader->status = $request->status;
        $quizheader->responden = $request->responden;
        $quizheader->created_by = $request->created_by;
        $quizheader->update();
        return redirect()->route('quizheader.tampil');        
    }
}
