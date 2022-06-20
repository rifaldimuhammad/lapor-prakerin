<?php

namespace App\Http\Controllers;

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
            $request->session()->regenerate();
            $request->session()->put('id');

            return redirect()->intended('/dashboard');
        };


        return back()->with('loginError', 'Login failed');
    }
}
