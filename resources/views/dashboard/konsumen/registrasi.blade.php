@extends('dashboard.master')

@section('content')
    <div class="card">
        <h5 class="card-header text-center">Registrasi</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
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
            </div>
        </div>
    </div>
@endsection
