<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    //
    public function index()
    {
        return view('login', []);
    }


    public function authenticate(Request $request)
    {
        $credentials =  $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (auth::attempt($credentials)) {
            $user =  User::where('email', $request->email)->first();

            $request->session()->regenerate();
            // $request->session()->put('id');
            $request->session()->put('name_user', $user->name);
            $request->session()->put('email_user', $user->email);
            $request->session()->put('class_user', $user->class);


            return redirect()->intended('/dashboard');
        };


        return back()->with('loginError', 'Login failed');
    }
}
