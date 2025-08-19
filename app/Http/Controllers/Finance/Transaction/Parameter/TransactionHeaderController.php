<?php

namespace App\Http\Controllers\Finance\Transaction\Parameter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Finance\Transaction\Parameter\TransactionHeader;
use Illuminate\Support\Facades\Validator;

class TransactionHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = TransactionHeader::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['param_code', 'like', '%'.$request->s_param_code.'%']
            ])->orderBy('created_at', 'asc')->get();
    
            return response()->json($data);
        } else {
            $data = TransactionHeader::where('coy_id', Auth::user()->coy_id)->orderBy('created_at', 'asc')->get();

            return view('scaffolds.finance.transactionheaders.index', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scaffolds.finance.transactionheaders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'param_code' => 'required|string',
            'param_desc' => 'required|string',
            'param_status' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "request" => $request->all(),
                "message" => "Failed",
                "validator" => $validator->errors(),
            ], 422);
        } else {
            if ($request->action == 'create') {
                try {
                    TransactionHeader::create([
                            'param_code' => $request->param_code,
                            'coy_id' => Auth::user()->coy_id,
                            'param_desc' => $request->param_desc,
                            'param_status' => $request->param_status,
                            'created_by' => Auth::user()->name,
                            'updated_by' => Auth::user()->name,
                        ]
                    );
                    $status = true;
                } catch (\Throwable $th) {
                    return response()->json([
                        "id" => true
                    ], 422);
                }
            } else {
                TransactionHeader::where('param_code', $request->old_param_code)->update([
                    'param_code' => $request->param_code,
                    'coy_id' => Auth::user()->coy_id,
                    'param_desc' => $request->param_desc,
                    'param_status' => $request->param_status,
                    'created_by' => Auth::user()->name,
                    'updated_by' => Auth::user()->name,
                ]);
                $status = false; 
            }
            return response()->json([
                "request" => $request->all(),
                "created" => $status
            ]);
            // Alert::toast('Data Created Successfully!', 'success');
            // return redirect()->route('finances.transactions.parameters.headers.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($transactionheader)
    {
        $data = TransactionHeader::where('id', $transactionheader)->first();
        return view('scaffolds.finance.transactionheaders.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($transactionheader)
    {
        $data = TransactionHeader::where('id', $transactionheader)->first();
        return view('scaffolds.finance.transactionheaders.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $transactionheader)
    {
        $validator = Validator::make($request->all(), [
            // 'param_code' => 'required|string',
            // 'param_desc' => 'required|string',
            // 'param_status' => 'required|string'
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $data = TransactionHeader::where('param_code', $transactionheader);
            $default = $data->first();
            $update = $data->update([
                'coy_id' => Auth::user()->coy_id,
                'param_code' => $request->param_code ?? $default->param_code,
                'param_desc' => $request->param_desc ?? $default->param_desc,
                'param_status' => $request->param_status ?? $default->param_status,
                'updated_by' => Auth::user()->name,
            ]);
            return response()->json([
                "data" => $update,
                "request" => $request->all()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionHeader $transactionheader)
    {
        $transactionheader->delete();

        return redirect()->route('transactionheaders.index');
    }
}
