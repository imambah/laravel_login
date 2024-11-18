<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Mmenudetail;
use App\Models\useraccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UseraccessController extends Controller
{
 function tampil() {
                $mmenudetail = Mmenudetail::get();
                $quser = User::get();
                $query = DB::table('users')
                                ->leftJoin('useraccesses', 'users.id', '=', 'useraccesses.id_data')
                                ->get();
                $menu = DB::table('users')
                        ->join('useraccesses', 'users.id', '=', 'useraccesses.user_id')
                        ->join('mmenudetails', 'useraccesses.id_data', '=', 'mmenudetails.id_menu')
                        ->select('username','sub_menu')
                        ->get();                
                return view('useraccess.tampil',compact(['quser','query','menu']));
           }

}

//  $v_hak_akses =  select 
//                      `a`.`sub_menu` AS `sub_menu`,
//                      `b`.`id_data` AS `id_data_akses`,
//                      `a`.`id_data` AS `id_data`,
//                      `b`.`user_id` AS `user_id`,
//                  case when `b`.`id_data` is null then 0 else 1 end AS `nilai` 
//                  from (`emonev`.`m_menu_detail` `a` 
//                  left join `emonev`.`user_akses` `b` 
//                  on(`a`.`id_data` = `b`.`id_data`))

