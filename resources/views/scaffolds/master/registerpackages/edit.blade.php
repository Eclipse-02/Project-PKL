@extends('dashboard.master')

@section('title', 'Registrasi Paket')

@section('content')
    <!--start::Col-->
    <div class="col-xxl-12">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0 flex-column">
                    <h3 class="fw-bolder m-0">Edit Registration Data</h3>
                    <div class="text-muted fs-7 fw-bold">Edit Data Registrasi</div>
                </div>
                <!--end::Card title-->
                <!--start::Button-->
                <!--start::Action-->
                <a href="@role('office'){{ route('registerpackages.index') }}@endrole @role('agen'){{ route('agen.registerpackages.index') }}@endrole" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
                    <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr002.svg-->
                    <span class="svg-icon svg-icon-muted svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="black"/>
                            <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="black"/>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Return</a>
                <!--end::Button-->
                <!--end::Action-->
            </div>
            <!--end::Card header-->
            <!--begin::Stepper-->
            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid pt-10" id="kt_stepper_example_vertical" data-kt-stepper="true">
                <!--begin::Aside-->
                <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                    <!--begin::Nav-->
                    <div class="stepper-nav ps-lg-10">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">1</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Basic Info</h3>
                                <div class="stepper-desc">Informasi Dasar</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">2</span>
                            </div>
                            <!--begin::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Personal Data</h3>
                                <div class="stepper-desc">Data Pribadi</div>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">3</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Passport</h3>
                                <div class="stepper-desc">Paspor</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">4</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Vaccines</h3>
                                <div class="stepper-desc">Data Vaksin</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">5</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Data Completion</h3>
                                <div class="stepper-desc">Kelengkapan Data</div>
                            </div>
                            <!--end::Label-->
                        </div>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--begin::Content-->
                <div class="flex-row-fluid py-lg-5 px-lg-15">
                    <!--begin::Form-->
                    <form class="form w-lg-500px mx-auto" action="@role('office'){{ route('registerpackages.update', $data->id) }}@endrole @role('agen'){{ route('agen.registerpackages.update', $data->id) }}@endrole" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!--begin::Group-->
                        <div class="mb-5">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">No Aplikasi</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control form-control-solid @error('appl_no')is-invalid @enderror" type="text" name="appl_no" value="{{ $data->appl_no }}" readonly="readonly" />
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('appl_no')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Aplikasi Status</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control form-control-solid @error('appl_st')is-invalid @enderror" type="text" name="appl_st" value="{{ $data->appl_st == 'NW' ? 'New' : '' }}" readonly="readonly" />
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('appl_st')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Paket Produk</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid @error('pkg_code')is-invalid @enderror" name="pkg_code" id="pkg_code" data-control="select2" data-placeholder="Pilih Paket" disabled="disabled">
                                                <option></option>
                                                @foreach ($packages as $i)
                                                    <option value="{{ $i->pkg_code }}" {{ old('pkg_code') ? (old('pkg_code') == $i->pkg_code ? 'selected' : '') : ($data->pkg_code == $i->pkg_code ? 'selected' : '') }}>{{ $i->pkg_name }}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('pkg_code')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Tanggal Aplikasi</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control form-control-solid @error('appl_date')is-invalid @enderror" type="text" name="appl_date" value="{{ Carbon\Carbon::parse($data->appl_date)->isoFormat('dddd, D MMMM Y') }}" readonly="readonly" />
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('appl_date')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Nama Konsumen</label>
                                        <!--end::Label-->

                                        <!--begin::Textarea-->
                                        <input class="form-control form-control form-control-solid @error('appl_name')is-invalid @enderror" type="text" name="appl_name" value="{{ old('appl_name') ? old('appl_name') : $data->appl_name }}" />
                                        <!--end::Textarea-->

                                        <!--begin::Error-->
                                        @error('appl_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Title</label>
                                        <!--end::Label-->

                                        <!--begin::Textarea-->
                                        <select class="form-select form-select-solid @error('appl_title')is-invalid @enderror" name="appl_title" id="appl_title" data-control="select2" data-placeholder="Pilih Title">
                                            <option></option>
                                            <option value="MR" {{ old('appl_title') ? (old('appl_title') == 'MR' ? 'selected' : '') : ($data->appl_title == 'MR' ? 'selected' : '') }}>Mr</option>
                                            <option value="MRS" {{ old('appl_title') ? (old('appl_title') == 'MRS' ? 'selected' : '') : ($data->appl_title == 'MRS' ? 'selected' : '') }}>Mrs</option>
                                            <option value="MS" {{ old('appl_title') ? (old('appl_title') == 'MS' ? 'selected' : '') : ($data->appl_title == 'MS' ? 'selected' : '') }}>Ms</option>
                                        </select>
                                        <!--end::Textarea-->

                                        <!--begin::Error-->
                                        @error('appl_title')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Step 1-->

                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Jenis Kelamin</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid @error('appl_gender')is-invalid @enderror" name="appl_gender" id="appl_gender" data-control="select2" data-placeholder="Pilih Jenis Kelamin">
                                                <option></option>
                                                <option value="1" {{ old('appl_gender') ? (old('appl_gender') == '1' ? 'selected' : '') : ($data->appl_gender == '1' ? 'selected' : '') }}>Laki-Laki</option>
                                                <option value="2" {{ old('appl_gender') ? (old('appl_gender') == '2' ? 'selected' : '') : ($data->appl_gender == '2' ? 'selected' : '') }}>Perempuan</option>
                                            </select>
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('appl_gender')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Status</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid @error('appl_status')is-invalid @enderror" name="appl_status" id="appl_status" data-control="select2" data-placeholder="Pilih Status">
                                                <option></option>
                                                <option value="1" {{ old('appl_status') ? (old('appl_status') == '1' ? 'selected' : '') : ($data->appl_status == '1' ? 'selected' : '') }}>Kawin</option>
                                                <option value="2" {{ old('appl_status') ? (old('appl_status') == '2' ? 'selected' : '') : ($data->appl_status == '2' ? 'selected' : '') }}>Belum Kawin</option>
                                                <option value="3" {{ old('appl_status') ? (old('appl_status') == '3' ? 'selected' : '') : ($data->appl_status == '3' ? 'selected' : '') }}>Cerai</option>
                                            </select>
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('appl_status')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Tipe ID</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('appl_id_type')is-invalid @enderror" name="appl_id_type" id="appl_id_type" data-control="select2" data-placeholder="Tipe ID">
                                            <option></option>
                                            <option value="1" {{ old('appl_id_type') ? (old('appl_id_type') == '1' ? 'selected' : '') : ($data->appl_id_type == '1' ? 'selected' : '') }}>KTP</option>
                                            <option value="2" {{ old('appl_id_type') ? (old('appl_id_type') == '2' ? 'selected' : '') : ($data->appl_id_type == '2' ? 'selected' : '') }}>SIM</option>
                                        </select>
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_id_type')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">No ID</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_id_no')is-invalid @enderror" type="text" name="appl_id_no" value="{{ old('appl_id_no') ? old('appl_id_no') : $data->appl_id_no }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_id_no')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Tempat Lahir</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control form-control-solid @error('appl_birth_place')is-invalid @enderror" type="text" name="appl_birth_place" value="{{ old('appl_birth_place') ? old('appl_birth_place') : $data->appl_birth_place }}" />
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('appl_birth_place')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Tanggal Lahir</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control form-control-solid @error('appl_birth_date')is-invalid @enderror" type="text" name="appl_birth_date" value="{{ old('appl_birth_date') ? old('appl_birth_date') : $data->appl_birth_date }}" />
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('appl_birth_date')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Alamat</label>
                                        <!--end::Label-->

                                        <!--begin::Textarea-->
                                        <textarea class="form-control form-control form-control-solid @error('appl_addr')is-invalid @enderror" name="appl_addr" data-kt-autosize="true">{{ old('appl_addr') ? old('appl_addr') : $data->appl_addr }}</textarea>
                                        <!--end::Textarea-->

                                        <!--begin::Error-->
                                        @error('appl_addr')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Provinsi</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('prov_code')is-invalid @enderror" name="prov_code" id="prov_code" data-control="select2" data-placeholder="Pilih Provinsi">
                                            <option></option>
                                            @foreach ($provinsis as $i)
                                                <option value="{{ $i->prov_code }}" {{ old('prov_code') ? (old('prov_code') == $i->prov_code ? 'selected' : '') : ($data->prov_code == $i->prov_code ? 'selected' : '') }}>{{ $i->provinsi }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('prov_code')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Kota</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('kota_code')is-invalid @enderror" name="kota_code" id="kota_code">
                                            <option> Terlebih Dahulu</option>
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('kota_code')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Kecamatan</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('kec_code')is-invalid @enderror" name="kec_code" id="kec_code">
                                            <option> Terlebih Dahulu</option>
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('kec_code')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Kelurahan</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('kel_code')is-invalid @enderror" name="kel_code" id="kel_code">
                                            <option> Terlebih Dahulu</option>
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('kel_code')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Warga Negara</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('con_code')is-invalid @enderror" name="con_code" id="con_code" data-control="select2" data-placeholder="Pilih Warga Negara">
                                            <option> Negara</option>
                                            @foreach ($countries as $i)
                                                <option value="{{ $i->con_code }}" {{ old('con_code') ? (old('con_code') == $i->con_code ? 'selected' : '') : ($data->con_code == $i->con_code ? 'selected' : '') }}>{{ $i->con_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('con_code')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Pendidikan</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('edu_code')is-invalid @enderror" name="edu_code" id="edu_code" data-control="select2" data-placeholder="Pilih Pendidikan">
                                            <option></option>
                                            @foreach ($edus as $i)
                                                <option value="{{ $i->edu_code }}" {{ old('edu_code') ? (old('edu_code') == $i->edu_code ? 'selected' : '') : ($data->edu_code == $i->edu_code ? 'selected' : '') }}>{{ $i->edu_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('edu_code')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Jabatan</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('job_code')is-invalid @enderror" name="job_code" id="job_code" data-control="select2" data-placeholder="Pilih Jabatan">
                                            <option></option>
                                            @foreach ($jobs as $i)
                                                <option value="{{ $i->job_code }}" {{ old('job_code') ? (old('job_code') == $i->job_code ? 'selected' : '') : ($data->job_code == $i->job_code ? 'selected' : '') }}>{{ $i->job_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('job_code')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Nama Orang Tua</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_fth_name')is-invalid @enderror" type="text" name="appl_fth_name" value="{{ old('appl_fth_name') ? old('appl_fth_name') : $data->appl_fth_name }}" />
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('appl_fth_name')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Relasi</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('rel_code')is-invalid @enderror" name="rel_code" id="rel_code" data-control="select2" data-placeholder="Pilih Relasi">
                                            <option></option>
                                            @foreach ($relations as $i)
                                                <option value="{{ $i->rel_code }}" {{ old('rel_code') ? (old('rel_code') == $i->rel_code ? 'selected' : '') : ($data->rel_code == $i->rel_code ? 'selected' : '') }}>{{ $i->rel_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('rel_code')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Step 2-->

                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Mahram</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_mahram')is-invalid @enderror" type="text" name="appl_mahram" value="{{ old('appl_mahram') ? old('appl_mahram') : $data->appl_mahram }}" />
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('appl_mahram')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">No Passport</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid text-uppercase @error('appl_pass_no')is-invalid @enderror" type="text" name="appl_pass_no" value="{{ old('appl_pass_no') ? old('appl_pass_no') : $data->appl_pass_no }}" />
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('appl_pass_no')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Nama Passport</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_pass_name')is-invalid @enderror" type="text" name="appl_pass_name" value="{{ old('appl_pass_name') ? old('appl_pass_name') : $data->appl_pass_name }}" />
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('appl_pass_name')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Issue Date</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_pass_iss_date')is-invalid @enderror" type="text" name="appl_pass_iss_date" value="{{ old('appl_pass_iss_date') ? old('appl_pass_iss_date') : $data->appl_pass_iss_date }}" />
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('appl_pass_iss_date')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Expired Date</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_pass_exp_date')is-invalid @enderror" type="text" name="appl_pass_exp_date" value="{{ old('appl_pass_exp_date') ? old('appl_pass_exp_date') : $data->appl_pass_exp_date }}" />
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('appl_pass_exp_date')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Issued Place</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_pass_iss_place')is-invalid @enderror" type="text" name="appl_pass_iss_place" value="{{ old('appl_pass_iss_place') ? old('appl_pass_iss_place') : $data->appl_pass_iss_place }}" />
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('appl_pass_iss_place')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Step 3-->

                            <!--begin::Step 4-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Nama Di Kartu</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_vac_name_id')is-invalid @enderror" type="text" name="appl_vac_name_id" id="appl_vac_name_id" value="{{ old('appl_vac_name_id') ? old('appl_vac_name_id') : $data->appl_vac_name_id }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_vac_name_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--start::Separator-->
                                    <div class="mb-5">
                                        <label class="form-label fw-bolder">Vaksin 1</label>
                                        <div class="separator border-2"></div>
                                    </div>
                                    <!--end::Separator-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Nama Vaksin</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('vc_code_01')is-invalid @enderror" name="vc_code_01" data-control="select2" data-placeholder="Pilih Vaksin">
                                            <option></option>
                                            @foreach ($vaccines as $i)
                                                <option value="{{ $i->vc_code }}" {{ old('vc_code_01') ? (old('vc_code_01') == $i->vc_code ? 'selected' : '') : ($data->vc_code_01 == $i->vc_code ? 'selected' : '') }}>{{ $i->vc_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('vc_code_01')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Tanggal Vaksin</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_vac_id_date_01')is-invalid @enderror vac" type="text" name="appl_vac_id_date_01" value="{{ old('appl_vac_id_date_01') ? old('appl_vac_id_date_01') : $data->appl_vac_id_date_01 }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_vac_id_date_01')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--start::Separator-->
                                    <div class="mb-5">
                                        <label class="form-label fw-bolder">Vaksin 2</label>
                                        <div class="separator border-2"></div>
                                    </div>
                                    <!--end::Separator-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Nama Vaksin</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('vc_code_02')is-invalid @enderror" name="vc_code_02" data-control="select2" data-placeholder="Pilih Vaksin">
                                            <option></option>
                                            @foreach ($vaccines as $i)
                                                <option value="{{ $i->vc_code }}" {{ old('vc_code_02') ? (old('vc_code_02') == $i->vc_code ? 'selected' : '') : ($data->vc_code_02 == $i->vc_code ? 'selected' : '') }}>{{ $i->vc_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('vc_code_02')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Tanggal Vaksin</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_vac_id_date_02')is-invalid @enderror vac" type="text" name="appl_vac_id_date_02" value="{{ old('appl_vac_id_date_02') ? old('appl_vac_id_date_02') : $data->appl_vac_id_date_02 }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_vac_id_date_02')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--start::Separator-->
                                    <div class="mb-5">
                                        <label class="form-label fw-bolder">Vaksin 3</label>
                                        <div class="separator border-2"></div>
                                    </div>
                                    <!--end::Separator-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Nama Vaksin</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('vc_code_03')is-invalid @enderror" name="vc_code_03" data-control="select2" data-placeholder="Pilih Vaksin">
                                            <option></option>
                                            @foreach ($vaccines as $i)
                                                <option value="{{ $i->vc_code }}" {{ old('vc_code_03') ? (old('vc_code_03') == $i->vc_code ? 'selected' : '') : ($data->vc_code_03 == $i->vc_code ? 'selected' : '') }}>{{ $i->vc_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('vc_code_03')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Tanggal Vaksin</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_vac_id_date_03')is-invalid @enderror vac" type="text" name="appl_vac_id_date_03" value="{{ old('appl_vac_id_date_03') ? old('appl_vac_id_date_03') : $data->appl_vac_id_date_03 }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_vac_id_date_03')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--start::Separator-->
                                    <div class="mb-5">
                                        <label class="form-label fw-bolder">Vaksin 4</label>
                                        <div class="separator border-2"></div>
                                    </div>
                                    <!--end::Separator-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Nama Vaksin</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('vc_code_04')is-invalid @enderror" name="vc_code_04" data-control="select2" data-placeholder="Pilih Vaksin">
                                            <option></option>
                                            @foreach ($vaccines as $i)
                                                <option value="{{ $i->vc_code }}" {{ old('vc_code_04') ? (old('vc_code_04') == $i->vc_code ? 'selected' : '') : ($data->vc_code_04 == $i->vc_code ? 'selected' : '') }}>{{ $i->vc_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('vc_code_04')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Tanggal Vaksin</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_vac_id_date_04')is-invalid @enderror vac" type="text" name="appl_vac_id_date_04" value="{{ old('appl_vac_id_date_04') ? old('appl_vac_id_date_04') : $data->appl_vac_id_date_04 }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_vac_id_date_04')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Step 4-->

                            <!--begin::Step 5-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Jemaah Dari</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('supl_code')is-invalid @enderror" name="supl_code" data-control="select2" data-placeholder="Pilih Jemaah">
                                            <option></option>
                                            @foreach ($suppliers as $i)
                                                <option value="{{ $i->supl_code }}" {{ old('supl_code') ? (old('supl_code') == $i->supl_code ? 'selected' : '') : ($data->supl_code == $i->supl_code ? 'selected' : '') }}>{{ $i->supl_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_code')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">No Telp</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_tlp')is-invalid @enderror" type="text" name="appl_tlp" value="{{ old('appl_tlp') ? old('appl_tlp') : $data->appl_tlp }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_tlp')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Email</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_email')is-invalid @enderror" type="text" name="appl_email" value="{{ old('appl_email') ? old('appl_email') : $data->appl_email }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_email')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <div>
                                            <label class="form-label required">Foto Full?</label>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_img_full" name="appl_is_img_full" {{ old('appl_is_img_full') ? (old('appl_is_img_full') == 'Y' ? 'checked' : '') : ($data->appl_is_img_full == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_img_full">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="appl_is_img_full" name="appl_is_img_full" {{ old('appl_is_img_full') ? (old('appl_is_img_full') == 'N' ? 'checked' : '') : ($data->appl_is_img_full == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_img_full">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('appl_is_img_full')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">File</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_is_img_full_name')is-invalid @enderror" type="file" name="appl_is_img_full_name" id="appl_is_img_full_name" disabled='disabled' />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_is_img_full_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <div>
                                            <label class="form-label required">Foto Setengah?</label>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_img_half" name="appl_is_img_half" {{ old('appl_is_img_half') ? (old('appl_is_img_half') == 'Y' ? 'checked' : '') : ($data->appl_is_img_half == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_img_half">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="appl_is_img_half" name="appl_is_img_half" {{ old('appl_is_img_half') ? (old('appl_is_img_half') == 'N' ? 'checked' : '') : ($data->appl_is_img_half == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_img_half">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('appl_is_img_half')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">File</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_is_img_half_name')is-invalid @enderror" type="file" name="appl_is_img_half_name" id="appl_is_img_half_name" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_is_img_half_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <div>
                                            <label class="form-label required">Fisik Passport?</label>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_pass" name="appl_is_pass" {{ old('appl_is_pass') ? (old('appl_is_pass') == 'Y' ? 'checked' : '') : ($data->appl_is_pass == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_pass">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="appl_is_pass" name="appl_is_pass" {{ old('appl_is_pass') ? (old('appl_is_pass') == 'N' ? 'checked' : '') : ($data->appl_is_pass == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_pass">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('appl_is_pass')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">File</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_is_pass_name')is-invalid @enderror" type="file" name="appl_is_pass_name" id="appl_is_pass_name" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_is_pass_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <div>
                                            <label class="form-label required">Buku Kuning?</label>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_yb" name="appl_is_yb" {{ old('appl_is_yb') ? (old('appl_is_yb') == 'Y' ? 'checked' : '') : ($data->appl_is_yb == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_yb">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="appl_is_yb" name="appl_is_yb" {{ old('appl_is_yb') ? (old('appl_is_yb') == 'N' ? 'checked' : '') : ($data->appl_is_yb == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_yb">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('appl_is_yb')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">File</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_is_yb_name')is-invalid @enderror" type="file" name="appl_is_yb_name" id="appl_is_yb_name" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_is_yb_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <div>
                                            <label class="form-label required">Copy KTP?</label>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_id" name="appl_is_copy_id" {{ old('appl_is_copy_id') ? (old('appl_is_copy_id') == 'Y' ? 'checked' : '') : ($data->appl_is_copy_id == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_id">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_id" name="appl_is_copy_id" {{ old('appl_is_copy_id') ? (old('appl_is_copy_id') == 'N' ? 'checked' : '') : ($data->appl_is_copy_id == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_id">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('appl_is_copy_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">File</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_is_id_name')is-invalid @enderror" type="file" name="appl_is_id_name" id="appl_is_id_name" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_is_id_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <div>
                                            <label class="form-label required">Copy KK?</label>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_kk" name="appl_is_copy_kk" {{ old('appl_is_copy_kk') ? (old('appl_is_copy_kk') == 'Y' ? 'checked' : '') : ($data->appl_is_copy_kk == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_kk">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_kk" name="appl_is_copy_kk" {{ old('appl_is_copy_kk') ? (old('appl_is_copy_kk') == 'N' ? 'checked' : '') : ($data->appl_is_copy_kk == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_kk">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('appl_is_copy_kk')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">File</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_is_kk_name')is-invalid @enderror" type="file" name="appl_is_kk_name" id="appl_is_kk_name" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_is_kk_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <div>
                                            <label class="form-label required">Copy Passport?</label>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_pass" name="appl_is_copy_pass" {{ old('appl_is_copy_pass') ? (old('appl_is_copy_pass') == 'Y' ? 'checked' : '') : ($data->appl_is_copy_pass == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_pass">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_pass" name="appl_is_copy_pass" {{ old('appl_is_copy_pass') ? (old('appl_is_copy_pass') == 'N' ? 'checked' : '') : ($data->appl_is_copy_pass == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_pass">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('appl_is_copy_pass')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">File</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_is_copy_pass_name')is-invalid @enderror" type="file" name="appl_is_copy_pass_name" id="appl_is_copy_pass_name" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_is_copy_pass_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <div>
                                            <label class="form-label required">Copy Akta N?</label>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_akta_n" name="appl_is_copy_akta_n" {{ old('appl_is_copy_akta_n') ? (old('appl_is_copy_akta_n') == 'Y' ? 'checked' : '') : ($data->appl_is_copy_akta_n == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_akta_n">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_akta_n" name="appl_is_copy_akta_n" {{ old('appl_is_copy_akta_n') ? (old('appl_is_copy_akta_n') == 'N' ? 'checked' : '') : ($data->appl_is_copy_akta_n == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_akta_n">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('appl_is_copy_akta_n')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">File</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_is_akta_n_name')is-invalid @enderror" type="file" name="appl_is_akta_n_name" id="appl_is_akta_n_name" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_is_akta_n_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <div>
                                            <label class="form-label required">Copy Akta Lahir?</label>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_akta_l" name="appl_is_copy_akta_l" {{ old('appl_is_copy_akta_l') ? (old('appl_is_copy_akta_l') == 'Y' ? 'checked' : '') : ($data->appl_is_copy_akta_l == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_akta_l">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-inline mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_akta_l" name="appl_is_copy_akta_l" {{ old('appl_is_copy_akta_l') ? (old('appl_is_copy_akta_l') == 'N' ? 'checked' : '') : ($data->appl_is_copy_akta_l == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="appl_is_copy_akta_l">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('appl_is_copy_akta_l')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">File</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('appl_is_akta_l_name')is-invalid @enderror" type="file" name="appl_is_akta_l_name" id="appl_is_akta_l_name" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('appl_is_akta_l_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Step 5-->
                        </div>
                        <!--end::Group-->

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                    Kembali
                                </button>
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Wrapper-->
                            <div>
                                <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit" name="submit" value="submit">
                                    <span class="indicator-label">
                                        Simpan
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                <button type="submit" class="btn btn-warning" data-kt-stepper-action="submit" name="submit" value="post">
                                    <span class="indicator-label">
                                        Posting
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                    Lanjut
                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <!--end::Stepper-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
@endsection

@section('scripts')
<script type="text/javascript">

    $(document).ready(function() {
        // Stepper element
        var element = document.querySelector("#kt_stepper_example_vertical");

        // Initialize Stepper
        var stepper = new KTStepper(element);

        // Handle next step
        stepper.on("kt.stepper.next", function (stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function (stepper) {
            stepper.goPrevious(); // go previous step
        });

        // Handle navigation click
        stepper.on("kt.stepper.click", function (stepper) {
            stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
        });

        // Handle submit button
        stepper.on("kt.stepper.changed", function(stepper) {
            if (stepper.getCurrentStepIndex() === 5) {
                document.querySelectorAll('[data-kt-stepper-action="submit"]')[0].classList.remove("d-none")
                document.querySelectorAll('[data-kt-stepper-action="submit"]')[0].classList.add("d-inline-block")
                document.querySelectorAll('[data-kt-stepper-action="submit"]')[1].classList.remove("d-none")
                document.querySelectorAll('[data-kt-stepper-action="submit"]')[1].classList.add("d-inline-block")
                document.querySelector('[data-kt-stepper-action="next"]').classList.add("d-none")
            } else {
                document.querySelectorAll('[data-kt-stepper-action="submit"]')[0].classList.add("d-none")
                document.querySelectorAll('[data-kt-stepper-action="submit"]')[0].classList.remove("d-inline-block")
                document.querySelectorAll('[data-kt-stepper-action="submit"]')[1].classList.add("d-none")
                document.querySelectorAll('[data-kt-stepper-action="submit"]')[1].classList.remove("d-inline-block")
                document.querySelector('[data-kt-stepper-action="next"]').classList.remove("d-none")
            }
        });
        if ($('[name="appl_id_type"]').val() == "") {
            $('[name="appl_id_no"]').attr('disabled', true);
        }
        if (!$('[name="appl_is_img_full"]:checked').val()) {
            $('[name="appl_is_img_full_name"]').attr('disabled', true);
        }
        if (!$('[name="appl_is_img_half"]:checked').val()) {
            $('[name="appl_is_img_half_name"]').attr('disabled', true);
        }
        if (!$('[name="appl_is_pass"]:checked').val()) {
            $('[name="appl_is_pass_name"]').attr('disabled', true);
        }
        if (!$('[name="appl_is_yb"]:checked').val()) {
            $('[name="appl_is_yb_name"]').attr('disabled', true);
        }
        if (!$('[name="appl_is_copy_id"]:checked').val()) {
            $('[name="appl_is_id_name"]').attr('disabled', true);
        }
        if (!$('[name="appl_is_copy_kk"]:checked').val()) {
            $('[name="appl_is_kk_name"]').attr('disabled', true);
        }
        if (!$('[name="appl_is_copy_pass"]:checked').val()) {
            $('[name="appl_is_copy_pass_name"]').attr('disabled', true);
        }
        if (!$('[name="appl_is_copy_akta_n"]:checked').val()) {
            $('[name="appl_is_akta_n_name"]').attr('disabled', true);
        }
        if (!$('[name="appl_is_copy_akta_l"]:checked').val()) {
            $('[name="appl_is_akta_l_name"]').attr('disabled', true);
        }
    });
    $('form').on('change', '[name="appl_id_type"]', function() {
        if ($('[name="appl_id_type"]').val() == '') {
            $('[name="appl_id_no"]').attr('disabled', true);
        } else {
            $('[name="appl_id_no"]').attr('disabled', false);
        }
    });

    $('form').on('click', '[name="appl_is_img_full"]', function() {
        console.log($('[name="appl_is_img_full"]:checked').val());
        if ($('[name="appl_is_img_full"]:checked').val() == 'Y') {
            $('[name="appl_is_img_full_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_img_full_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_img_half"]', function() {
        console.log($('[name="appl_is_img_half"]:checked').val());
        if ($('[name="appl_is_img_half"]:checked').val() == 'Y') {
            $('[name="appl_is_img_half_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_img_half_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_pass"]', function() {
        console.log($('[name="appl_is_pass"]:checked').val());
        if ($('[name="appl_is_pass"]:checked').val() == 'Y') {
            $('[name="appl_is_pass_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_pass_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_yb"]', function() {
        console.log($('[name="appl_is_yb"]:checked').val());
        if ($('[name="appl_is_yb"]:checked').val() == 'Y') {
            $('[name="appl_is_yb_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_yb_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_id"]', function() {
        console.log($('[name="appl_is_copy_id"]:checked').val());
        if ($('[name="appl_is_copy_id"]:checked').val() == 'Y') {
            $('[name="appl_is_id_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_id_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_kk"]', function() {
        console.log($('[name="appl_is_copy_kk"]:checked').val());
        if ($('[name="appl_is_copy_kk"]:checked').val() == 'Y') {
            $('[name="appl_is_kk_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_kk_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_pass"]', function() {
        console.log($('[name="appl_is_copy_pass"]:checked').val());
        if ($('[name="appl_is_copy_pass"]:checked').val() == 'Y') {
            $('[name="appl_is_copy_pass_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_copy_pass_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_akta_n"]', function() {
        console.log($('[name="appl_is_copy_akta_n"]:checked').val());
        if ($('[name="appl_is_copy_akta_n"]:checked').val() == 'Y') {
            $('[name="appl_is_akta_n_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_akta_n_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_akta_l"]', function() {
        console.log($('[name="appl_is_copy_akta_l"]:checked').val());
        if ($('[name="appl_is_copy_akta_l"]:checked').val() == 'Y') {
            $('[name="appl_is_akta_l_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_akta_l_name"]').attr('disabled', true);
        }
    });

    Inputmask("9999-9999-9999-9999", {
        "numericInput": true
    }).mask("[name='appl_id_no']");

    Inputmask({
        "mask": "a 9999999",
        "placeholder": "X 0000000"
    }).mask("[name='appl_pass_no']");

    $("[name='appl_birth_date']").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10),
        opens: 'right',
        drops: 'auto',
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    $("[name='appl_pass_iss_date']").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10),
        opens: 'right',
        drops: 'auto',
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    $("[name='appl_pass_exp_date']").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10),
        opens: 'right',
        drops: 'auto',
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    $(".vac").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10),
        opens: 'right',
        drops: 'auto',
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    Inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace("mailto:", "");
        },
        definitions: {
            "*": {
                validator: '[0-9A-Za-z!#$%&"*+/=?^_`{|}~\-]',
                cardinality: 1,
                casing: "lower"
            }
        }
    }).mask("[name='appl_email']");

    callLocations({{ $data->prov_code }}, {{ $data->kota_code }}, {{ $data->kec_code }}, {{ $data->kel_code }});

</script>
@endsection