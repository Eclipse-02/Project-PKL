<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('users')
            ->join('users_uid', 'users.coy_id', '=', 'users_uid.user_id')
            ->join('role_user', 'users.coy_id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.name', 'users_uid.id', 'roles.display_name')
            ->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = '
                        <form onsubmit="return confirm(\'Apakah anda yakin ingin menghapus '.$row->name.' ?\');" action="userroles/'.$row->id.'" method="POST">

                            <a class="btn btn-info" href="userroles/'.$row->id.'" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                    <style>svg{fill:#ffffff}</style>
                                    <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/>
                                </svg>
                            </svg>
                            </a>

                            <a class="btn btn-primary" href="userroles/'.$row->id.'/edit" >
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
        return view('scaffolds.userroles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = DB::table('users')
            ->join('users_uid', 'users.coy_id', '=', 'users_uid.user_id')
            ->select('users.name', 'users_uid.user_id')
            ->get();
        $roles = DB::table('roles')
            ->select('id', 'display_name')
            ->get();
        return view('scaffolds.userroles.create', compact('data', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user' => 'required|string',
            'role' => 'required|integer',
        ]);

        // dd($request->all());

        if (User::find($request->user)->hasRole(['konsumen', 'office', 'agen'])) {
            return redirect()->back();
        } else {
            if ($request->role == 1) {
                User::find($request->user)->addRole('konsumen');
            } else if ($request->role == 2) {
                User::find($request->user)->addRole('office');
            } else {
                User::find($request->user)->addRole('agen');
            }
        }
        

        return redirect()->route('userroles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($userRole)
    {
        $data = DB::table('users')
            ->join('users_uid', 'users.coy_id', '=', 'users_uid.user_id')
            ->join('role_user', 'users.coy_id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.name', 'users_uid.id', 'users_uid.user_id', 'roles.display_name', 'role_user.role_id')
            ->where('users_uid.id', $userRole)
            ->first();
        return view('scaffolds.userroles.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($userRole)
    {
        $data = DB::table('users')
            ->join('users_uid', 'users.coy_id', '=', 'users_uid.user_id')
            ->join('role_user', 'users.coy_id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.name', 'users_uid.id', 'roles.display_name', 'role_user.role_id')
            ->where('users_uid.id', $userRole)
            ->first();
        $roles = DB::table('roles')
            ->join('role_user', 'roles.id', '=', 'role_user.role_id')
            ->select('roles.id', 'roles.display_name')
            ->get();
        return view('scaffolds.userroles.edit', compact('data', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $role)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'role' => 'required|string',
        ]);

        DB::table('role_user')
            ->join('users_uid', 'role_user.user_id', '=', 'users_uid.user_id')
            ->where('users_uid.id', $role)
            ->update(['role_user.role_id' => $request->role]);

        return redirect()->route('userroles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($userRole)
    {
        DB::table('role_user')
            ->join('users_uid', 'role_user.user_id', '=', 'users_uid.user_id')
            ->where('users_uid.id', $userRole)
            ->delete();

        return redirect()->route('userroles.index');
    }
}
