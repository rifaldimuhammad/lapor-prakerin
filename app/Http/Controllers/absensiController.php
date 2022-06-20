<?php

namespace App\Http\Controllers;

use App\Models\absensiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class absensiController extends Controller
{
    //

    public function index()
    {
        $absensi = DB::table('absensi')->get();

        return view('absensi', ['absensi' => $absensi]);
    }

    public function storeAbsensi(Request $request)
    {
        $absensiform =  $request->validate([
            'name' => 'required|max:225',
            'class' => 'required|max:225',
            'date' => 'required',
            'time' => 'required',
        ]);

        $data = absensiModel::create($absensiform);

        
        return redirect('/absensi');
    }
}
