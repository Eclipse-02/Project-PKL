<?php

namespace App\Http\Controllers\Finance\Transaction;

use Illuminate\Http\Request;
use App\Models\Finance\PCash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Finance\TransactionDetail;
use Illuminate\Support\Facades\Validator;

class PCashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pcash_data = PCash::where('coy_id', Auth::user()->coy_id)->orderBy('trxdtl_code', 'asc')->get();

        return view('scaffolds.finance.pcashes.index', compact('pcash_data'));
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
    public function show(PCash $pCash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PCash $pCash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PCash $pcash)
    {
        $data = $pcash->update([
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
    public function destroy(PCash $pCash)
    {
        //
    }
}
