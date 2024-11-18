<?php

namespace App\Http\Controllers;

use App\Models\Parameterdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ParameterdetailController extends Controller
{
   
//    public function data_detail() {
//     $db=DB::table('parameterdetails')
//             ->where('para_id', '=', 3)
//             ->get();
//     dd($db);
//     return view('parameterdetail.tampil',compact('db'));
//    }

   function tampil(Request $request, $para_id) {
//      $parameterdetail = Parameterdetail::find($para_id);
        $keterangan = 'Tambah';
        $parameterdetail = DB::table('parameterdetails')->where('para_id', '=', $para_id)->get();
        return view('parameterdetail.tampil',compact(['parameterdetail','para_id','keterangan']));
   }

    // function tampil() {
    //       $parameterdetail = Parameterdetail::get();
    //       return view('parameterdetail.tampil',compact('parameterdetail'));
    // }

    function tambah($id) {
        $keterangan = 'Tambah';
        $tablename = DB::table('parameterheaders')->where('para_id', '=', $id)->value('table_name');
        return view('parameterdetail.tambah',compact(['id','keterangan','tablename']));
    }

    function submit(Request $request) {
        $parameterdetail = new Parameterdetail();
        $parameterdetail->para_id = $request->para_id;
        $parameterdetail->table_code = $request->table_code;
        $parameterdetail->short_desc = $request->short_desc;
        $parameterdetail->long_desc = $request->long_desc;
        $parameterdetail->field01 = $request->field01;
        $parameterdetail->save();
        return redirect()->route('parameterdetail.tampil', $parameterdetail->para_id);
    }

    function edit($id) {
        $parameterdetail = Parameterdetail::find($id);
        return view('parameterdetail.edit',compact('parameterdetail'));
    }

    function update(Request $request, $id) {
        $parameterdetail = Parameterdetail::find($id);
        $parameterdetail->para_id = $request->para_id;
        $parameterdetail->table_code = $request->table_code;
        $parameterdetail->short_desc = $request->short_desc;
        $parameterdetail->long_desc = $request->long_desc;
        $parameterdetail->field01 = $request->field01;
        $parameterdetail->update();
        return redirect()->route('parameterdetail.tampil', $parameterdetail->para_id);
    }


}

