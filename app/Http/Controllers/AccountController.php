<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function overview()
    {
        return view('dashboard.account.overview');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function setting()
    {
        return view('dashboard.account.setting');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function updatePassword(Request $request, $id)
    {
        // dd($request->all());
        $curr_password = Validator::make($request->all(), [
            'current_password' => ['required', 'string'],
        ]);

        $conf_password = Validator::make($request->all(), [
            'password' => ['required', 'string', 'confirmed'],
        ]);

        if(!Hash::check($request->current_password, auth()->user()->password)){
            Alert::toast('Sandi Sekarang Tidak Sama!', 'error');
            return redirect()->back()->withErrors('Sandi yang dimasukkan tidak sama dengan password yang di simpan!')->withInput();
        } else if ($curr_password->fails()) {
            Alert::toast('Sandi Sekarang Wajib Di isi!', 'error');
            return redirect()->back()->withErrors($curr_password)->withInput();
        } else if ($conf_password->fails()) {
            Alert::toast('Sandi Baru & Konfirmasi Tidak Sama!', 'error');
            return redirect()->back()->withErrors($conf_password)->withInput();
        }else {
            $user = User::where('empl_id', $id)->first();
            $user->password = Hash::make($request->password);
            $user->save();

            Auth::login($user);

            Alert::toast('Password Berhasil Diganti!', 'success');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
