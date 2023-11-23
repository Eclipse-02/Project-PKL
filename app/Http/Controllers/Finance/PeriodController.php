<?php

namespace App\Http\Controllers\Finance;

use Illuminate\Http\Request;
use App\Models\Finance\Period;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Period::where('coy_id', Auth::user()->coy_id)->get();

        return view('scaffolds.finance.periods.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'period_name' => 'required|string',
            'period_status' => 'required|string',
            'period_year' => 'required|string',
            'period_num' => 'required|string',
            'period_start_date' => 'required|string',
            'period_end_date' => 'required|string',
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Period::updateOrCreate(
                [
                    'id' => $request->id,
                ],
                [
                'coy_id' => Auth::user()->coy_id,
                'period_name' => $request->period_name,
                'period_status' => $request->period_status,
                'period_year' => $request->period_year,
                'period_num' => $request->period_num,
                'period_start_date' => $request->period_start_date,
                'period_end_date' => $request->period_end_date,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
                ]
            );   
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('periods.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Period $period)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Period $period)
    {
        $validator = Validator::make($request->all(), [
            'period_status' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Oops, Something Wrong Happened!']);
        } else {
            $period->update([
                'period_status' => $request->period_status,
                'updated_by' => Auth::user()->name,
            ]);
            return response()->json(['message' => 'Data Created Successfully!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Period $period)
    {
        //
    }
}
