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
        // $request->validate([
        //     'Fname' => ['required', 'string', 'max:255'],
            // 'Mname' => ['string', 'max:255'],
        //     'Lname' => ['required', 'string', 'max:255'],
        // ]);
        $user = User::create([
            'name'=> $request->name,
            'address'=> $request->address,
            'contact_num'=> $request->contact_num,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'Status'=> "Active",
            'role'=> "user",
        ]);
        event(new Registered($user));

        // Auth::login($user);

        return redirect(RouteServiceProvider::AddU)->with('message','Data added successfully!');
    }
}
