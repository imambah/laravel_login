<?php

namespace App\Http\Controllers;

use App\Models\Dataquiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataquizController extends Controller
{
    function tampil() {
        $quizheader = DB::table('quizheaders')->get();

//        $users = User::select('name')->distinct()->get();

        $tahunajaran = DB::table('dataquizzes')->select('tahun_ajaran')->groupBy('tahun_ajaran')->get();
        $query = DB::table('dataquizzes')->where('grup_quiz', '=', 'EPBM')->get();
        $field01 = DB::table('quizheaders')->where('jenis', '=', 'EPBM')->value('field01');
        $field02 = DB::table('quizheaders')->where('jenis', '=', 'EPBM')->value('field02');
        $field03 = DB::table('quizheaders')->where('jenis', '=', 'EPBM')->value('field03');
        $field04 = DB::table('quizheaders')->where('jenis', '=', 'EPBM')->value('field04');
        $field05 = DB::table('quizheaders')->where('jenis', '=', 'EPBM')->value('field05');
        return view('reviewmonev.tampil',compact(['quizheader','query','field01','field02','field03','field04','field05','tahunajaran']));
    }

    function submit(Request $request) {
        $quizmaster = new Quizmaster();
        $tahun_ajaran = $quizmaster->tahun_ajaran = $request->tahun_ajaran;
        $semester = $quizmaster->semester = $request->semester;
        $grup_quiz = $quizmaster->grup_quiz = $request->grup_quiz;
        $query = DB::table('dataquizzes')
                ->where('grup_quiz', '=', '$quizmaster->grup_quiz')
                ->where('tahun_ajaran', '=', '$quizmaster->tahun_ajaran')
                ->where('semester', '=', '$quizmaster->semester')
                ->get();
        return view('quizmaster.tampil',compact(['query','grup_quiz','tahun_ajaran','semester']));
    }

    function edit($id) {
        $dataquiz = Dataquiz::find($id);
        $description = DB::table('dataquizzes')->where('grup_quiz', '=', 'EPBM')->value('description');
        $query = DB::table('dataquizzes')->where('grup_quiz', '=', 'EPBM')->get();
        return view('reviewmonev.edit',compact(['dataquiz','description','query']));
    }
    
    function update(Request $request, $id) {
        $dataquiz = Dataquiz::find($id);
        $dataquiz->status = $request->status;
        $dataquiz->update();
        return redirect()->route('reviewmonev.tampil', $dataquiz->id);
    }
        
}

//DB::table('users')->increment('votes');