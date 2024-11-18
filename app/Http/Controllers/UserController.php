<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function tampil() {
        $user = User::get();
        return view('user.tampil',compact('user'));
    }

    function tambah() {
        return view('user.tambah');
    }

    function submit(Request $request) {
        $user = new User();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->level = $request->level;
        $user->status_login = $request->status_login;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('user.tampil');
    }

    function edit($id) {
        $user = User::find($id);
        return view('user.edit',compact('user'));
    }

    function update(Request $request,$id) {
        $user = User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
        $user->level = $request->level;
        $user->status_login = $request->status_login;
        $user->status = $request->status;
        $user->update();
        return redirect()->route('user.tampil');        
    }
}
