<?php

namespace App\Http\Controllers\Finance;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Finance\Account;
use App\Http\Controllers\Controller;
use App\Models\Finance\Correct;
use App\Models\Finance\PCash;
use App\Models\Finance\Transaction\Receive\ReceiveHeader;
use App\Models\Finance\TransactionDetail;
use App\Models\Master\Branch;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::where([
                ['glacct_acct_parent', '=', null],
                ['coy_id', '=', Auth::user()->coy_id]
            ])->get();
        $allAccounts = Account::where('coy_id', Auth::user()->coy_id)->pluck('glacct_description', 'glacct_code')->all();
        $branches = Branch::where('coy_id', Auth::user()->coy_id)->select('branch_code', 'branch_name')->get();

        return view('scaffolds.finance.accounts.index', compact('accounts', 'allAccounts', 'branches'));
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
            'glacct_code' => 'required|integer',
            'glacct_description' => 'required|string',
            'glacct_acct_type' => 'required|string',
            'glacct_acct_summ' => 'required|string',
            'glacct_acct_enable' => 'required|string',
            'glacct_acct_flag' => 'required|string',
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // GL Account
            $test = Account::updateOrCreate(
                [
                    'glacct_code' => $request->glacct_code,
                ],
                [
                    'coy_id' => Auth::user()->coy_id,
                    'glacct_description' => $request->glacct_description,
                    'glacct_acct_type' => $request->glacct_acct_type,
                    'glacct_acct_summ' => $request->glacct_acct_summ,
                    'glacct_acct_enable' => $request->glacct_acct_enable,
                    'glacct_acct_flag' => $request->glacct_acct_flag,
                    'glacct_acct_default' => $request->glacct_acct_default,
                    'glacct_acct_parent' => $request->glacct_acct_parent,
                    'glacct_rpt_flag' => $request->glacct_rpt_flag,
                    'glacct_segment1_allow' => $request->glacct_segment1_allow,
                    'created_by' => Auth::user()->name,
                    'updated_by' => Auth::user()->name,
                ]
            );

            // dd($test);

            // Trxdtl
            TransactionDetail::create([
                'coy_id' => Auth::user()->coy_id,
                'trxdtl_code' => $request->glacct_code,
                'trxdtl_desc' => $request->glacct_description,
                'trxdtl_flag' => $request->glacct_acct_flag,
                'trxdtl_segment2' => $request->glacct_code,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);

            // Pcash
            PCash::create([
                'coy_id' => Auth::user()->coy_id,
                'trxdtl_code' => $request->glacct_code,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);

            // Correct
            Correct::create([
                'coy_id' => Auth::user()->coy_id,
                'trxdtl_code' => $request->glacct_code,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);

            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('finances.accounts.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //
    }

    public function api(Request $request) {
        $validator = Validator::make(request()->all(), [
            'glacct_code' => 'required',
            // ... Rules 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'status' => Response::HTTP_BAD_REQUEST,
            ], Response::HTTP_BAD_REQUEST);
        }

        $data = Account::where('glacct_code', $request->glacct_code)->first();

        return response()->json([
            'data' => $data,
            'status' => Response::HTTP_CREATED
        ], Response::HTTP_CREATED);
    }
}
