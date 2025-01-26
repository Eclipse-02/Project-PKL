<?php

namespace App\Http\Controllers\Finance\Transaction\Parameter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Finance\Transaction\Invoice\InvoiceHeader;
use App\Models\Finance\Transaction\Parameter\Transaction;
use App\Models\Finance\Transaction\Receive\ReceiveHeader;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Transaction::where('coy_id', Auth::user()->coy_id)->orderBy('created_at', 'asc')->get();

        return view('scaffolds.finance.transactions.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scaffolds.finance.transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'trx_code' => 'required|string',
            'trx_desc' => 'required|string',
            'trx_type' => 'required|string',
            'trx_status' => 'required|string'
        ]);
        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Transaction::create([
                'coy_id' => Auth::user()->coy_id,
                'trx_code' => $request->trx_code,
                'trx_desc' => $request->trx_desc,
                'trx_type' => $request->trx_type,
                'trx_status' => $request->trx_status,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);
            ReceiveHeader::create([
                'coy_id' => Auth::user()->coy_id,
                'rvmst_code' => $request->trx_code,
                'rvmst_disply_code' => $request->trx_code,
                'rvmst_desc' => $request->trx_desc,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);
            InvoiceHeader::create([
                'coy_id' => Auth::user()->coy_id,
                'invmst_code' => $request->trx_code,
                'invmst_display_code' => $request->trx_code,
                'invmst_desc' => $request->trx_desc,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('finances.transactions.parameters.transaction.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($transaction)
    {
        $data = Transaction::where('id', $transaction)->first();
        return view('scaffolds.finance.transactions.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($transaction)
    {
        $data = Transaction::where('id', $transaction)->first();
        return view('scaffolds.finance.transactions.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        $validator = Validator::make($request->all(), [
            // 'trx_code' => 'required|string',
            // 'trx_desc' => 'required|string',
            // 'trx_type' => 'required|string',
            // 'trx_status' => 'required|string'
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $transaction->update([
                'coy_id' => Auth::user()->coy_id,
                !$request->trx_code ? : 'trx_code' => $request->trx_code,
                !$request->trx_desc ? : 'trx_desc' => $request->trx_desc,
                !$request->trx_type ? : 'trx_type' => $request->trx_type,
                !$request->trx_status ? : 'trx_status' => $request->trx_status,
                'updated_by' => Auth::user()->name,
            ]);
            // Alert::toast('Data Updated Successfully!', 'success');
            // return redirect()->route('transactions.index');
            return response()->json([
                "data" => $transaction,
                "request" => $request->all()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index');
    }
}
