<?php

namespace App\Http\Controllers;

use App\Models\Mmenu;
use Illuminate\Http\Request;

class MmenuController extends Controller
{
    function tampil() {
        $mmenu = Mmenu::get();
        return view('mmenu.tampil',compact('mmenu'));
    }

    function tambah() {
        return view('mmenu.tambah');
    }

    function submit(Request $request) {
        $mmenu = new Mmenu();
        $mmenu->menu_name = $request->menu_name;
        $mmenu->description = $request->description;
        $mmenu->icon = $request->icon;
        $mmenu->tab = $request->tab;
        $mmenu->link = $request->link;
        $mmenu->sort = $request->sort;
        $mmenu->save();
        return redirect()->route('mmenu.tampil');
    }

    function edit($id) {
        $mmenu = Mmenu::find($id);
        return view('mmenu.edit',compact('mmenu'));
    }

    function update(Request $request,$id) {
        $mmenu = Mmenu::find($id);
        $mmenu->menu_name = $request->menu_name;
        $mmenu->description = $request->description;
        $mmenu->icon = $request->icon;
        $mmenu->tab = $request->tab;
        $mmenu->link = $request->link;
        $mmenu->sort = $request->sort;
        $mmenu->update();
        return redirect()->route('mmenu.tampil');        
    }
}
