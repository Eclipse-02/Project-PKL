<?php

namespace App\Http\Controllers\Master;

use Carbon\Carbon;
use App\Models\Master\Branch;
use App\Models\Master\Employee;
use App\Models\Master\Position;
use App\Models\Master\Provinsi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $positions = Position::select('poss_code', 'poss_name')->where('coy_id', Auth::user()->coy_id)->get();
        $branches = Branch::select('branch_code', 'branch_name')->where('coy_id', Auth::user()->coy_id)->get();
        $employees = Employee::select('empl_id', 'empl_name')->where('coy_id', Auth::user()->coy_id)->get();
        $provinsis = Provinsi::select('prov_code', 'provinsi')->get();
        if ($request->ajax()) {
            $data = Employee::with(['branch', 'up', 'position', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'zip'])->where('coy_id', Auth::user()->coy_id)->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = '
                        <form action="employees/'.$row->id.'" method="POST" class="text-center">

                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-md me-1" href="employees/'.$row->id.'" >
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
                                    <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
                                    </svg></span>
                                    <!--end::Svg Icon-->
                                </a>

                                <a class="btn btn-icon btn-bg-light btn-active-color-warning btn-md me-1" href="employees/'.$row->id.'/edit" >
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen055.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black"/>
                                    <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black"/>
                                    <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black"/>
                                    </svg></span>
                                    <!--end::Svg Icon-->
                                </a>

                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <input type="hidden" id="swal_name_val" value="'.$row->empl_name.'">

                                <button type="submit" class="swal-delete btn btn-icon btn-bg-light btn-active-color-danger btn-md me-1">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
                                    </svg></span>
                                    <!--end::Svg Icon-->
                                </button>
                            </form>
                        ';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('scaffolds.master.employees.index', compact('positions', 'branches', 'provinsis', 'employees'));
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
            'empl_id' => 'required|string|unique:employees,empl_id',
            'empl_branch' => 'required|string',
            'empl_nik' => 'required|string',
            'empl_name' => 'required|string',
            'position_code' => 'required|string',
            'empl_status' => 'required|string',
            'empl_eff_date' => 'required|string',
            'empl_email' => 'required|string',
            'empl_addr' => 'required|string',
            'empl_tlp_area' => 'required|string',
            'empl_tlp' => 'required|string',
            'empl_hp01' => 'required|string',
            'empl_hp02' => 'required|string',
            'prov_code' => 'required|string',
            'kota_code' => 'required|string',
            'kec_code' => 'required|string',
            'kel_code' => 'required|string',
            'zip_code' => 'required|string',
        ]);

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Employee::create([
                'coy_id' => Auth::user()->coy_id,
                'empl_id' => $request->empl_id,
                'empl_branch' => $request->empl_branch,
                'empl_nik' => $request->empl_nik,
                'empl_name' => $request->empl_name,
                'position_code' => $request->position_code,
                'empl_up_level' => $request->empl_up_level,
                'empl_status' => $request->empl_status,
                'empl_eff_date' => Carbon::parse($request->empl_eff_date)->format('Y-m-d'),
                'empl_email' => $request->empl_email,
                'empl_addr' => $request->empl_addr,
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
            Alert::toast('Data Berhasil Dibuat!', 'success');
            return redirect()->route('employees.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($employee)
    {
        $data = Employee::where([
            ['id', '=', $employee],
            ['coy_id', '=', Auth::user()->coy_id],
        ])->first();

        if (!$data) {
            Alert::toast('Anda Tidak Memiliki Akses Untuk Melihat Data Ini!', 'error');
            return redirect()->back();
        }
        return view('scaffolds.master.employees.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($employee)
    {
        $data = Employee::where([
            ['id', '=', $employee],
            ['coy_id', '=', Auth::user()->coy_id],
        ])->first();
        $positions = Position::select('poss_code', 'poss_name')->where('coy_id', Auth::user()->coy_id)->get();
        $branches = Branch::select('branch_code', 'branch_name')->where('coy_id', Auth::user()->coy_id)->get();
        $employees = Employee::select('empl_id', 'empl_name')->where('coy_id', Auth::user()->coy_id)->get();
        $provinsis = Provinsi::select('prov_code', 'provinsi')->get();

        if (!$data) {
            Alert::toast('Anda Tidak Memiliki Akses Untuk Melihat Data Ini!', 'error');
            return redirect()->back();
        }
        return view('scaffolds.master.employees.edit', compact('data', 'positions', 'branches', 'employees', 'provinsis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validator = Validator::make($request->all(), [
            'empl_branch' => 'required|string',
            'empl_nik' => 'required|string',
            'empl_name' => 'required|string',
            'position_code' => 'required|string',
            'empl_status' => 'required|string',
            'empl_eff_date' => 'required|string',
            'empl_email' => 'required|string',
            'empl_addr' => 'required|string',
            'empl_tlp_area' => 'required|string',
            'empl_tlp' => 'required|string',
            'empl_hp01' => 'required|string',
            'empl_hp02' => 'required|string',
            'prov_code' => 'required|string',
            'kota_code' => 'required|string',
            'kec_code' => 'required|string',
            'kel_code' => 'required|string',
            'zip_code' => 'required|string',
        ]);

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $employee->update([
                'empl_branch' => $request->empl_branch,
                'empl_nik' => $request->empl_nik,
                'empl_name' => $request->empl_name,
                'position_code' => $request->position_code,
                'empl_up_level' => $request->empl_up_level,
                'empl_status' => $request->empl_status,
                'empl_eff_date' => Carbon::parse($request->empl_eff_date)->format('Y-m-d'),
                'empl_email' => $request->empl_email,
                'empl_addr' => $request->empl_addr,
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
            Alert::toast('Data Berhasil Diperbarui!', 'success');
            return redirect()->route('employees.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        Alert::toast('Status Data Berhasil Dihapus!', 'success');
        return redirect()->route('employees.index');
    }
}
