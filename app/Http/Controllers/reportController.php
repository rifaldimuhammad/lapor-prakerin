<?php

namespace App\Http\Controllers;

use App\Models\reportModel;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function index()
    {
        // $absensi = DB::table('absensi')->get();

        return view('report'); // ['absensi' => $absensi]);
    }

    public function storeReport(Request $request)
    {
        $absensiform =  $request->validate([
            'name' => 'required|max:225',
            'class' => 'required|max:225',
            'date' => 'required',
            'time' => 'required',
            'position' => 'required',
            'activity' => 'required',
            
        ]);

        $data = reportModel::create($absensiform);


        return redirect('/report');
    }
}
