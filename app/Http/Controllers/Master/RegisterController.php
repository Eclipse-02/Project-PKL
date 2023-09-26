<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.konsumen.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('images');
        if ($request->hasFile('image')) {

            //get filename with extension
            $filenamewithextension = $request->file('image')->getClientOriginalName();
    
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    
            //get file extension
            $extension = $request->file('image')->getClientOriginalExtension();
    
            //filename to store
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
    
            Storage::put('public/images/'. $filenametostore, fopen($request->file('image'), 'r+'));
            Storage::put('public/images/crop/'. $filenametostore, fopen($request->file('image'), 'r+'));
    
            //Crop image here
            $cropimage = public_path('storage/images/'.$filenametostore);
            $img = Image::make($request->file('image'))->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'))->save($cropimage);
    
            // you can save the below image path in database
            $path = asset('storage/images/'.$filenametostore);
    
            return redirect('dashboard/registrasi/create')->with(['success' => "Image cropped successfully.", 'path' => $path]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
