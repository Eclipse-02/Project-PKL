<?php

namespace App\Http\Controllers;

use App\Events\Utils;
use App\Models\Branch;
use App\Models\Country;
use App\Models\Coy;
use App\Models\Edu;
use App\Models\Job;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\RegisterPackage;
use App\Models\Relation;
use App\Models\Supplier;
use App\Models\Utility;
use App\Models\Vaccine;
use App\Models\Zip;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class RegisterPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = RegisterPackage::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = '
                        <form onsubmit="return confirm(\'Apakah anda yakin ingin menghapus '.$row->name.' ?\');" action="registerpackages/'.$row->id.'" method="POST">

                            <a class="btn btn-info" href="registerpackages/'.$row->id.'" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                    <style>svg{fill:#ffffff}</style>
                                    <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/>
                                </svg>
                            </svg>
                            </a>

                            <a class="btn btn-primary" href="registerpackages/'.$row->id.'/edit" >
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
        return view('scaffolds.registerpackages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coys = Coy::select('coy_id', 'coy_name')->get();
        $zips = Zip::select('zip_code', 'zip_desc')->get();
        $packages = Package::select('pkg_code', 'pkg_name')->get();
        $countries = Country::select('con_code', 'con_name')->get();
        $edus = Edu::select('edu_code', 'edu_name')->get();
        $jobs = Job::select('job_code', 'job_name')->get();
        $branches = Branch::select('branch_code', 'branch_name')->get();
        $relations = Relation::select('rel_code', 'rel_name')->get();
        $suppliers = Supplier::select('supl_code', 'supl_name')->get();
        $vaccines = Vaccine::select('vc_code', 'vc_name')->get();
        return view('scaffolds.registerpackages.create', compact('coys', 'packages', 'countries', 'edus', 'jobs', 'branches', 'relations', 'suppliers', 'vaccines', 'zips'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'coy_id' => 'required',
            // 'pkg_code' => 'required',
            // 'appl_st' => 'required',
            // 'appl_date' => 'required',
            // 'appl_name' => 'required',
            // 'appl_gender' => 'required',
            // 'appl_title' => 'required',
            // 'appl_id_type' => 'required',
            // 'appl_id_no' => 'required',
            // 'appl_birth_place' => 'required',
            // 'prov_code' => 'required',
            // 'kota_code' => 'required',
            // 'kec_code' => 'required',
            // 'kel_code' => 'required',
            // 'zip_code' => 'required',
            // 'appl_status' => 'required',
            // 'con_code' => 'required',
            // 'edu_code' => 'required',
            // 'job_code' => 'required',
            // 'branch_code' => 'required',
            // 'appl_fth_name' => 'required',
            // 'rel_code' => 'required',
            // 'appl_mahram' => 'required',
            // 'appl_pass_no' => 'required',
            // 'appl_pass_name' => 'required',
            // 'appl_pass_iss_date' => 'required',
            // 'appl_pass_exp_date' => 'required',
            // 'appl_pass_iss_palace' => 'required',
            // 'appl_vac_name_id' => 'required', 
            // 'vc_code_01' => 'required',
            // 'appl_vac_id_date_01' => 'required',
            // 'vc_code_02' => 'required',
            // 'appl_vac_id_date_02' => 'required',
            // 'vc_code_03' => 'required',
            // 'appl_vac_id_date_03' => 'required',
            // 'vc_code_04' => 'required',
            // 'appl_vac_id_date_04' => 'required',
            // 'appl_tlp' => 'required',
            // 'appl_email' => 'required',
            // 'appl_is_img_full' => 'required',
            // 'appl_is_img_half' => 'required',
            // 'appl_is_yb' => 'required',
            // 'supl_code' => 'required',
            // 'appl_is_copy_id' => 'required',
            // 'appl_is_copy_kk' => 'required',
            // 'appl_is_copy_pass' => 'required',
            // 'appl_is_copy_akta_n' => 'required',
            // 'appl_is_copy_akta_l' => 'required',
            // 'appl_is_img_full_name' => 'required',
            // 'appl_is_img_half_name' => 'required',
            // 'appl_is_pass_name' => 'required',
            // 'appl_is_yb_name' => 'required',
            // 'appl_is_id_name' => 'required',
            // 'appl_is_kk_name' => 'required',
            // 'appl_is_akta_n_name' => 'required',
            // 'appl_is_akta_l_name' => 'required',
        ]);

        $appl_id_no = str_replace('-', '', $request->appl_id_no);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $db = Utility::where([['coy_id', Auth::user()->coy_id],['branch_code', Auth::user()->empl_branch]])->first();
            event(new Utils(Auth::user()->coy_id, Auth::user()->empl_branch));
            $seqn = sprintf("%08d", $db->last_value);
            
            if ($db->first()->is_cycle == 'Y') {
                $appl_no = Auth::user()->empl_branch . 'ORD' . Carbon::now()->format('y') . $seqn;
            } else if($db->first()->is_cycle == 'M') {
                $appl_no = Auth::user()->empl_branch . 'ORD' . Carbon::now()->format('ym') . $seqn;
            } else {
                $appl_no = Auth::user()->empl_branch . 'ORD' . Carbon::now()->format('ymd') . $seqn;
            }
            $new_data = RegisterPackage::create([
                'coy_id' => $request->coy_id,
                'appl_no' => $appl_no,
                'pkg_code' => $request->pkg_code,
                'appl_st' => $request->appl_st,
                'appl_date' => $request->appl_date,
                'appl_name' => $request->appl_name,
                'appl_gender' => $request->appl_gender,
                'appl_title' => $request->appl_title,
                'appl_id_type' => $request->appl_id_type,
                'appl_id_no' => $appl_id_no,
                'appl_birth_place' => $request->appl_birth_place,
                'prov_code' => $request->prov_code,
                'kota_code' => $request->kota_code,
                'kec_code' => $request->kec_code,
                'kel_code' => $request->kel_code,
                'zip_code' => $request->zip_code,
                'appl_status' => $request->appl_status,
                'con_code' => $request->con_code,
                'edu_code' => $request->edu_code,
                'job_code' => $request->job_code,
                'branch_code' => $request->branch_code,
                'appl_fth_name' => $request->appl_fth_name,
                'rel_code' => $request->rel_code,
                'appl_mahram' => $request->appl_mahram,
                'appl_pass_no' => $request->appl_pass_no,
                'appl_pass_name' => $request->appl_pass_name,
                'appl_pass_iss_date' => $request->appl_pass_iss_date,
                'appl_pass_exp_date' => $request->appl_pass_exp_date,
                'appl_pass_iss_palace' => $request->appl_pass_iss_palace,
                'appl_vac_name_id' => $request->appl_vac_name_id, 
                'vc_code_01' => $request->vc_code_01,
                'appl_vac_id_date_01' => $request->appl_vac_id_date_01,
                'vc_code_02' => $request->vc_code_02,
                'appl_vac_id_date_02' => $request->appl_vac_id_date_02,
                'vc_code_03' => $request->vc_code_03,
                'appl_vac_id_date_03' => $request->appl_vac_id_date_03,
                'vc_code_04' => $request->vc_code_04,
                'appl_vac_id_date_04' => $request->appl_vac_id_date_04,
                'appl_tlp' => $request->appl_tlp,
                'appl_email' => $request->appl_email,
                'appl_is_img_full' => $request->appl_is_img_full,
                'appl_is_img_half' => $request->appl_is_img_half,
                'appl_is_yb' => $request->appl_is_yb,
                'supl_code' => $request->supl_code,
                'appl_is_copy_id' => $request->appl_is_copy_id,
                'appl_is_copy_kk' => $request->appl_is_copy_kk,
                'appl_is_copy_pass' => $request->appl_is_copy_pass,
                'appl_is_copy_akta_n' => $request->appl_is_copy_akta_n,
                'appl_is_copy_akta_l' => $request->appl_is_copy_akta_l,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);

            if ($request->file('appl_is_img_full_name')) {
                $request->file('appl_is_img_full_name')->move(storage_path('reg/full-name'), $request->file('appl_is_img_full_name')->getClientOriginalName());
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_img_full_name' => $request->file('appl_is_img_full_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_img_half_name')) {
                $request->file('appl_is_img_half_name')->move(storage_path('reg/half-name'), $request->file('appl_is_img_half_name')->getClientOriginalName());
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_img_half_name' => $request->file('appl_is_img_half_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_pass_name')) {
                $request->file('appl_is_pass_name')->move(storage_path('reg/pass-name'), $request->file('appl_is_pass_name')->getClientOriginalName());
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_pass_name' => $request->file('appl_is_pass_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_yb_name')) {
                $request->file('appl_is_yb_name')->move(storage_path('reg/yb-name'), $request->file('appl_is_yb_name')->getClientOriginalName());
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_yb_name' => $request->file('appl_is_yb_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_id_name')) {
                $request->file('appl_is_id_name')->move(storage_path('reg/id-name'), $request->file('appl_is_id_name')->getClientOriginalName());
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_id_name' => $request->file('appl_is_id_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_kk_name')) {
                $request->file('appl_is_kk_name')->move(storage_path('reg/kk-name'), $request->file('appl_is_kk_name')->getClientOriginalName());
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_kk_name' => $request->file('appl_is_kk_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_akta_n_name')) {
                $request->file('appl_is_akta_n_name')->move(storage_path('reg/akta-n-name'), $request->file('appl_is_akta_n_name')->getClientOriginalName());
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_akta_n_name' => $request->file('appl_is_akta_n_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_akta_l_name')) {
                $request->file('appl_is_akta_l_name')->move(storage_path('reg/akta-l-name'), $request->file('appl_is_akta_l_name')->getClientOriginalName());
                RegisterPackage::where('id', $new_data->id)->update(['appl_is_akta_l_name' => $request->file('appl_is_akta_l_name')->getClientOriginalName()]);
            }
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('registerpackages.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($registerPackage)
    {
        $data = RegisterPackage::first();
        return view('scaffolds.registerpackages.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($registerPackage)
    {
        $data = RegisterPackage::first();
        $coys = Coy::select('coy_id', 'coy_name')->get();
        $zips = Zip::select('zip_code', 'zip_desc')->get();
        $packages = Package::select('pkg_code', 'pkg_name')->get();
        $countries = Country::select('con_code', 'con_name')->get();
        $edus = Edu::select('edu_code', 'edu_name')->get();
        $jobs = Job::select('job_code', 'job_name')->get();
        $branches = Branch::select('branch_code', 'branch_name')->get();
        $relations = Relation::select('rel_code', 'rel_name')->get();
        $suppliers = Supplier::select('supl_code', 'supl_name')->get();
        $vaccines = Vaccine::select('vc_code', 'vc_name')->get();
        return view('scaffolds.registerpackages.edit', compact('data', 'coys', 'packages', 'countries', 'edus', 'jobs', 'branches', 'relations', 'suppliers', 'vaccines', 'zips'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegisterPackage $registerPackage)
    {
        $validator = Validator::make($request->all(), [
            'coy_id' => 'required',
            'pkg_code' => 'required',
            'appl_st' => 'required',
            'appl_date' => 'required',
            'appl_name' => 'required',
            'appl_gender' => 'required',
            'appl_title' => 'required',
            'appl_id_type' => 'required',
            'appl_id_no' => 'required',
            'appl_birth_place' => 'required',
            'prov_code' => 'required',
            'kota_code' => 'required',
            'kec_code' => 'required',
            'kel_code' => 'required',
            'zip_code' => 'required',
            'appl_status' => 'required',
            'con_code' => 'required',
            'edu_code' => 'required',
            'job_code' => 'required',
            'branch_code' => 'required',
            'appl_fth_name' => 'required',
            'rel_code' => 'required',
            'appl_mahram' => 'required',
            'appl_pass_no' => 'required',
            'appl_pass_name' => 'required',
            'appl_pass_iss_date' => 'required',
            'appl_pass_exp_date' => 'required',
            'appl_pass_iss_palace' => 'required',
            'appl_vac_name_id' => 'required', 
            'vc_code_01' => 'required',
            'appl_vac_id_date_01' => 'required',
            'vc_code_02' => 'required',
            'appl_vac_id_date_02' => 'required',
            'vc_code_03' => 'required',
            'appl_vac_id_date_03' => 'required',
            'vc_code_04' => 'required',
            'appl_vac_id_date_04' => 'required',
            'appl_tlp' => 'required',
            'appl_email' => 'required',
            'appl_is_img_full' => 'required',
            'appl_is_img_half' => 'required',
            'appl_is_yb' => 'required',
            'supl_code' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::toast('Oops, Something Wrong Happened!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $seqn = sprintf("%08d", Utility::select('last_value')->where([['coy_id', Auth::user()->coy_id],['empl_branch', Auth::user()->branch_code]])->first());
            $appl_no = Auth::user()->empl_branch + 'ORD' + Carbon::now()->format('y') + $seqn;
            $registerPackage->update([
                'coy_id' => $request->coy_id,
                'appl_no' => $appl_no,
                'pkg_code' => $request->pkg_code,
                'appl_st' => $request->appl_st,
                'appl_date' => $request->appl_date,
                'appl_name' => $request->appl_name,
                'appl_gender' => $request->appl_gender,
                'appl_title' => $request->appl_title,
                'appl_id_type' => $request->appl_id_type,
                'appl_id_no' => $request->appl_id_no,
                'appl_birth_place' => $request->appl_birth_place,
                'prov_code' => $request->prov_code,
                'kota_code' => $request->kota_code,
                'kec_code' => $request->kec_code,
                'kel_code' => $request->kel_code,
                'zip_code' => $request->zip_code,
                'appl_status' => $request->appl_status,
                'con_code' => $request->con_code,
                'edu_code' => $request->edu_code,
                'job_code' => $request->job_code,
                'branch_code' => $request->branch_code,
                'appl_fth_name' => $request->appl_fth_name,
                'rel_code' => $request->rel_code,
                'appl_mahram' => $request->appl_mahram,
                'appl_pass_no' => $request->appl_pass_no,
                'appl_pass_name' => $request->appl_pass_name,
                'appl_pass_iss_date' => $request->appl_pass_iss_date,
                'appl_pass_exp_date' => $request->appl_pass_exp_date,
                'appl_pass_iss_palace' => $request->appl_pass_iss_palace,
                'appl_vac_name_id' => $request->appl_vac_name_id, 
                'vc_code_01' => $request->vc_code_01,
                'appl_vac_id_date_01' => $request->appl_vac_id_date_01,
                'vc_code_02' => $request->appl_vac_id_date_01,
                'appl_vac_id_date_02' => $request->appl_vac_id_date_02,
                'vc_code_03' => $request->vc_code_03,
                'appl_vac_id_date_03' => $request->appl_vac_id_date_03,
                'vc_code_04' => $request->vc_code_04,
                'appl_vac_id_date_04' => $request->appl_vac_id_date_04,
                'appl_tlp' => $request->appl_tlp,
                'appl_email' => $request->appl_email,
                'appl_is_img_full' => $request->appl_is_img_full,
                'appl_is_img_half' => $request->appl_is_img_half,
                'appl_is_yb' => $request->appl_is_yb,
                'supl_code' => $request->supl_code,
                'updated_by' => Auth::user()->name,
            ]);
            if ($request->file('appl_is_img_full_name')) {
                unlink(storage_path('reg/full-name/' . $request->old_appl_is_img_full_name));
                $request->file('appl_is_img_full_name')->move(storage_path('pkg/pkg-img'), $request->file('appl_is_img_full_name')->getClientOriginalName());
                $registerPackage->update(['appl_is_img_full_name' => $request->file('appl_is_img_full_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_img_half_name')) {
                unlink(storage_path('reg/half-name/' . $request->old_appl_is_img_half_name));
                $request->file('appl_is_img_half_name')->move(storage_path('pkg/pkg-img'), $request->file('appl_is_img_half_name')->getClientOriginalName());
                $registerPackage->update(['appl_is_img_half_name' => $request->file('appl_is_img_half_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_pass_name')) {
                unlink(storage_path('reg/pass-name/' . $request->old_appl_is_pass_name));
                $request->file('appl_is_pass_name')->move(storage_path('pkg/pkg-img'), $request->file('appl_is_pass_name')->getClientOriginalName());
                $registerPackage->update(['appl_is_pass_name' => $request->file('appl_is_pass_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_yb_name')) {
                unlink(storage_path('reg/yb-name/' . $request->old_appl_is_yb_name));
                $request->file('appl_is_yb_name')->move(storage_path('pkg/pkg-img'), $request->file('appl_is_yb_name')->getClientOriginalName());
                $registerPackage->update(['appl_is_yb_name' => $request->file('appl_is_yb_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_id_name')) {
                unlink(storage_path('reg/id-name/' . $request->old_appl_is_id_name));
                $request->file('appl_is_id_name')->move(storage_path('pkg/pkg-img'), $request->file('appl_is_id_name')->getClientOriginalName());
                $registerPackage->update(['appl_is_id_name' => $request->file('appl_is_id_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_kk_name')) {
                unlink(storage_path('reg/kk-name/' . $request->old_appl_is_kk_name));
                $request->file('appl_is_kk_name')->move(storage_path('pkg/pkg-img'), $request->file('appl_is_kk_name')->getClientOriginalName());
                $registerPackage->update(['appl_is_kk_name' => $request->file('appl_is_kk_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_akta_n_name')) {
                unlink(storage_path('reg/akta-n-name/' . $request->old_appl_is_akta_n_name));
                $request->file('appl_is_akta_n_name')->move(storage_path('pkg/pkg-img'), $request->file('appl_is_akta_n_name')->getClientOriginalName());
                $registerPackage->update(['appl_is_akta_n_name' => $request->file('appl_is_akta_n_name')->getClientOriginalName()]);
            }
            if ($request->file('appl_is_akta_l_name')) {
                unlink(storage_path('reg/akta-l-name/' . $request->old_appl_is_akta_l_name));
                $request->file('appl_is_akta_l_name')->move(storage_path('pkg/pkg-img'), $request->file('appl_is_akta_l_name')->getClientOriginalName());
                $registerPackage->update(['appl_is_akta_l_name' => $request->file('appl_is_akta_l_name')->getClientOriginalName()]);
            }
            Alert::toast('Data Created Successfully!', 'success');
            return redirect()->route('registerpackages.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegisterPackage $registerPackage)
    {
        $registerPackage->delete();

        return redirect()->route('registerpackages.index');
    }
}
