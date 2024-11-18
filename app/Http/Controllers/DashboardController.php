<?php

namespace App\Http\Controllers;

use App\Models\Quizheader;
use App\Models\Dataquiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function tampil() {
        $query = Quizheader::get();
        $jenis = DB::table('quizheaders')->where('para_id', '=', $id)->value('table_name');
        return view('survey.tampil',compact([]'quizheader'));
}
