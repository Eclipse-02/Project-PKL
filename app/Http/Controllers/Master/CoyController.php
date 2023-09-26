<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Coy;
use App\Models\Master\Zip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class CoyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Coy::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = '
                        <form onsubmit="return confirm(\'Apakah anda yakin ingin menghapus '.$row->key.' ?\');" action="coys/'.$row->id.'" method="POST">

                            <a class="btn btn-info" href="coys/'.$row->id.'" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                    <style>svg{fill:#ffffff}</style>
                                    <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/>
                                </svg>
                            </svg>
                            </a>

                            <a class="btn btn-primary" href="coys/'.$row->id.'/edit" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            </a>

                            '.csrf_field().'
                            '.method_field("DELETE").'

                            <button type="submit" class="btn btn-danger">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </form>
                        ';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('scaffolds.coys.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zips = Zip::select('zip_code', 'zip_desc')->get();
        return view('scaffolds.coys.create', compact('zips'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coy_id' => 'required|integer',
            'coy_name' => 'required|string',
            'coy_addr' => 'required|string',
            'empl_tlp_area' => 'required|string',
            'empl_tlp' => 'required|integer',
            'empl_hp01' => 'required|integer',
            'empl_hp02' => 'required|integer',
            'prov_code' => 'required|integer',
            'kota_code' => 'required|integer',
            'kec_code' => 'required|integer',
            'kel_code' => 'required|integer',
            'zip_code' => 'required|integer',
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Coy::create([
                'coy_id' => $request->coy_id,
                'coy_name' => $request->coy_name,
                'coy_addr' => $request->coy_addr,
                'empl_tlp_area' => $request->empl_tlp_area,
                'empl_tlp' => $request->empl_tlp,
                'empl_hp01' => $request->empl_hp01,
                'empl_hp02' => $request->empl_hp02,
                'prov_code' => $request->prov_code,
                'kota_code' => $request->kota_code,
                'kec_code' => $request->kec_code,
                'kel_code' => $request->kel_code,
                'zip_code' => $request->zip_code,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('coys.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($coy)
    {
        $data = Coy::where('id', $coy)->first();
        return view('scaffolds.coys.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($coy)
    {
        $zips = Zip::select('zip_code', 'zip_desc')->get();
        $data = Coy::where('id', $coy)->first();
        return view('scaffolds.coys.edit', compact('data', 'zips'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coy $coy)
    {
        $validator = Validator::make($request->all(), [
            'coy_id' => 'required|integer',
            'coy_name' => 'required|string',
            'coy_addr' => 'required|string',
            'empl_tlp_area' => 'required|string',
            'empl_tlp' => 'required|integer',
            'empl_hp01' => 'required|integer',
            'empl_hp02' => 'required|integer',
            'prov_code' => 'required|integer',
            'kota_code' => 'required|integer',
            'kec_code' => 'required|integer',
            'kel_code' => 'required|integer',
            'zip_code' => 'required|integer',
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $coy->update([
                'coy_id' => $request->coy_id,
                'coy_name' => $request->coy_name,
                'coy_addr' => $request->coy_addr,
                'empl_tlp_area' => $request->empl_tlp_area,
                'empl_tlp' => $request->empl_tlp,
                'empl_hp01' => $request->empl_hp01,
                'empl_hp02' => $request->empl_hp02,
                'prov_code' => $request->prov_code,
                'kota_code' => $request->kota_code,
                'kec_code' => $request->kec_code,
                'kel_code' => $request->kel_code,
                'zip_code' => $request->zip_code,
                'updated_by' => Auth::user()->name,
            ]);
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('coys.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coy $coy)
    {
        $coy->delete();

        return redirect()->route('coys.index');
    }
}
