<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Coy;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\PackageDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('appl_trn_pkg', 'pkg')
            ->join('appl_trn_pkg_dtls', 'pkg.pkg_code', '=', 'appl_trn_pkg_dtls.pkg_code')
            ->select('pkg.coy_id', 'pkg.id', 'pkg.pkg_code', 'pkg.pkg_name', 'pkg.pkg_desc', 'pkg.pkg_price', 'pkg.pkg_price_limit', 'pkg.pkg_price_agent', 'pkg.pkg_start', 'pkg.pkg_closed', 'pkg.pkg_image', 'pkg.pkg_is_display', 'appl_trn_pkg_dtls.dtl_sq_no', 'appl_trn_pkg_dtls.dtl_desc', 'appl_trn_pkg_dtls.dtl_price', 'appl_trn_pkg_dtls.pkg_status', 'pkg.created_by', 'pkg.updated_by', 'pkg.created_at', 'pkg.updated_at')
            ->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        if ($row->pkg_is_display == 1) {
                            $btn = '
                            <form action="packages/'.$row->id.'" method="POST">

                                <a class="btn btn-info" href="packages/'.$row->id.'" >
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                        <style>svg{fill:#ffffff}</style>
                                        <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/>
                                    </svg>
                                </svg>
                                </a>

                                <a class="btn btn-primary" href="packages/'.$row->id.'/edit" >
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                                </a>

                                '.csrf_field().'
                                '.method_field("DELETE").'

                                <button type="submit" class="btn btn-danger">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2 62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17z"/>
                                    </svg>
                                    </svg>
                                </button>
                            </form>
                            ';
                        } else {
                            $btn = '
                            <form action="packages/'.$row->id.'" method="POST">
    
                                <a class="btn btn-info" href="packages/'.$row->id.'" >
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                        <style>svg{fill:#ffffff}</style>
                                        <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/>
                                    </svg>
                                </svg>
                                </a>
    
                                <a class="btn btn-primary" href="packages/'.$row->id.'/edit" >
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                                </a>
    
                                '.csrf_field().'
                                '.method_field("DELETE").'
    
                                <button type="submit" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                                </svg>
                                </button>
                            </form>
                            ';
                        }

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('scaffolds.packages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coys = Coy::select('coy_id', 'coy_name')->get();
        return view('scaffolds.packages.create', compact('coys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coy_id' => 'required|string',
            'pkg_code' => 'required|string',
            'pkg_name' => 'required|string',
            'pkg_desc' => 'required|string',
            'pkg_price' => 'required|string',
            'pkg_price_limit' => 'required|string',
            'pkg_price_agent' => 'required|string',
            'pkg_start' => 'required|date|before:pkg_closed',
            'pkg_closed' => 'required|date|after:pkg_start',
            'pkg_image' => 'required|image|file',
            'pkg_is_display' => 'required|string',
            'dtl_sq_no' => 'required|string',
            'dtl_desc' => 'required|string',
            'dtl_price' => 'required|string',
            'pkg_status' => 'required|string',
        ]);

        $pkg_price = str_replace('.', '', $request->pkg_price);
        $pkg_price_limit = str_replace('.', '', $request->pkg_price_limit);
        $pkg_price_agent = str_replace('.', '', $request->pkg_price_agent);
        $dtl_price = str_replace('.', '', $request->dtl_price);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $request->file('pkg_image')->move(storage_path('pkg/pkg-img'), 'pkg_image-' . Carbon::now()->format('yyyy_dd_mm'));
            Package::create([
                'coy_id' => $request->coy_id,
                'pkg_code' => $request->pkg_code,
                'pkg_name' => $request->pkg_name,
                'pkg_desc' => $request->pkg_desc,
                'pkg_price' => $pkg_price,
                'pkg_price_limit' => $pkg_price_limit,
                'pkg_price_agent' => $pkg_price_agent,
                'pkg_start' => $request->pkg_start,
                'pkg_closed' => $request->pkg_closed,
                'pkg_image' => 'pkg_image-' . Carbon::now()->format('yyyy_dd_mm'),
                'pkg_status' => $request->pkg_status,
                'pkg_is_display' => $request->pkg_is_display,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);
            PackageDetail::create([
                'coy_id' => $request->coy_id,
                'pkg_code' => $request->pkg_code,
                'dtl_sq_no' => $request->dtl_sq_no,
                'dtl_desc' => $request->dtl_desc,
                'dtl_price' => $dtl_price,
                'pkg_status' => $request->pkg_status,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('packages.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($package)
    {
        $data = Package::join('appl_trn_pkg_dtls', 'appl_trn_pkg.pkg_code', '=', 'appl_trn_pkg_dtls.pkg_code')
        ->select('appl_trn_pkg.coy_id', 'appl_trn_pkg.id', 'appl_trn_pkg.pkg_code', 'appl_trn_pkg.pkg_name', 'appl_trn_pkg.pkg_desc', 'appl_trn_pkg.pkg_price', 'appl_trn_pkg.pkg_price_limit', 'appl_trn_pkg.pkg_price_agent', 'appl_trn_pkg.pkg_start', 'appl_trn_pkg.pkg_closed', 'appl_trn_pkg.pkg_image', 'appl_trn_pkg.pkg_is_display', 'appl_trn_pkg_dtls.dtl_sq_no', 'appl_trn_pkg_dtls.dtl_desc', 'appl_trn_pkg_dtls.dtl_price', 'appl_trn_pkg_dtls.pkg_status', 'appl_trn_pkg.created_by', 'appl_trn_pkg.updated_by', 'appl_trn_pkg.created_at', 'appl_trn_pkg.updated_at')
        ->first();
        return view('scaffolds.packages.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($package)
    {
        $data = Package::join('appl_trn_pkg_dtls', 'appl_trn_pkg.pkg_code', '=', 'appl_trn_pkg_dtls.pkg_code')
        ->select('appl_trn_pkg.coy_id', 'appl_trn_pkg.id', 'appl_trn_pkg.pkg_code', 'appl_trn_pkg.pkg_name', 'appl_trn_pkg.pkg_desc', 'appl_trn_pkg.pkg_price', 'appl_trn_pkg.pkg_price_limit', 'appl_trn_pkg.pkg_price_agent', 'appl_trn_pkg.pkg_start', 'appl_trn_pkg.pkg_closed', 'appl_trn_pkg.pkg_image', 'appl_trn_pkg.pkg_is_display', 'appl_trn_pkg_dtls.dtl_sq_no', 'appl_trn_pkg_dtls.dtl_desc', 'appl_trn_pkg_dtls.dtl_price', 'appl_trn_pkg_dtls.pkg_status', 'appl_trn_pkg.created_by', 'appl_trn_pkg.updated_by', 'appl_trn_pkg.created_at', 'appl_trn_pkg.updated_at')
        ->first();
        $coys = Coy::select('coy_id', 'coy_name')->get();
        return view('scaffolds.packages.edit', compact('data', 'coys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $package)
    {
        $validator = Validator::make($request->all(), [
            'coy_id' => 'required|string',
            'pkg_code' => 'required|string',
            'pkg_name' => 'required|string',
            'pkg_desc' => 'required|string',
            'pkg_price' => 'required|string',
            'pkg_price_limit' => 'required|string',
            'pkg_price_agent' => 'required|string',
            'pkg_start' => 'required|date|before:pkg_closed',
            'pkg_closed' => 'required|date|after:pkg_start',
            'pkg_image' => 'image|file',
            'pkg_is_display' => 'required|string',
            'dtl_sq_no' => 'required|string',
            'dtl_desc' => 'required|string',
            'dtl_price' => 'required|string',
            'pkg_status' => 'required|string',
        ]);

        $pkg_price = str_replace('.', '', $request->pkg_price);
        $pkg_price_limit = str_replace('.', '', $request->pkg_price_limit);
        $pkg_price_agent = str_replace('.', '', $request->pkg_price_agent);
        $dtl_price = str_replace('.', '', $request->dtl_price);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            if ($request->file('pkg_image')) {
                unlink(storage_path('pkg/pkg-img/' . $request->old_pkg_image));
                $request->file('pkg_image')->move(storage_path('pkg/pkg-img'), 'pkg_image-' . Carbon::now()->format('yyyy_dd_mm'));
                $package->update(['pkg_image' => 'pkg_image-' . Carbon::now()->format('yyyy_dd_mm')]);
            }

            Package::where('id', $package)
            ->update([
                'pkg_code' => $request->pkg_code,
                'pkg_name' => $request->pkg_name,
                'pkg_desc' => $request->pkg_desc,
                'pkg_price' => $pkg_price,
                'pkg_price_limit' => $pkg_price_limit,
                'pkg_price_agent' => $pkg_price_agent,
                'pkg_start' => $request->pkg_start,
                'pkg_closed' => $request->pkg_closed,
                'pkg_status' => $request->pkg_status,
                'pkg_is_display' => $request->pkg_is_display,
                'updated_by' => Auth::user()->name,
            ]);
            PackageDetail::where('id', $package)
            ->update([
                'pkg_code' => $request->pkg_code,
                'dtl_sq_no' => $request->dtl_sq_no,
                'dtl_desc' => $request->dtl_desc,
                'dtl_price' => $dtl_price,
                'pkg_status' => $request->pkg_status,
                'pkg_is_display' => $request->pkg_is_display,
                'updated_by' => Auth::user()->name,
            ]);
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('packages.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        if ($package->pkg_is_display == 1) {
            $package->update([
                'pkg_is_display' => 0
            ]);
        } else {
            $package->update([
                'pkg_is_display' => 1
            ]);
        }

        return redirect()->route('packages.index');
    }
}
