<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
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
    function active_show(){
        $data = DB::table('users')->where('role', "user")->where('Status', "Active")->get();
        $num = DB::table('users')->where('role', "user")->count();

        $active = DB::table('users')->where('Status', "Active")->where('role', "user")->count();
        $inactive = DB::table('users')->where('Status', "Inactive")->count();
        return view('ActiveEmployee',['data'=>$data,'num'=>$num ,'active'=>$active ,'inactive'=>$inactive]);
    }
    function inactive_show(){
        $data = DB::table('users')->where('role', "user")->where('Status', "Inactive")->get();
        $num = DB::table('users')->where('role', "user")->count();

        $active = DB::table('users')->where('Status', "Active")->where('role', "user")->count();
        $inactive = DB::table('users')->where('Status', "Inactive")->count();
        return view('InactiveEmployee',['data'=>$data,'num'=>$num ,'active'=>$active ,'inactive'=>$inactive]);
    }
     /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit_employee(Request $request, $id)
    {
        // $request->validate([
        //     'StudentId' => ['required', 'min:7'],
        //     'FirstName' => ['required', 'string', 'max:255', 'regex:/^([^0-9]*)$/'],
        //     'LastName' => ['required', 'string', 'max:255','regex:/^([^0-9]*)$/'],
        // ]);
        $randomNumber = random_int(10, 99);

                $Name = $request->input('Name');
                $Address = $request->input('Address');
                $number = $request->input('number');
                $email = $request->input('email');
                $Status = $request->input('status');
                $password = $request->input('password');

        DB::table('users')
        ->where('id', $id)
        ->update(array(
            'name' => $Name,
            'address' => $Address,
            'contact_num' => $number,
            'email' => $email,
            'Status' => $Status,
            'password' => Hash::make($request->get('password')),
            'confirm_pass'=> "@".$randomNumber.$password,
        ));
            return redirect('Adduser')->with('message','Employee details updated successfully!');

    }

}
