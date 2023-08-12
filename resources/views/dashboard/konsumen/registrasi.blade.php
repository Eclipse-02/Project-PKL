@extends('dashboard.master')

@section('content')
    <div class="card">
        <h5 class="card-header text-center">Registrasi</h5>
        <div class="card-body">
            {{-- <form action="{{ route('registrasi.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row align-items-center text-end">
                    <div class="col-lg-4 my-3">
                        <label class="form-label">Provinsi</label>
                    </div>
                    <div class="col-lg-8 my-3">
                        <select class="form-select" id="sel_prov">
                            <option selected class="text-center">-- Pilih Provinsi --</option>
                        </select>
                    </div>
                    <div class="col-lg-4 my-3">
                        <label class="form-label">Kabupaten/Kota</label>
                    </div>
                    <div class="col-lg-8 my-3">
                        <select class="form-select" id="sel_kab" disabled>
                            <option selected class="text-center">-- Pilih Provinsi Terlebih Dahulu --</option>
                        </select>
                    </div>
                    <div class="col-lg-4 my-3">
                        <label class="form-label">Kecamatan</label>
                    </div>
                    <div class="col-lg-8 my-3">
                        <select class="form-select" id="sel_kec" disabled>
                            <option selected class="text-center">-- Pilih Kabupaten/Kota Terlebih Dahulu --</option>
                        </select>
                    </div>
                    <div class="col-lg-4 my-3">
                        <label class="form-label">Kelurahan</label>
                    </div>
                    <div class="col-lg-8 my-3">
                        <select class="form-select" id="sel_kel" disabled>
                            <option selected class="text-center">-- Pilih Kecamatan Terlebih Dahulu --</option>
                        </select>
                    </div>
                    <div class="col-lg-4 my-3">
                        <label class="form-label">Upload KK</label>
                    </div>
                    <div class="col-lg-8 my-3">
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="col-lg-12 my-3">
                        <button type="submit" class="btn btn-primary col-lg-12">Submit</button>
                    </div>
                </div>
            </form> --}}
            <form action="{{ route('registrasi.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <p>Image: <input type="file" name="image" class="image" id="image" required /></p>
                <input type="hidden" name="x1" value="" />
                <input type="hidden" name="y1" value="" />
                <input type="hidden" name="w" value="" />
                <input type="hidden" name="h" value="" />
                <button type="submit" name="submit">Submit</button>
            </form>
            
            <p class="text-center"><img id="previewimage" style="display:none;"/></p>
            @if ($path = Session::get('path'))
                <img src="{{ $path }}" />
            @endif
        </div>
    </div>
@endsection
