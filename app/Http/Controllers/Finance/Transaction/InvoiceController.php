<?php

namespace App\Http\Controllers\Finance\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Finance\TransactionDetail;
use Illuminate\Support\Facades\Validator;
use App\Models\Finance\Transaction\Invoice\InvoiceDetail;
use App\Models\Finance\Transaction\Invoice\InvoiceHeader;
use App\Models\Finance\Transaction\Parameter\Transaction;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = InvoiceDetail::where('coy_id', Auth::user()->coy_id)->get();
        $trxdtl_data = TransactionDetail::with('rvdtl')->where('coy_id', Auth::user()->coy_id)->whereDoesntHave('rvdtl')->orderBy('trxdtl_code', 'asc')->get();
        $trx_types = Transaction::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['trx_type', '=', 'INV'],
            ['trx_status', '=', 'Y'],
        ])->get();

        return view('scaffolds.finance.invoices.index', compact('data', 'trxdtl_data', 'trx_types'));
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
            $header = InvoiceHeader::where('invmst_code', $request->invmst_code)->first();
            return response()->json([
                "header" => $header,
            ]);
        } else if ($request->req_type == 'detail') {
            $detail = InvoiceDetail::where('trxdtl_code', $request->trxdtl_code)->first();
            if ($detail) {
                $header = InvoiceHeader::where('invmst_code', $detail->invmst_code)->first();
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
    public function edit(InvoiceDetail $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->req_type == "header") {
            $data = InvoiceHeader::where('invmst_code', $request->invmst_code);
            $default = $data->first();

            $update = $data->update([
                'coy_id' => Auth::user()->coy_id,
                'invmst_display_code' => $request->invmst_display_code ?? $default->invmst_display_code,
                'invmst_desc' => $request->invmst_desc ?? $default->invmst_desc,
                'invmst_jurnal_on_paid' => $request->invmst_jurnal_on_paid ?? $default->invmst_jurnal_on_paid,
                'invmst_gl_category' => $request->invmst_gl_category ?? $default->invmst_gl_category,
                'invmst_auto' => $request->invmst_auto ?? $default->invmst_auto,
                'invmst_status' => $request->invmst_status ?? $default->invmst_status,
                'updated_by' => Auth::user()->name,
            ]);
        } else if ($request->req_type == "detail") {
            $data = InvoiceDetail::where('trxdtl_code', $request->trxdtl_code);
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
    public function destroy(InvoiceDetail $invoice)
    {
        //
    }

    public function link(Request $request) {
        $data = InvoiceDetail::create([
            'coy_id' => Auth::user()->coy_id,
            'invmst_code' => $request->invmst_code,
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
