<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Master\Coy;
use App\Models\Master\Zip;
use App\Models\Master\Branch;
use App\Models\Master\Position;
use App\Models\Master\Supplier;
use App\Models\Master\SupplierSubType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Supplier::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        if ($row->is_active == 1) {
                            $btn = '
                            <form action="suppliers/'.$row->id.'" method="POST">

                                <a class="btn btn-info" href="suppliers/'.$row->id.'" >
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                        <style>svg{fill:#ffffff}</style>
                                        <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/>
                                    </svg>
                                </svg>
                                </a>

                                <a class="btn btn-primary" href="suppliers/'.$row->id.'/edit" >
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
                            <form action="suppliers/'.$row->id.'" method="POST">
    
                                <a class="btn btn-info" href="suppliers/'.$row->id.'" >
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                        <style>svg{fill:#ffffff}</style>
                                        <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/>
                                    </svg>
                                </svg>
                                </a>
    
                                <a class="btn btn-primary" href="suppliers/'.$row->id.'/edit" >
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
        return view('scaffolds.suppliers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branchs = Branch::select('branch_code', 'branch_name')->get();
        $supplierSubTypes = SupplierSubType::select('sub_code', 'sub_name')->get();
        $poss = Position::select('poss_code', 'poss_name')->get();
        $zips = Zip::select('zip_code', 'zip_desc')->get();
        $coys = Coy::select('coy_id', 'coy_name')->get();
        return view('scaffolds.suppliers.create', compact('branchs', 'supplierSubTypes', 'poss', 'zips', 'coys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coy_id' => 'required|integer',
            'supl_code' => 'required|string',
            'branch_code' => 'required|string',
            'is_active' => 'required|string',
            'supl_name' => 'required|string',
            'supl_type' => 'required|string',
            'supl_sub_type' => 'required|string',
            'supl_pic_name' => 'required|image|file',
            'poss_code' => 'required|string',
            'supl_id_no' => 'required|string',
            'supl_addr' => 'required|string',
            'supl_tlp_area' => 'required|string',
            'supl_tlp' => 'required|string',
            'supl_hp01' => 'required|string',
            'supl_hp02' => 'required|string',
            'prov_code' => 'required|string',
            'kota_code' => 'required|string',
            'kec_code' => 'required|string',
            'kel_code' => 'required|string',
            'zip_code' => 'required|string',
            'supl_npwp_no' => 'required|string',
            'supl_npwp_name' => 'required|string',
            'supl_npwp_addr' => 'required|string',
            'supl_desc' => 'required|string',
            'file_name_mou' => 'required|image|file',
            'file_name_ktp' => 'required|image|file',
            'file_name_npwp' => 'required|image|file',
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $request->file('supl_pic_name')->move(storage_path('supl/files/supl-img'), 'supl_pic_name-' . Carbon::now()->format('yyyy_dd_mm'));
            $request->file('file_name_mou')->move(storage_path('supl/files/mous'), 'file_name_mou-' . Carbon::now()->format('yyyy_dd_mm'));
            $request->file('file_name_ktp')->move(storage_path('supl/files/ktps'), 'file_name_ktp-' . Carbon::now()->format('yyyy_dd_mm'));
            $request->file('file_name_npwp')->move(storage_path('supl/files/npwps'), 'file_name_npwp-' . Carbon::now()->format('yyyy_dd_mm'));
            Supplier::create([
                'coy_id' => $request->coy_id,
                'supl_code' => $request->supl_code,
                'branch_code' => $request->branch_code,
                'is_active' => $request->is_active,
                'supl_status' => 'NW',
                'supl_name' => $request->supl_name,
                'supl_type' => $request->supl_type,
                'supl_sub_type' => $request->supl_sub_type,
                'supl_pic_name' => 'supl_pic_name-' . Carbon::now()->format('yyyy_dd_mm'),
                'poss_code' => $request->poss_code,
                'supl_id_no' => $request->supl_id_no,
                'supl_addr' => $request->supl_addr,
                'supl_tlp_area' => $request->supl_tlp_area,
                'supl_tlp' => $request->supl_tlp,
                'supl_hp01' => $request->supl_hp01,
                'supl_hp02' => $request->supl_hp02,
                'prov_code' => $request->prov_code,
                'kota_code' => $request->kota_code,
                'kec_code' => $request->kec_code,
                'kel_code' => $request->kel_code,
                'zip_code' => $request->zip_code,
                'supl_npwp_no' => $request->supl_npwp_no,
                'supl_npwp_name' => $request->supl_npwp_name,
                'supl_npwp_addr' => $request->supl_npwp_addr,
                'file_name_mou' => 'file_name_mou-' . Carbon::now()->format('yyyy_dd_mm'),
                'file_name_ktp' => 'file_name_ktp-' . Carbon::now()->format('yyyy_dd_mm'),
                'file_name_npwp' => 'file_name_npwp-' . Carbon::now()->format('yyyy_dd_mm'),
                'supl_desc' => $request->supl_desc,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('suppliers.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($supplier)
    {
        $data = Supplier::where('id', $supplier)->first();
        $branchs = Branch::select('branch_code', 'branch_name')->get();
        $supplierSubTypes = SupplierSubType::select('sub_code', 'sub_name')->get();
        $poss = Position::select('poss_code', 'poss_name')->get();
        $zips = Zip::select('zip_code', 'zip_desc')->get();
        return view('scaffolds.suppliers.view', compact('data', 'branchs', 'supplierSubTypes', 'poss', 'zips'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($supplier)
    {
        $data = Supplier::where('id', $supplier)->first();
        $branchs = Branch::select('branch_code', 'branch_name')->get();
        $supplierSubTypes = SupplierSubType::select('sub_code', 'sub_name')->get();
        $poss = Position::select('poss_code', 'poss_name')->get();
        $zips = Zip::select('zip_code', 'zip_desc')->get();
        $coys = Coy::select('coy_id', 'coy_name')->get();
        return view('scaffolds.suppliers.edit', compact('data', 'branchs', 'supplierSubTypes', 'poss', 'zips', 'coys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $validator = Validator::make($request->all(), [
            'coy_id' => 'required|integer',
            'supl_code' => 'required|string',
            'branch_code' => 'required|string',
            'is_active' => 'required|string',
            'supl_status' => 'required|string',
            'supl_name' => 'required|string',
            'supl_type' => 'required|string',
            'supl_sub_type' => 'required|string',
            'supl_pic_name' => 'image|file',
            'poss_code' => 'required|string',
            'supl_id_no' => 'required|string',
            'supl_addr' => 'required|string',
            'supl_tlp_area' => 'required|string',
            'supl_tlp' => 'required|string',
            'supl_hp01' => 'required|string',
            'supl_hp02' => 'required|string',
            'prov_code' => 'required|string',
            'kota_code' => 'required|string',
            'kec_code' => 'required|string',
            'kel_code' => 'required|string',
            'zip_code' => 'required|string',
            'supl_npwp_no' => 'required|string',
            'supl_npwp_name' => 'required|string',
            'supl_npwp_addr' => 'required|string',
            'supl_desc' => 'required|string',
            'file_name_mou' => 'image|file',
            'file_name_ktp' => 'image|file',
            'file_name_npwp' => 'image|file',
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            if ($request->file('supl_pic_name')) {
                unlink(storage_path('supl/supl-img/' . $request->old_supl_pic_name));
                $request->file('supl_pic_name')->move(storage_path('supl/supl-img'), 'supl_pic_name-' . Carbon::now()->format('yyyy_dd_mm'));
                $supplier->update(['supl_pic_name' => 'supl_pic_name-' . Carbon::now()->format('yyyy_dd_mm')]);
            }
            
            if ($request->file('file_name_mou')) {
                unlink(storage_path('supl/files/mous/' . $request->old_file_name_mou));
                $request->file('file_name_mou')->move(storage_path('supl/files/mous'), 'file_name_mou-' . Carbon::now()->format('yyyy_dd_mm'));
                $supplier->update(['file_name_mou' => 'file_name_mou-' . Carbon::now()->format('yyyy_dd_mm')]);
            }
            
            if ($request->file('file_name_ktp')) {
                unlink(storage_path('supl/files/ktps/' . $request->old_file_name_ktp));
                $request->file('file_name_ktp')->move(storage_path('supl/files/ktps'), 'file_name_ktp-' . Carbon::now()->format('yyyy_dd_mm'));
                $supplier->update(['file_name_ktp' => 'file_name_ktp-' . Carbon::now()->format('yyyy_dd_mm')]);
            }
            
            if ($request->file('file_name_npwp')) {
                unlink(storage_path('supl/files/npwps/' . $request->old_file_name_npwp));
                $request->file('file_name_npwp')->move(storage_path('supl/files/npwps'), 'file_name_npwp-' . Carbon::now()->format('yyyy_dd_mm'));
                $supplier->update(['file_name_npwp' => 'file_name_npwp-' . Carbon::now()->format('yyyy_dd_mm')]);
            }

            $supplier->update([
                'coy_id' => $request->coy_id,
                'supl_code' => $request->supl_code,
                'branch_code' => $request->branch_code,
                'is_active' => $request->is_active,
                'supl_status' => $request->supl_status,
                'supl_name' => $request->supl_name,
                'supl_type' => $request->supl_type,
                'supl_sub_type' => $request->supl_sub_type,
                'poss_code' => $request->poss_code,
                'supl_id_no' => $request->supl_id_no,
                'supl_addr' => $request->supl_addr,
                'supl_tlp_area' => $request->supl_tlp_area,
                'supl_tlp' => $request->supl_tlp,
                'supl_hp01' => $request->supl_hp01,
                'supl_hp02' => $request->supl_hp02,
                'prov_code' => $request->prov_code,
                'kota_code' => $request->kota_code,
                'kec_code' => $request->kec_code,
                'kel_code' => $request->kel_code,
                'zip_code' => $request->zip_code,
                'supl_npwp_no' => $request->supl_npwp_no,
                'supl_npwp_name' => $request->supl_npwp_name,
                'supl_npwp_addr' => $request->supl_npwp_addr,
                'supl_desc' => $request->supl_desc,
                'updated_by' => Auth::user()->name,
            ]);
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('suppliers.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        if ($supplier->is_active == 1) {
            $supplier->update([
                'is_active' => 0
            ]);
        } else {
            $supplier->update([
                'is_active' => 1
            ]);
        }

        return redirect()->route('suppliers.index');
    }
}
