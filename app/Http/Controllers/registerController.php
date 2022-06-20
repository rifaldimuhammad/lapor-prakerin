<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function index()
    {
        return view('signup', [
            // 'title' => 'register',
            // 'active' => 'register'
        ]);
    }

    public function storeSiswa(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required|max:225',
            'email' => ['required', 'email:dns', 'unique:users', 'min:5'],
            'password' => 'required|min:5|max:255',
            'class' => 'required|max:225',
            'industries' => 'required|max:225',
        ]);

        $validatedData['tipe_user'] = 1;
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('succes', 'Registration successfull!');
        return redirect('/login');
    }

    public function storeGuru(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required|max:225',
            'email' => ['required', 'email:dns', 'unique:users', 'min:5'],
            'password' => 'required|min:5|max:255',
            'class' => 'required|max:225',
            'industries' => 'required|max:225',
        ]);

        $validatedData['tipe_user'] = 2;
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('succes', 'Registration successfull!');
        return redirect('/login');
    }
}
