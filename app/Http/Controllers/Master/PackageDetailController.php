<?php

namespace App\Http\Controllers\Master;

use App\Models\PackageDetail;
use App\Models\Master\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PackageDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($packageDetail)
    {
        $data = Package::where('pkg_code', $packageDetail)->select('pkg_code', 'pkg_name', 'pkg_status')->first();
        $details = PackageDetail::where('pkg_code', $packageDetail)->get();

        return view('scaffolds.master.packagedetails.create', compact('data', 'details'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dtl_desc' => 'required|array',
            'dtl_desc.0' => 'required',
            'pkg_status' => 'required|string',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            foreach ($request->dtl_desc as $key => $desc) {
                if ($key == array_key_last($request->dtl_desc) || $desc == null || $request->dtl_price[$key] == null) {
                    
                } else {
                    PackageDetail::updateOrCreate([
                        'pkg_code' => $request->pkg_code,
                        'dtl_sq_no' => $key + 1
                    ],
                    [
                        'coy_id' => Auth::user()->coy_id,
                        'dtl_desc' => $desc,
                        'pkg_status' => $request->pkg_status,
                        'created_by' => Auth::user()->name,
                        'updated_by' => Auth::user()->name,
                    ]);
                }
            }

            Alert::toast('Data Berhasil Dibuat!', 'success');
            return redirect()->route('packages.index');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(PackageDetail $packageDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackageDetail $packageDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PackageDetail $packageDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackageDetail $packageDetail)
    {
        $packageDetail->delete();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
