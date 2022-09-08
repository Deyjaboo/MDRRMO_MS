<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    function user_show(){
        $data = DB::table('users')->where('role', "user")->get();
        $num = DB::table('users')->where('role', "user")->count();

        $active = DB::table('users')->where('Status', "Active")->where('role', "user")->count();
        $inactive = DB::table('users')->where('Status', "Inactive")->count();
        return view('Adduser',['data'=>$data,'num'=>$num ,'active'=>$active ,'inactive'=>$inactive]);
    }
}
