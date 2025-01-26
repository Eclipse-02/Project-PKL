<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Master\Package;
use App\Models\Master\PackageDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Package::with('details')->where('coy_id', '=', Auth::user()->coy_id)->get();

        // if ($request->ajax()) {
        //     $data = Package::join('appl_trn_pkg_dtls', 'appl_trn_pkg.pkg_code', '=', 'appl_trn_pkg_dtls.pkg_code')
        //     ->where('appl_trn_pkg.coy_id', '=', Auth::user()->coy_id)
        //     ->select('appl_trn_pkg.coy_id', 'appl_trn_pkg.id', 'appl_trn_pkg.pkg_code', 'appl_trn_pkg.pkg_name', 'appl_trn_pkg.pkg_desc', 'appl_trn_pkg.pkg_price', 'appl_trn_pkg.pkg_price_agent', 'appl_trn_pkg.pkg_start', 'appl_trn_pkg.pkg_closed', 'appl_trn_pkg.pkg_image', 'appl_trn_pkg.pkg_is_display', 'appl_trn_pkg_dtls.dtl_sq_no', 'appl_trn_pkg_dtls.dtl_desc', 'appl_trn_pkg_dtls.dtl_price', 'appl_trn_pkg_dtls.pkg_status', 'appl_trn_pkg.created_by', 'appl_trn_pkg.updated_by', 'appl_trn_pkg.created_at', 'appl_trn_pkg.updated_at')
        //     ->get();
        //     return DataTables::of($data)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($row){

        //                 if ($row->is_display == 'Y') {
        //                     $btn = '
        //                     <form action="package/'.$row->id.'" method="POST" class="text-center">

        //                         <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-md me-1" href="package/'.$row->id.'" >
        //                             <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
        //                             <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        //                             <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
        //                             <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
        //                             </svg></span>
        //                             <!--end::Svg Icon-->
        //                         </a>

        //                         <a class="btn btn-icon btn-bg-light btn-active-color-warning btn-md me-1" href="package/'.$row->id.'/edit" >
        //                             <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen055.svg-->
        //                             <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        //                             <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black"/>
        //                             <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black"/>
        //                             <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black"/>
        //                             </svg></span>
        //                             <!--end::Svg Icon-->
        //                         </a>

        //                         '.csrf_field().'
        //                         '.method_field("DELETE").'
        //                         <input type="hidden" id="swal_name_val" value="'.$row->pkg_name.'">

        //                         <button type="submit" class="swal-disable btn btn-icon btn-bg-light btn-active-color-danger btn-md me-1">
        //                             <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
        //                             <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        //                             <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
        //                             <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black"/>
        //                             <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black"/>
        //                             </svg></span>
        //                             <!--end::Svg Icon-->
        //                         </button>
        //                     </form>
        //                     ';
        //                 } else {
        //                     $btn = '
        //                     <form action="package/'.$row->id.'" method="POST" class="text-center">
    
        //                         <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-md me-1" href="package/'.$row->id.'" >
        //                             <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
        //                             <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        //                             <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
        //                             <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
        //                             </svg></span>
        //                             <!--end::Svg Icon-->
        //                         </a>
    
        //                         <a class="btn btn-icon btn-bg-light btn-active-color-warning btn-md me-1" href="package/'.$row->id.'/edit" >
        //                             <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen055.svg-->
        //                             <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        //                             <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black"/>
        //                             <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black"/>
        //                             <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black"/>
        //                             </svg></span>
        //                             <!--end::Svg Icon-->
        //                         </a>
    
        //                         '.csrf_field().'
        //                         '.method_field("DELETE").'
        //                         <input type="hidden" id="swal_name_val" value="'.$row->pkg_name.'">
    
        //                         <button type="submit" class="swal-enable btn btn-icon btn-bg-light btn-active-color-success btn-md me-1">
        //                             <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen043.svg-->
        //                             <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        //                             <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
        //                             <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
        //                             </svg></span>
        //                             <!--end::Svg Icon-->
        //                         </button>
        //                     </form>
        //                     ';
        //                 }

        //                 return $btn;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }

        return view('scaffolds.master.packages.index', compact('data'));
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
            'pkg_code' => 'required|string|unique:appl_trn_pkg,pkg_code',
            'pkg_name' => 'required|string',
            'pkg_desc' => 'required|string',
            'pkg_price' => 'required|string',
            // 'pkg_price_limit' => 'required|string',
            'pkg_start' => 'required|date|before:pkg_closed',
            'pkg_closed' => 'required|date|after:pkg_start',
            'pkg_image' => 'required|image|file',
            'pkg_is_display' => 'required|string',
            'pkg_status' => 'required|string',
        ]);

        $pkg_price = str_replace('.', '', $request->pkg_price);
        $pkg_price_limit = str_replace('.', '', $request->pkg_price_limit);
        $pkg_price_agent = str_replace('.', '', $request->pkg_price_agent);

        $pkg_price = str_replace('_', '', $pkg_price);
        $pkg_price_limit = str_replace('_', '', $pkg_price_limit);
        $pkg_price_agent = str_replace('_', '', $pkg_price_agent);

        $pkg_price = str_replace('Rp ', '', $pkg_price);
        $pkg_price_limit = str_replace('Rp ', '', $pkg_price_limit);
        $pkg_price_agent = str_replace('Rp ', '', $pkg_price_agent);

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $request->file('pkg_image')->move(storage_path('app/public/pkg/pkg-img'), 'pkg_image-' . Carbon::now()->format('Y-m-d') . '.jpg');
            Package::create([
                'coy_id' => Auth::user()->coy_id,
                'pkg_type' => $request->pkg_type,
                'pkg_code' => $request->pkg_code,
                'pkg_name' => $request->pkg_name,
                'pkg_desc' => $request->pkg_desc,
                'pkg_price' => $pkg_price,
                // 'pkg_price_limit' => $pkg_price_limit,
                'pkg_start' => Carbon::parse($request->pkg_start)->format('Y-m-d'),
                'pkg_closed' => Carbon::parse($request->pkg_closed)->format('Y-m-d'),
                'pkg_image' => 'pkg_image-' . Carbon::now()->format('Y-m-d') . '.jpg',
                'pkg_status' => $request->pkg_status,
                'pkg_is_display' => $request->pkg_is_display,
                'created_by' => Auth::user()->name,
                'updated_by' => Auth::user()->name,
            ]);

            Alert::toast('Data Berhasil Dibuat!', 'success');
            return redirect()->route('packages.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($package)
    {
        $data = Package::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['id', '=', $package],
        ])->first();

        if (!$data) {
            Alert::toast('Anda Tidak Memiliki Akses Untuk Melihat Data Ini!', 'error');
            return redirect()->back();
        }
        return view('scaffolds.master.packages.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($package)
    {
        $data = Package::where([
            ['coy_id', '=', Auth::user()->coy_id],
            ['id', '=', $package],
        ])->first();

        if (!$data) {
            Alert::toast('Anda Tidak Memiliki Akses Untuk Mengedit Data Ini!', 'error');
            return redirect()->back();
        }
        return view('scaffolds.master.packages.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $package)
    {
        $validator = Validator::make($request->all(), [
            'pkg_name' => 'required|string',
            'pkg_desc' => 'required|string',
            'pkg_price' => 'required|string',
            // 'pkg_price_limit' => 'required|string',
            'pkg_price_agent' => 'required|string',
            'pkg_start' => 'required|date|before:pkg_closed',
            'pkg_closed' => 'required|date|after:pkg_start',
            'pkg_image' => 'image|file',
            'pkg_is_display' => 'required|string',
            'pkg_status' => 'required|string',
        ]);

        $pkg_price = str_replace('.', '', $request->pkg_price);
        $pkg_price_limit = str_replace('.', '', $request->pkg_price_limit);
        $pkg_price_agent = str_replace('.', '', $request->pkg_price_agent);
        $dtl_price = str_replace('.', '', $request->dtl_price);

        $pkg_price = str_replace('_', '', $pkg_price);
        $pkg_price_limit = str_replace('_', '', $pkg_price_limit);
        $pkg_price_agent = str_replace('_', '', $pkg_price_agent);
        $dtl_price = str_replace('_', '', $dtl_price);

        $pkg_price = str_replace('Rp ', '', $pkg_price);
        $pkg_price_limit = str_replace('Rp ', '', $pkg_price_limit);
        $pkg_price_agent = str_replace('Rp ', '', $pkg_price_agent);
        $dtl_price = str_replace('Rp ', '', $dtl_price);

        if ($validator->fails()) {
            Alert::toast('Ups, Terjadi Sesuatu yang Salah!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            if ($request->file('pkg_image')) {
                unlink(storage_path('app/public/pkg/pkg-img/' . $request->old_pkg_image));
                $request->file('pkg_image')->move(storage_path('app/public/pkg/pkg-img'), 'pkg_image-' . Carbon::now()->format('Y-m-d') . '.jpg');
                $package->update(['pkg_image' => 'pkg_image-' . Carbon::now()->format('Y-m-d') . '.jpg']);
            }

            $pkg_code = Package::where('id', $package)
            ->update([
                'pkg_name' => $request->pkg_name,
                'pkg_desc' => $request->pkg_desc,
                'pkg_price' => $pkg_price,
                // 'pkg_price_limit' => $pkg_price_limit,
                'pkg_start' => $request->pkg_start,
                'pkg_closed' => $request->pkg_closed,
                'pkg_status' => $request->pkg_status,
                'pkg_is_display' => $request->pkg_is_display,
                'updated_by' => Auth::user()->name,
            ]);
            PackageDetail::where('pkg_code', $pkg_code)
            ->update([
                'pkg_status' => $request->pkg_status,
            ]);
            Alert::toast('Data Berhasil Diperbarui!', 'success');
            return redirect()->route('packages.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        if ($package->pkg_is_display == 'Y') {
            $package->update([
                'pkg_is_display' => 'N'
            ]);
        } else {
            $package->update([
                'pkg_is_display' => 'Y'
            ]);
        }

        Alert::toast('Status Data Berhasil Diperbarui!', 'success');
        return redirect()->route('packages.index');
    }
}
