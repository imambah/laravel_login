<?php

namespace App\Http\Controllers;

use App\Models\Mmenudetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MmenudetailController extends Controller
{
    function tampil(Request $request, $id_menu) {
                $keterangan = 'Tambah';
                $mmenudetail = DB::table('mmenudetails')->where('id_menu', '=', $id_menu)->get();
                $menuname = DB::table('mmenus')->where('id', '=', $id_menu)->value('menu_name');
                return view('mmenudetail.tampil',compact(['mmenudetail','id_menu','keterangan','menuname']));
           }

    function tambah($id) {
                $keterangan = 'Tambah';
                $menuname = DB::table('mmenus')->where('id_menu', '=', $id)->value('menu_name');
                return view('mmenudetail.tambah',compact(['id','keterangan','menuname']));
            }
        
    function submit(Request $request) {
                $mmenudetail = new mmenudetail();
                $mmenudetail->id_menu = $request->id_menu;
                $mmenudetail->sub_menu = $request->sub_menu;
                $mmenudetail->description = $request->description;
                $mmenudetail->icon = $request->icon;
                $mmenudetail->link = $request->link;
                $mmenudetail->sort = $request->sort;
                $mmenudetail->save();
                return redirect()->route('mmenudetail.tampil', $mmenudetail->id_menu);
            }
        
    function edit($id) {
                $mmenudetail = mmenudetail::find($id);
                return view('mmenudetail.edit',compact(['mmenudetail','id']));
            }
        
    function update(Request $request, $id) {
                $mmenudetail = mmenudetail::find($id);
                $mmenudetail->id_menu = $request->id_menu;
                $mmenudetail->sub_menu = $request->sub_menu;
                $mmenudetail->description = $request->description;
                $mmenudetail->icon = $request->icon;
                $mmenudetail->link = $request->link;
                $mmenudetail->sort = $request->sort;
                $mmenudetail->update();
                return redirect()->route('mmenudetail.tampil', $mmenudetail->id_menu);
            }
        
}
