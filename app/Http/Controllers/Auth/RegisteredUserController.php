<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
     

        $request->validate([
            'Fname' => ['required', 'string', 'max:255'],
            // 'Mname' => ['string', 'max:255'],
            'Lname' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'max:255', 'unique:users'],
            // 'password' => ['required'],
        ]);
        if(is_null($request->suffix)){
            $EXTname = " ";
        }else{
            $EXTname = $request->suffix;
        }
        if(is_null($request->Mname)){
            $Mname = " ";
        }else{
            $Mname = $request->Mname;
        }
        $user = User::create([
            'stud_id'=> $request->stud_id,
            'Fname'=> $request->Fname,
            'Mname'=> $Mname,
            'Lname'=> $request->Lname,
            'suffix'=> $EXTname,
            'course'=> $request->course,
            'email'=> $request->stud_id,
            'password'=> Hash::make($request->stud_id),
            'role'=> "user",
        ]);

        event(new Registered($user));

        // Auth::login($user);

        return redirect(RouteServiceProvider::AddU)->with('message','Data added successfully!');
    }
}
