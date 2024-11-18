<?php

namespace App\Http\Controllers;

use App\Models\Quizmaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizmasterController extends Controller
{

    function tampil(Request $request, $jenis) {
                $keterangan = DB::table('quizheaders')->where('jenis', '=', $jenis)->value('description');
                $quizmaster = DB::table('quizmasters')->where('jenis', '=', $jenis)->get();
                return view('quizmaster.tampil',compact(['quizmaster','keterangan','jenis']));
           }
        
    function tambah($jenis) {
                $keterangan = DB::table('quizheaders')->where('jenis', '=', $jenis)->value('description');
                $tablename = DB::table('quizheaders')->where('jenis', '=', $jenis);
                return view('quizmaster.tambah',compact(['jenis','keterangan','tablename']));
            }

    function submit(Request $request) {
                $quizmaster = new Quizmaster();
                $quizmaster->jenis = $request->jenis;
                $quizmaster->sequence = $request->sequence;
                $quizmaster->kompetensi = $request->kompetensi;
                $quizmaster->pernyataan = $request->pernyataan;
                $quizmaster->variable = $request->variable;
                $quizmaster->status = $request->status;
                $quizmaster->created_by = $request->created_by;
                $quizmaster->save();
                return redirect()->route('quizmaster.tampil', $quizmaster->jenis);
            }

    function edit($id) {
                $quizmaster = Quizmaster::find($id);
                return view('quizmaster.edit',compact(['quizmaster','id']));
            }
        
    function update(Request $request,$id) {
                $quizmaster = Quizmaster::find($id);
                $quizmaster->sequence = $request->sequence;
                $quizmaster->kompetensi = $request->kompetensi;
                $quizmaster->pernyataan = $request->pernyataan;
                $quizmaster->variable = $request->variable;
                $quizmaster->status = $request->status;
                $quizmaster->created_by = $request->created_by;
                $quizmaster->update();
                return redirect()->route('quizmaster.tampil', $quizmaster->jenis);        
            }


}
