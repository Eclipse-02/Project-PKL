<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Events\Utils;
use Illuminate\Http\Request;
use App\Models\Master\Package;
use Yajra\DataTables\DataTables;
use App\Models\RegisterEventDetail;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\RegisterEventPackage;

class RegisterEventPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $packages = Package::where([
            ['pkg_type', '=', 'E'],
            ['pkg_is_display', '=', 'Y'],
        ])->get();
        if ($request->ajax()) {
            $data = RegisterEventPackage::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        if ($row->evn_status == 'NW') {
                            $btn = '
                            <form action="events/'.$row->id.'" method="POST" class="text-center">

                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-md me-1" href="events/'.$row->id.'" >
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
                                    <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
                                    </svg></span>
                                    <!--end::Svg Icon-->
                                </a>

                                <a class="btn btn-icon btn-bg-light btn-active-color-warning btn-md me-1" href="events/'.$row->id.'/edit" >
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
                                <input type="hidden" id="swal_name_val" value="'.$row->appl_name.'">

                                <button type="submit" class="swal-disable btn btn-icon btn-bg-light btn-active-color-danger btn-md me-1">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black"/>
                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black"/>
                                    </svg></span>
                                    <!--end::Svg Icon-->
                                </button>
                            </form>
                            ';
                        } else if ($row->evn_status == 'AC') {
                            $btn = '
                            <form action="events/'.$row->id.'" method="POST" class="text-center">
    
                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-md me-1" href="events/'.$row->id.'" >
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
                                    <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
                                    </svg></span>
                                    <!--end::Svg Icon-->
                                </a>
    
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <input type="hidden" id="swal_name_val" value="'.$row->appl_name.'">
    
                                <button type="submit" class="swal-enable btn btn-icon btn-bg-light btn-active-color-success btn-md me-1">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen043.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                    </svg></span>
                                    <!--end::Svg Icon-->
                                </button>
                            </form>
                            ';
                        } else {
                            $btn = '
                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-md me-1" href="events/'.$row->id.'" >
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
                                    <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
                                    </svg></span>
                                    <!--end::Svg Icon-->
                                </a>
                            ';
                        }

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('scaffolds.master.invoices.index', compact('packages'));
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
            'pkg_code' => 'required',
            'evn_code' => 'required',
            'evn_status' => 'required',
            'evn_name' => 'required',
            'evn_date' => 'required',
            'evn_addr' => 'required',
            'evn_npwp_no' => 'required',
            'evn_contact' => 'required',
            'evn_tlp_no' => 'required',
            'dtl_qty' => 'required',
        ]);

        
        $evn_npwp_no = str_replace('-', '', $request->evn_npwp_no);
        $evn_tlp_no = str_replace('+62 ', '', $request->evn_tlp_no);

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            event(new Utils(Auth::user()->coy_id, Auth::user()->empl_branch));

            RegisterEventPackage::create([
                'coy_id' => Auth::user()->coy_id,
                'pkg_code' => $request->pkg_code,
                'evn_code' => $request->evn_code,
                'evn_status' => $request->submit == 'submit' ? 'NW' : 'AC',
                'evn_name' => $request->evn_name,
                'evn_date' => Carbon::now()->format('Y-m-d'),
                'evn_addr' => $request->evn_addr,
                'evn_npwp_no' => $evn_npwp_no,
                'evn_contact' => $request->evn_contact,
                'evn_tlp_no' => $evn_tlp_no,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);

            foreach ($request->dtl_desc as $key => $desc) {
                RegisterEventDetail::updateOrCreate([
                    'evn_code' => $request->evn_code,
                    'dtl_sq_no' => $key + 1
                ],
                [
                    'coy_id' => Auth::user()->coy_id,
                    'dtl_desc' => $desc,
                    'dtl_unit_price' => $request->dtl_unit_price[$key],
                    'dtl_price' => $request->dtl_unit_price[$key] * $request->dtl_qty[$key],
                    'dtl_qty' => $request->dtl_qty[$key],
                    'created_by' => Auth::user()->name,
                    'updated_by' => Auth::user()->name,
                ]);
            }

            Alert::toast('Data Berhasil Dibuat!', 'success');
            return redirect()->route('events.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($event)
    {
        $data = RegisterEventPackage::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['id', '=', $event],
        ])->first();
        $details = RegisterEventDetail::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['evn_code', '=', $data->evn_code],
        ]);
        $details_get = $details->get();
        $details_sum = $details->sum('dtl_price');

        return view('scaffolds.master.invoices.view', compact('data', 'details_get', 'details_sum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($event)
    {
        $data = RegisterEventPackage::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['id', '=', $event],
        ])->first();
        $packages = Package::where([
            ['pkg_type', '=', 'E'],
            ['pkg_is_display', '=', 'Y'],
        ])->get();
        $details = RegisterEventDetail::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['evn_code', '=', $data->evn_code],
        ])->get();

        return view('scaffolds.master.invoices.edit', compact('data', 'packages', 'details'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegisterEventPackage $event)
    {
        $validator = Validator::make($request->all(), [
            'evn_status' => 'required',
            'evn_name' => 'required',
            'evn_addr' => 'required',
            'evn_npwp_no' => 'required',
            'evn_contact' => 'required',
            'evn_tlp_no' => 'required',
            'dtl_qty.*' => 'required',
        ]);

        $evn_npwp_no = str_replace('-', '', $request->evn_npwp_no);
        $evn_tlp_no = str_replace('+62 ', '', $request->evn_tlp_no);

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $event->update([
                'evn_status' => $request->evn_status,
                'evn_name' => $request->evn_name,
                'evn_addr' => $request->evn_addr,
                'evn_npwp_no' => $evn_npwp_no,
                'evn_contact' => $request->evn_contact,
                'evn_tlp_no' => $evn_tlp_no,
                'updated_by' => Auth::user()->name,
            ]);

            foreach ($request->dtl_desc as $key => $desc) {
                RegisterEventDetail::updateOrCreate([
                    'evn_code' => $request->evn_code,
                    'dtl_sq_no' => $key + 1
                ],
                [
                    'coy_id' => Auth::user()->coy_id,
                    'dtl_desc' => $desc,
                    'dtl_unit_price' => $request->dtl_unit_price[$key],
                    'dtl_price' => $request->dtl_unit_price[$key] * $request->dtl_qty[$key],
                    'dtl_qty' => $request->dtl_qty[$key],
                    'created_by' => Auth::user()->name,
                    'updated_by' => Auth::user()->name,
                ]);
            }

            Alert::toast('Data Berhasil Diperbarui!', 'success');
            return redirect()->route('events.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegisterEventPackage $event)
    {
        if ($event->evn_status == 'NW') {
            $event->update(['evn_status' => 'AC']);
        } else if ($event->evn_status == 'AC') {
            $event->update(['evn_status' => 'CL']);
        }

        Alert::toast('Data Berhasil Dihapus!', 'success');
        return redirect()->route('events.index');
    }
}
