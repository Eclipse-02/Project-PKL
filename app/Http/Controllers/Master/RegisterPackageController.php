<?php

namespace App\Http\Controllers\Master;

use Carbon\Carbon;
use App\Events\Utils;
use App\Models\Master\Edu;
use App\Models\Master\Job;
use App\Models\Master\Country;
use App\Models\Master\Package;
use App\Models\Master\Utility;
use App\Models\Master\Vaccine;
use App\Models\Master\Provinsi;
use App\Models\Master\Relation;
use App\Models\Master\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Exports\RegisterPackageExport;
use App\Models\Master\RegisterPackage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class RegisterPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (Auth::user()->hasRole('office')) {
            $provinsis = Provinsi::where('is_active', 'Y')->select('prov_code', 'provinsi')->get();
            $packages = Package::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['pkg_is_display', '=', 'Y'],
            ])->select('pkg_code', 'pkg_name')->get();
            $countries = Country::where('is_active', 'Y')->select('con_code', 'con_name')->get();
            $edus = Edu::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['is_active', '=', 'Y'],
            ])->select('edu_code', 'edu_name')->get();
            $jobs = Job::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['is_active', '=', 'Y'],
            ])->select('job_code', 'job_name')->get();
            $relations = Relation::where('is_active', 'Y')->select('rel_code', 'rel_name')->get();
            $suppliers = Supplier::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['is_active', '=', 'Y'],
            ])->select('supl_code', 'supl_name')->get();
            $vaccines = Vaccine::where('is_active', 'Y')->select('vc_code', 'vc_name')->get();
            $utilities = Utility::where([['coy_id', Auth::user()->coy_id],['branch_code', Auth::user()->empl_branch]])->first();

            if ($request->ajax()) {
                $data = RegisterPackage::select('*')->whereBetween('appl_date', [$request->from_date, $request->to_date])->get();
                return DataTables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){

                            if ($row->appl_st == 'NW') {
                                $btn = '
                                <form action="registerpackages/'.$row->id.'" method="POST" class="text-center">

                                    <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-md me-1" href="registerpackages/'.$row->id.'" >
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                        <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
                                        <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
                                        </svg></span>
                                        <!--end::Svg Icon-->
                                    </a>

                                    <a class="btn btn-icon btn-bg-light btn-active-color-warning btn-md me-1" href="registerpackages/'.$row->id.'/edit" >
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
                            } else if ($row->appl_st == 'AC') {
                                $btn = '
                                <form action="registerpackages/'.$row->id.'" method="POST" class="text-center">
        
                                    <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-md me-1" href="registerpackages/'.$row->id.'" >
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
                                    <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-md me-1" href="registerpackages/'.$row->id.'" >
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
            return view('scaffolds.master.registerpackages.index', compact('provinsis', 'packages', 'countries', 'edus', 'jobs', 'relations', 'suppliers', 'vaccines', 'utilities'));
        } else {
            $data = Package::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['pkg_is_display', '=', 'Y'],
            ])->select('pkg_code', 'pkg_name', 'pkg_price', 'pkg_desc', 'pkg_image')->get();
            $provinsis = Provinsi::where('is_active', 'Y')->select('prov_code', 'provinsi')->get();
            $countries = Country::where('is_active', 'Y')->select('con_code', 'con_name')->get();
            $edus = Edu::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['is_active', '=', 'Y'],
            ])->select('edu_code', 'edu_name')->get();
            $jobs = Job::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['is_active', '=', 'Y'],
            ])->select('job_code', 'job_name')->get();
            $relations = Relation::where('is_active', 'Y')->select('rel_code', 'rel_name')->get();
            $suppliers = Supplier::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['is_active', '=', 'Y'],
            ])->select('supl_code', 'supl_name')->get();
            $vaccines = Vaccine::where('is_active', 'Y')->select('vc_code', 'vc_name')->get();
            $utilities = Utility::where([['coy_id', Auth::user()->coy_id],['branch_code', Auth::user()->empl_branch]])->first();

            return view('scaffolds.master.registerpackages.index', compact('provinsis', 'data', 'countries', 'edus', 'jobs', 'relations', 'suppliers', 'vaccines', 'utilities'));
        }
    }

    public function export(Request $request)
    {
        $date = Carbon::createFromFormat('Y-m-d', $request->start_date)->format('j F Y');
        return (new RegisterPackageExport($request->start_date, $request->end_date))->download('Data Utama Jamaah Umroh '. $date .'.xlsx');
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
            'appl_id_type' => 'required',
            'appl_id_no' => 'required',
            'appl_pass_no' => 'required',
            'appl_pass_name' => 'required',
            'appl_pass_iss_date' => 'required',
            'appl_pass_exp_date' => 'required',
            'appl_pass_iss_place' => 'required',
        ]);

        $appl_id_no = str_replace('-', '', $request->appl_id_no);

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            event(new Utils(Auth::user()->coy_id, Auth::user()->empl_branch));

            $new_data = RegisterPackage::create([
                'coy_id' => Auth::user()->coy_id,
                'appl_addr' => $request->appl_addr,
                'appl_st' => $request->submit == 'submit' ? 'NW' : 'AC',
                'appl_posting_date' => $request->appl_posting_date,
                'appl_no' => $request->appl_no,
                'pkg_code' => $request->pkg_code,
                'appl_date' => Carbon::parse($request->appl_birth_date)->format('Y-m-d'),
                'appl_name' => $request->appl_name,
                'appl_gender' => $request->appl_gender,
                'appl_title' => $request->appl_title,
                'appl_id_type' => $request->appl_id_type,
                'appl_id_no' => $appl_id_no,
                'appl_birth_place' => $request->appl_birth_place,
                'appl_birth_date' => Carbon::parse($request->appl_birth_date)->format('Y-m-d'),
                'prov_code' => $request->prov_code,
                'kota_code' => $request->kota_code,
                'kec_code' => $request->kec_code,
                'kel_code' => $request->kel_code,
                'appl_status' => $request->appl_status,
                'con_code' => $request->con_code,
                'edu_code' => $request->edu_code,
                'job_code' => $request->job_code,
                'appl_fth_name' => $request->appl_fth_name,
                'rel_code' => $request->rel_code,
                'appl_mahram' => $request->appl_mahram,
                'appl_pass_no' => $request->appl_pass_no,
                'appl_pass_name' => $request->appl_pass_name,
                'appl_pass_iss_date' => Carbon::parse($request->appl_pass_iss_date)->format('Y-m-d'),
                'appl_pass_exp_date' => Carbon::parse($request->appl_pass_exp_date)->format('Y-m-d'),
                'appl_pass_iss_place' => $request->appl_pass_iss_place,
                'appl_vac_name_id' => $request->appl_vac_name_id, 
                'vc_code_01' => $request->vc_code_01,
                'appl_vac_id_date_01' => Carbon::parse($request->appl_vac_id_date_01)->format('Y-m-d'),
                'vc_code_02' => $request->vc_code_02,
                'appl_vac_id_date_02' => Carbon::parse($request->appl_vac_id_date_02)->format('Y-m-d'),
                'vc_code_03' => $request->vc_code_03,
                'appl_vac_id_date_03' => Carbon::parse($request->appl_vac_id_date_03)->format('Y-m-d'),
                'vc_code_04' => $request->vc_code_04,
                'appl_vac_id_date_04' => Carbon::parse($request->appl_vac_id_date_04)->format('Y-m-d'),
                'appl_tlp' => $request->appl_tlp,
                'appl_email' => $request->appl_email,
                'supl_code' => $request->supl_code,
                'appl_is_img_full' => $request->appl_is_img_full,
                'appl_is_img_half' => $request->appl_is_img_half,
                'appl_is_pass' => $request->appl_is_pass,
                'appl_is_yb' => $request->appl_is_yb,
                'appl_is_copy_id' => $request->appl_is_copy_id,
                'appl_is_copy_kk' => $request->appl_is_copy_kk,
                'appl_is_copy_pass' => $request->appl_is_copy_pass,
                'appl_is_copy_akta_n' => $request->appl_is_copy_akta_n,
                'appl_is_copy_akta_l' => $request->appl_is_copy_akta_l,
                'appl_posting_date' => $request->submit == 'submit' ? '' : Carbon::now(),
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);

            if ($request->file('appl_is_img_full_name')) {
                $request->file('appl_is_img_full_name')->move(storage_path('app/public/reg/full-name'), 'full_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_img_full_name' => 'full_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_img_half_name')) {
                $request->file('appl_is_img_half_name')->move(storage_path('app/public/reg/half-name'), 'half_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_img_half_name' => 'half_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_pass_name')) {
                $request->file('appl_is_pass_name')->move(storage_path('app/public/reg/pass-name'), 'pass_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_pass_name' => 'pass_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_copy_pass_name')) {
                $request->file('appl_is_copy_pass_name')->move(storage_path('app/public/reg/copy-pass-name'), 'copy_pass_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_copy_pass_name' => 'copy_pass_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_yb_name')) {
                $request->file('appl_is_yb_name')->move(storage_path('app/public/reg/yb-name'), 'yb_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_yb_name' => 'yb_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_id_name')) {
                $request->file('appl_is_id_name')->move(storage_path('app/public/reg/id-name'), 'id_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_id_name' => 'id_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_kk_name')) {
                $request->file('appl_is_kk_name')->move(storage_path('app/public/reg/kk-name'), 'kk_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_kk_name' => 'kk_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_akta_n_name')) {
                $request->file('appl_is_akta_n_name')->move(storage_path('app/public/reg/akta-n-name'), 'akta_n_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_akta_n_name' => 'akta_n_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_akta_l_name')) {
                $request->file('appl_is_akta_l_name')->move(storage_path('app/public/reg/akta-l-name'), 'akta_l_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_akta_l_name' => 'akta_l_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            Alert::toast('Data Berhasil Dibuat!', 'success');
            if (Auth::user()->hasRole('agen')) {
                return redirect()->route('agen.registerpackages.index');
            } else {
                return redirect()->route('registerpackages.index');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($registerPackage)
    {
        $data = RegisterPackage::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['id', '=', $registerPackage]
        ])->first();
        return view('scaffolds.master.registerpackages.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($registerPackage)
    {
        if (RegisterPackage::where('id', $registerPackage)->select('appl_st')->first()->appl_st == 'NW') {
            $data = RegisterPackage::where([
                ['coy_id', '=', Auth::user()->coy_id],
                ['id', '=', $registerPackage]
            ])->first();
            $provinsis = Provinsi::select('prov_code', 'provinsi')->get();
            $packages = Package::select('pkg_code', 'pkg_name')->get();
            $countries = Country::select('con_code', 'con_name')->get();
            $edus = Edu::select('edu_code', 'edu_name')->get();
            $jobs = Job::select('job_code', 'job_name')->get();
            $relations = Relation::select('rel_code', 'rel_name')->get();
            $suppliers = Supplier::select('supl_code', 'supl_name')->get();
            $vaccines = Vaccine::select('vc_code', 'vc_name')->get();
            return view('scaffolds.master.registerpackages.edit', compact('data', 'provinsis', 'packages', 'countries', 'edus', 'jobs', 'relations', 'suppliers', 'vaccines'));
        } else {
            Alert::toast('Data ini Sudah Diposting!', 'error');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegisterPackage $registerPackage)
    {
        $validator = Validator::make($request->all(), [
            'appl_id_type' => 'required',
            'appl_id_no' => 'required',
            'appl_pass_no' => 'required',
            'appl_pass_name' => 'required',
            'appl_pass_iss_date' => 'required',
            'appl_pass_exp_date' => 'required',
            'appl_pass_iss_place' => 'required',
        ]);

        $appl_id_no = str_replace('-', '', $request->appl_id_no);

        if($request->appl_st == 'New') {
            if ($request->action == 'submit') {
                $appl_st = 'NW';
            } else {
                $appl_st = 'AC';
            }
        } else {
            $appl_st = 'AC';
        }

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $seqn = sprintf("%08d", Utility::select('last_value')->where([['coy_id', Auth::user()->coy_id],['empl_branch', Auth::user()->branch_code]])->first());
            $appl_no = Auth::user()->empl_branch + 'ORD' + Carbon::now()->format('y') + $seqn;
            $registerPackage->update([
                'appl_addr' => $request->appl_addr,
                'appl_st' => $appl_st,
                'appl_posting_date' => $request->appl_posting_date,
                'appl_no' => $appl_no,
                'pkg_code' => $request->pkg_code,
                'appl_date' => Carbon::parse($request->appl_birth_date)->format('Y-m-d'),
                'appl_name' => $request->appl_name,
                'appl_gender' => $request->appl_gender,
                'appl_title' => $request->appl_title,
                'appl_id_type' => $request->appl_id_type,
                'appl_id_no' => $appl_id_no,
                'appl_birth_place' => $request->appl_birth_place,
                'appl_birth_date' => Carbon::parse($request->appl_birth_date)->format('Y-m-d'),
                'prov_code' => $request->prov_code,
                'kota_code' => $request->kota_code,
                'kec_code' => $request->kec_code,
                'kel_code' => $request->kel_code,
                'appl_status' => $request->appl_status,
                'con_code' => $request->con_code,
                'edu_code' => $request->edu_code,
                'job_code' => $request->job_code,
                'appl_fth_name' => $request->appl_fth_name,
                'rel_code' => $request->rel_code,
                'appl_mahram' => $request->appl_mahram,
                'appl_pass_no' => $request->appl_pass_no,
                'appl_pass_name' => $request->appl_pass_name,
                'appl_pass_iss_date' => Carbon::parse($request->appl_pass_iss_date)->format('Y-m-d'),
                'appl_pass_exp_date' => Carbon::parse($request->appl_pass_exp_date)->format('Y-m-d'),
                'appl_pass_iss_place' => $request->appl_pass_iss_place,
                'appl_vac_name_id' => $request->appl_vac_name_id, 
                'vc_code_01' => $request->vc_code_01,
                'appl_vac_id_date_01' => Carbon::parse($request->appl_vac_id_date_01)->format('Y-m-d'),
                'vc_code_02' => $request->vc_code_02,
                'appl_vac_id_date_02' => Carbon::parse($request->appl_vac_id_date_02)->format('Y-m-d'),
                'vc_code_03' => $request->vc_code_03,
                'appl_vac_id_date_03' => Carbon::parse($request->appl_vac_id_date_03)->format('Y-m-d'),
                'vc_code_04' => $request->vc_code_04,
                'appl_vac_id_date_04' => Carbon::parse($request->appl_vac_id_date_04)->format('Y-m-d'),
                'appl_tlp' => $request->appl_tlp,
                'appl_email' => $request->appl_email,
                'supl_code' => $request->supl_code,
                'appl_is_img_full' => $request->appl_is_img_full,
                'appl_is_img_half' => $request->appl_is_img_half,
                'appl_is_pass' => $request->appl_is_pass,
                'appl_is_yb' => $request->appl_is_yb,
                'appl_is_copy_id' => $request->appl_is_copy_id,
                'appl_is_copy_kk' => $request->appl_is_copy_kk,
                'appl_is_copy_pass' => $request->appl_is_copy_pass,
                'appl_is_copy_akta_n' => $request->appl_is_copy_akta_n,
                'appl_is_copy_akta_l' => $request->appl_is_copy_akta_l,
                'appl_posting_date' => $request->action == 'submit' ? '' : Carbon::now(),
                'updated_by' => Auth::user()->name,
            ]);
            if ($request->file('appl_is_img_full_name')) {
                if ($request->old_appl_is_img_full_name) {
                    Storage::delete('public/reg/full-name/' . $request->old_appl_is_img_full_name);
                }
                $request->file('appl_is_img_full_name')->move(storage_path('app/public/reg/full-name'), 'full_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $registerPackage->update(['appl_is_img_full_name' => 'full_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_img_half_name')) {
                if ($request->old_appl_is_img_half_name) {
                    Storage::delete('public/reg/half-name/' . $request->old_appl_is_img_half_name);
                }
                $request->file('appl_is_img_half_name')->move(storage_path('app/public/reg/half-name'), 'half_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $registerPackage->update(['appl_is_img_half_name' => 'half_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_pass_name')) {
                if ($request->old_appl_is_pass_name) {
                    Storage::delete('public/reg/pass-name/' . $request->old_appl_is_pass_name);
                }
                $request->file('appl_is_pass_name')->move(storage_path('app/public/reg/pass-name'), 'pass_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $registerPackage->update(['appl_is_pass_name' => 'pass_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_copy_pass_name')) {
                if ($request->old_appl_is_copy_pass_name) {
                    Storage::delete('public/reg/copy-pass-name/' . $request->old_appl_is_copy_pass_name);
                }
                unlink(storage_path('app/public/reg/copy-pass-name/' . $request->old_appl_is_copy_pass_name));
                $request->file('appl_is_copy_pass_name')->move(storage_path('app/public/reg/copy-pass-name'), 'copy_pass_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $registerPackage->update(['appl_is_copy_pass_name' => 'copy_pass_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_yb_name')) {
                if ($request->old_appl_is_yb_name) {
                    Storage::delete('public/reg/yb-name/' . $request->old_appl_is_yb_name);
                }
                unlink(storage_path('app/public/reg/yb-name/' . $request->old_appl_is_yb_name));
                $request->file('appl_is_yb_name')->move(storage_path('app/public/reg/yb-name'), 'yb_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $registerPackage->update(['appl_is_yb_name' => 'yb_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_id_name')) {
                if ($request->old_appl_is_id_name) {
                    Storage::delete('public/reg/id-name/' . $request->old_appl_is_id_name);
                }
                unlink(storage_path('app/public/reg/id-name/' . $request->old_appl_is_id_name));
                $request->file('appl_is_id_name')->move(storage_path('app/public/reg/id-name'), 'id_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $registerPackage->update(['appl_is_id_name' => 'id_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_kk_name')) {
                if ($request->old_appl_is_kk_name) {
                    Storage::delete('public/reg/kk-name/' . $request->old_appl_is_kk_name);
                }
                unlink(storage_path('app/public/reg/kk-name/' . $request->old_appl_is_kk_name));
                $request->file('appl_is_kk_name')->move(storage_path('app/public/reg/kk-name'), 'kk_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $registerPackage->update(['appl_is_kk_name' => 'kk_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_akta_n_name')) {
                if ($request->old_appl_is_akta_n_name) {
                    Storage::delete('public/reg/akta-n-name/' . $request->old_appl_is_akta_n_name);
                }
                unlink(storage_path('app/public/reg/akta-n-name/' . $request->old_appl_is_akta_n_name));
                $request->file('appl_is_akta_n_name')->move(storage_path('app/public/reg/akta-n-name'), 'akta_n_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $registerPackage->update(['appl_is_akta_n_name' => 'akta_n_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            if ($request->file('appl_is_akta_l_name')) {
                if ($request->old_appl_is_akta_l_name) {
                    Storage::delete('public/reg/akta-l-name/' . $request->old_appl_is_akta_l_name);
                }
                unlink(storage_path('app/public/reg/akta-l-name/' . $request->old_appl_is_akta_l_name));
                $request->file('appl_is_akta_l_name')->move(storage_path('app/public/reg/akta-l-name'), 'akta_l_name-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $registerPackage->update(['appl_is_akta_l_name' => 'akta_l_name-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }
            Alert::toast('Data Berhasil Diperbarui!', 'success');
            if (Auth::user()->hasRole('agen')) {
                return redirect()->route('agen.registerpackages.index');
            } else {
                return redirect()->route('registerpackages.index');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegisterPackage $registerPackage)
    {
        $registerPackage->update([
            'appl_st' => 'CL'
        ]);

        Alert::toast('Status Data Berhasil Diperbarui!', 'success');
        return redirect()->route('registerpackages.index');
    }

    function api($code) {
        $data = Package::with('details')
            ->where([
                ['pkg_code', '=', $code],
                ['coy_id', '=', auth()->user()->coy_id]
            ])->select('pkg_name', 'pkg_code')
            ->first();

        return response()->json($data);
    }

    function utilApi($coy_id, $empl_branch) {
        $data = Utility::where([['coy_id', $coy_id],['branch_code', $empl_branch]])->first();

        return response()->json($data);
    }
}
