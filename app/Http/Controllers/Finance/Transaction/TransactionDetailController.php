<?php

namespace App\Http\Controllers\Finance\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Finance\TransactionDetail;
use App\Models\Finance\Transaction\Parameter\TransactionHeader;
use Illuminate\Support\Facades\Validator;

class TransactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = TransactionDetail::where('coy_id', Auth::user()->coy_id)->orderBy('trxdtl_code', 'asc')->get();
        $trxhdr_data = TransactionHeader::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['param_status', '=', 'Y']
        ])->get();

        return view('scaffolds.finance.transactiondetails.index', compact('data', 'trxhdr_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scaffolds.finance.transactiondetails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'trxdtl_code' => 'required|string',
            'trxdtl_desc' => 'required|string',
            'trxdtl_flag' => 'required|string',
            'trxdtl_param' => 'required|string'
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            TransactionDetail::create([
                'coy_id' => Auth::user()->coy_id,
                'trxdtl_code' => $request->trxdtl_code,
                'trxdtl_desc' => $request->trxdtl_desc,
                'trxdtl_flag' => $request->trxdtl_flag,
                'trxdtl_param' => $request->trxdtl_param,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);
            Alert::toast('Data Created Successfully!', 'success');
            // return redirect()->route('transactiondetails.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($transactiondetail)
    {
        $data = TransactionDetail::where('id', $transactiondetail)->first();
        return view('scaffolds.finance.transactiondetails.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($transactiondetail)
    {
        $data = TransactionDetail::where('id', $transactiondetail)->first();
        return view('scaffolds.finance.transactiondetails.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransactionDetail $transactiondetail)
    {
        $validator = Validator::make($request->all(), [
            // 'trxdtl_code' => 'required|string',
            // 'trxdtl_desc' => 'required|string',
            // 'trxdtl_flag' => 'required|string',
            // 'trxdtl_param' => 'required|string'
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $transactiondetail->update([
                'coy_id' => Auth::user()->coy_id,
                !$request->trxdtl_code ? : 'trxdtl_code' => $request->trxdtl_code,
                !$request->trxdtl_desc ? :'trxdtl_desc' => $request->trxdtl_desc,
                !$request->trxdtl_flag ? :'trxdtl_flag' => $request->trxdtl_flag,
                !$request->trxdtl_param ? :'trxdtl_param' => $request->trxdtl_param,
                !$request->trxdtl_segment2 ? :'trxdtl_segment2' => $request->trxdtl_segment2,
                !$request->trxdtl_segment3 ? :'trxdtl_segment3' => $request->trxdtl_segment3,
                !$request->trxdtl_segment4 ? :'trxdtl_segment4' => $request->trxdtl_segment4,
                !$request->trxdtl_segment5 ? :'trxdtl_segment5' => $request->trxdtl_segment5,
                !$request->trxdtl_segment6 ? :'trxdtl_segment6' => $request->trxdtl_segment6,
                !$request->trxdtl_segment7 ? :'trxdtl_segment7' => $request->trxdtl_segment7,
                !$request->trxdtl_segment8 ? :'trxdtl_segment8' => $request->trxdtl_segment8,
                !$request->trxdtl_segment9 ? :'trxdtl_segment9' => $request->trxdtl_segment9,
                !$request->trxdtl_segment10 ? :'trxdtl_segment10' => $request->trxdtl_segment10,
                'updated_by' => Auth::user()->name,
            ]);
            // return redirect()->route('finances.transactions.details.index');
            return response()->json([
                "data" => $transactiondetail,
                "request" => $request->all()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionDetail $transactiondetail)
    {
        $transactiondetail->delete();

        // return redirect()->route('transactiondetails.index');
    }
}
