<?php

namespace App\Http\Controllers\Finance\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Finance\TransactionDetail;
use Illuminate\Support\Facades\Validator;
use App\Models\Finance\Transaction\Parameter\Transaction;
use App\Models\Finance\Transaction\Receive\ReceiveDetail;
use App\Models\Finance\Transaction\Receive\ReceiveHeader;

class ReceiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rvdtl_data = ReceiveDetail::where('coy_id', Auth::user()->coy_id)->orderBy('trxdtl_code', 'asc')->get();
        $trxdtl_data = TransactionDetail::with('invdtl')->where('coy_id', Auth::user()->coy_id)->whereDoesntHave('invdtl')->orderBy('trxdtl_code', 'asc')->get();
        $trx_types = Transaction::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['trx_type', '=', 'RV'],
            ['trx_status', '=', 'Y'],
        ])->get();

        return view('scaffolds.finance.receives.index', compact('rvdtl_data', 'trxdtl_data', 'trx_types'));
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
    public function show(Request $request)
    {
        if ($request->req_type == 'header') {
            $header = ReceiveHeader::where('rvmst_code', $request->rvmst_code)->first();
            return response()->json([
                "header" => $header,
            ]);
        } else if ($request->req_type == 'detail') {
            $detail = ReceiveDetail::where('trxdtl_code', $request->trxdtl_code)->first();
            if ($detail) {
                $header = ReceiveHeader::where('rvmst_code', $detail->rvmst_code)->first();
                return response()->json([
                    "header" => $header,
                    "detail" => $detail,
                ]);
            }
            return response()->json("No Record Found");
        } else {
            return response()->json([
                "message" => "No request type was set",
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReceiveHeader $receiveHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->req_type == "header") {
            $data = ReceiveHeader::where('rvmst_code', $request->rvmst_code);
            $default = $data->first();

            $update = $data->update([
                'coy_id' => Auth::user()->coy_id,
                'rvmst_disply_code' => $request->rvmst_disply_code ?? $default->rvmst_disply_code,
                'rvmst_desc' => $request->rvmst_desc ?? $default->rvmst_desc,
                'rvmst_type' => $request->rvmst_type ?? $default->rvmst_type,
                'rvmst_gl_category' => $request->rvmst_gl_category ?? $default->rvmst_gl_category,
                'rvmst_auto' => $request->rvmst_auto ?? $default->rvmst_auto,
                'rvmst_status' => $request->rvmst_status ?? $default->rvmst_status,
                'updated_by' => Auth::user()->name,
            ]);
        } else if ($request->req_type == "detail") {
            $data = ReceiveDetail::where('trxdtl_code', $request->trxdtl_code);
            $default = $data->first();

            $update = $data->update([
                'coy_id' => Auth::user()->coy_id,
                'trxdtl_code' => $request->trxdtl_code ?? $default->trxdtl_code,
                'status' => $request->status ?? $default->status,
                'updated_by' => Auth::user()->name,
            ]);
        } else {
            return response()->json("No request type was set");
        }

        return response()->json([
            "data" => $update,
            "request" => $request->all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReceiveHeader $receiveHeader)
    {
        //
    }

    public function link(Request $request) {
        $data = ReceiveDetail::create([
            'coy_id' => Auth::user()->coy_id,
            'rvmst_code' => $request->rvmst_code,
            'trxdtl_code' => $request->trxdtl_code,
            'status' => $request->status ?? 'N',
            'created_by' => Auth::user()->name,
            'updated_by' => Auth::user()->name,
        ]);

        return response()->json([
            "data" => $data
        ]);
    }
}
