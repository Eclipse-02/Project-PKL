<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Models\Master\Package;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umroh = Package::with('details')->where([
            ['coy_id', '=', 1],
            ['pkg_type', '=', 'U'],
        ])->get();

        $event = Package::with('details')->where([
            ['coy_id', '=', 1],
            ['pkg_type', '=', 'E'],
        ])->get();

        return view('landing.welcome', compact('umroh', 'event'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($package)
    {
        //
    }

    public function package()
    {
        $umroh = Package::with('details')->where([
            ['coy_id', '=', 1],
            ['pkg_type', '=', 'U'],
        ])->get();

        $event = Package::with('details')->where([
            ['coy_id', '=', 1],
            ['pkg_type', '=', 'E'],
        ])->get();

        return view('landing.package', compact('umroh', 'event'));
    }
}
