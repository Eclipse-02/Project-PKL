<?php

namespace App\Http\Controllers\Finance\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Finance\Correct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CorrectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $correct_data = Correct::where('coy_id', Auth::user()->coy_id)->orderBy('trxdtl_code', 'asc')->get();

        return view('scaffolds.finance.corrects.index', compact('correct_data'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Correct $correct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Correct $correct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Correct $correct)
    {
        $data = $correct->update([
            'coy_id' => Auth::user()->coy_id,
            'status' => $request->status,
            'updated_by' => Auth::user()->name,
        ]);

        return response()->json([
            "data" => $data,
            "request" => $request->all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Correct $correct)
    {
        //
    }
}
