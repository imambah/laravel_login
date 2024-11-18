<?php

namespace App\Http\Controllers;

use App\Models\Quizheader;
use App\Models\Dataquiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    function tampil() {
        $quizheader = Quizheader::get();
        return view('survey.tampil',compact('quizheader'));
    }

    function tambah($jenis) {
        
        $tablename = DB::table('quizheaders')->where('jenis', '=', $jenis)->get();
        $query1 = DB::table('quizmasters')->where('jenis','=', $jenis)->orderBy('sequence')->get();
        return view('survey.tambah',compact(['tablename','query1']));

    // $sql = DB::select('exec get_data_parameter("periode_monev", "Sekarang",@kode,@short,@long,@field)');
    // $sql = DB::select("CALL get_data_parameter('periode_monev','Sekarang',@kode,@short,@long,@field)");

    }


    // $sql = "CALL get_data_parameter('periode_monev','Sekarang',@kode,@short,@long,@field);";
    // $conn->query($sql);
    // $result = $conn->query("SELECT @kode as kode, @short as tahun, @long as semester, @field as remarks;");
    // $row = $result->fetch_assoc();
    // $tahun_ajaran = $row['tahun'];
    // $semester = $row['semester'];

    // $sql = DB::select('exec get_data_parameter("periode_monev", "Sekarang",@kode,@short,@long,@field)');
    // $sql = DB::select("CALL get_data_parameter('periode_monev','Sekarang',@kode,@short,@long,@field)");


    function submit(Request $request) {
        $dataquiz = new Dataquiz();
        $dataquiz->tahun_ajaran = date('Y');
        $dataquiz->semester = "genap";
        $dataquiz->grup_quiz = $request->grup_quiz;
        $dataquiz->keterangan_quiz = $request->keterangan_quiz;
        $dataquiz->field01 = $request->field01;
        $dataquiz->field02 = $request->field02;
        $dataquiz->field03 = $request->field03;
        $dataquiz->field04 = $request->field04;
        $dataquiz->field05 = $request->field05;
        $dataquiz->q01 = $request->q01;
        $dataquiz->q02 = $request->q02;
        $dataquiz->q03 = $request->q03;
        $dataquiz->q04 = $request->q04;
        $dataquiz->q05 = $request->q05;
        $dataquiz->q06 = $request->q06;
        $dataquiz->q07 = $request->q07;
        $dataquiz->q08 = $request->q08;
        $dataquiz->q09 = $request->q09;
        $dataquiz->q10 = $request->q10;
        $dataquiz->q11 = $request->q11;
        $dataquiz->q12 = $request->q12;
        $dataquiz->q13 = $request->q13;
        $dataquiz->q14 = $request->q14;
        $dataquiz->q15 = $request->q15;
        $dataquiz->q16 = $request->q16;
        $dataquiz->q17 = $request->q17;
        $dataquiz->q18 = $request->q18;
        $dataquiz->q19 = $request->q19;
        $dataquiz->q20 = $request->q20;
        $dataquiz->q21 = $request->q21;
        $dataquiz->q22 = $request->q22;
        $dataquiz->q23 = $request->q23;
        $dataquiz->q24 = $request->q24;
        $dataquiz->q25 = $request->q25;
        $dataquiz->suggest = $request->suggest;
        $dataquiz->status = "Aktif";
        $dataquiz->created_by = "Guest";
        $dataquiz->save();

        return redirect()->route('survey.tampil');
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
        return redirect()->route('survey.tampil');        
    }
}
