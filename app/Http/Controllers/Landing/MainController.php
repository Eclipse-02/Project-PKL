<?php

namespace App\Http\Controllers\Landing;

use Carbon\Carbon;
use App\Events\Utils;
use App\Models\Master\Edu;
use App\Models\Master\Job;
use Illuminate\Http\Request;
use App\Models\Master\Country;
use App\Models\Master\Package;
use App\Models\Master\Utility;
use App\Models\Master\Vaccine;
use App\Models\Master\Provinsi;
use App\Models\Master\Relation;
use App\Models\Master\Supplier;
use App\Http\Controllers\Controller;
use App\Models\Master\RegisterPackage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Package::with('details')->where('coy_id', '=', 1)->get();

        return view('landing.welcome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packages = Package::where([
            ['coy_id', '=', 1],
            ['pkg_is_display', '=', 'Y'],
        ])->select('pkg_code', 'pkg_name')->get();
        $utilities = Utility::where([['coy_id', 1],['branch_code', 1]])->first();
        $edus = Edu::where([
            ['coy_id', '=', 1],
            ['is_active', '=', 'Y'],
        ])->select('edu_code', 'edu_name')->get();
        $jobs = Job::where([
            ['coy_id', '=', 1],
            ['is_active', '=', 'Y'],
        ])->select('job_code', 'job_name')->get();
        $suppliers = Supplier::where([
            ['coy_id', '=', 1],
            ['is_active', '=', 'Y'],
        ])->select('supl_code', 'supl_name')->get();
        $provinsis = Provinsi::where('is_active', 'Y')->select('prov_code', 'provinsi')->get();
        $countries = Country::where('is_active', 'Y')->select('con_code', 'con_name')->get();
        $relations = Relation::where('is_active', 'Y')->select('rel_code', 'rel_name')->get();
        $vaccines = Vaccine::where('is_active', 'Y')->select('vc_code', 'vc_name')->get();

        return view('landing.create', compact('packages', 'utilities', 'edus', 'jobs', 'suppliers', 'provinsis', 'countries', 'relations', 'vaccines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pkg_code' => 'required',
            'appl_addr' => 'required',
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
            'appl_status' => 'required',
            'con_code' => 'required',
            'edu_code' => 'required',
            'job_code' => 'required',
            'appl_fth_name' => 'required',
            'rel_code' => 'required',
            'appl_mahram' => 'required',
            'appl_pass_no' => 'required',
            'appl_pass_name' => 'required',
            'appl_pass_iss_date' => 'required',
            'appl_pass_exp_date' => 'required',
            'appl_pass_iss_place' => 'required',
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
            'appl_is_copy_id' => 'required',
            'appl_is_copy_kk' => 'required',
            'appl_is_copy_pass' => 'required',
            'appl_is_copy_akta_n' => 'required',
            'appl_is_copy_akta_l' => 'required',
        ]);

        // dd($validator->errors());

        $appl_id_no = str_replace('-', '', $request->appl_id_no);

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $db = Utility::where([['coy_id', 1],['branch_code', 1]])->first();
            event(new Utils(1, 1));
            $seqn = sprintf("%08d", $db->last_value);

            if ($db->is_cycle == 'Y') {
                $appl_no = 1 . 'ORD' . Carbon::now()->format('y') . $seqn;
            } else if($db->is_cycle == 'M') {
                $appl_no = 1 . 'ORD' . Carbon::now()->format('ym') . $seqn;
            } else {
                $appl_no = 1 . 'ORD' . Carbon::now()->format('ymd') . $seqn;
            }

            $new_data = RegisterPackage::create([
                'coy_id' => 1,
                'appl_addr' => $request->appl_addr,
                'appl_st' => 'NW',
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
                'appl_posting_date' => '',
                'created_by' => 'User',
                'updated_by' => 'User',
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
            return redirect()->route('landing.main.welcome.success', $new_data->id);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($package)
    {
        $data = Package::where('id', $package)->first();
        return view('landing.view', compact('data'));
    }

    public function package()
    {
        $data = Package::where('coy_id', 1)->get();
        return view('landing.package', compact('data'));
    }

    function success($package) {
        $data = RegisterPackage::where('id', $package)->select('appl_no', 'appl_tlp')->first();

        return view('landing.success', compact('data'));
    }
}
