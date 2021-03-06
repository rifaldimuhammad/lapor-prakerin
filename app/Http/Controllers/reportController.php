<?php

namespace App\Http\Controllers;

use App\Models\reportModel;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function index()
    {
        $report = reportModel::get();

        return view('report', ['report' => $report]);
    }

    public function storeReport(Request $request)
    {
        $absensiform =  $request->validate([
            'name' => 'required|max:225',
            'class' => 'required|max:225',
            'date' => 'required',
            'time' => 'required',
            'untiltime' => 'required',
            'position' => 'required',
            'activity' => 'required',
        ]);

        $data = reportModel::create($absensiform);
        return redirect('/report');
    }

    public function deleteReport($id)
    {
        $data = reportModel::where('id', $id)
            ->forceDelete();
        return redirect('/report');
    }

    public function editReport(Request $request)
    {
        $data = reportModel::find($request->id);
        $data->name = $request->name;
        $data->class = $request->class;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->untiltime = $request->untiltime;
        $data->activity = $request->activity;
        $data->position = $request->position;

        $data->save();

        return redirect('/report');
    }
}
