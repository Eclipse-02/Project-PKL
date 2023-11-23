<?php

namespace App\Http\Controllers\Finance;

use Illuminate\Http\Request;
use App\Models\Finance\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Finance\InvoiceDetail;
use App\Models\Finance\InvoiceHeader;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = InvoiceDetail::where('coy_id', Auth::user()->coy_id)->get();
        $trx_type = Transaction::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['trx_type', '=', 'INV'],
            ['trx_status', '=', 'Y'],
        ])->get();

        return view('scaffolds.finance.invoices.index', compact('data', 'trx_type'));
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
            'invmst_code' => 'required|string',
            'invmst_display_code' => 'required|string',
            'invmst_desc' => 'required|string',
            'invmst_gl_category' => 'required|string',
            'invmst_auto' => 'required|string',
            'invmst_jurnal_on_paid' => 'required|string',
            'invmst_status' => 'required|string'
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            InvoiceHeader::updateOrCreate(
                [
                    'invmst_code' => $request->invmst_code
                ],
                [
                    'coy_id' => Auth::user()->coy_id,
                    'invmst_code' => $request->invmst_code,
                    'invmst_display_code' => $request->invmst_display_code,
                    'invmst_desc' => $request->invmst_desc,
                    'invmst_gl_category' => $request->invmst_gl_category,
                    'invmst_auto' => $request->invmst_auto,
                    'invmst_jurnal_on_paid' => $request->invmst_jurnal_on_paid,
                    'invmst_status' => $request->invmst_status,
                    'created_by' => Auth::user()->name,
                    'updated_by' => Auth::user()->name,
                ]
            );
            // InvoiceDetail::updateOrCreate(
            //     [

            //     ],
            //     [
            //         'invdtl_code' => ,
            //         'trxdtl_code' => ,
            //         'status' => ,
            //         'created_by' => Auth::user()->name,
            //         'updated_by' => Auth::user()->name,
            //     ]
            // );
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('transactiondetails.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
