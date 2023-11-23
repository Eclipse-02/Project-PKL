@extends('dashboard.master')

@section('title', 'Agen')

@section('content')
    <!--start::Col-->
    <div class="col-xxl-12">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0 flex-column">
                    <h3 class="fw-bolder m-0">Edit Supplier Data</h3>
                    <div class="text-muted fs-7 fw-bold">Edit Data Agen</div>
                </div>
                <!--end::Card title-->
                <!--start::Button-->
                <!--start::Action-->
                <a href="{{ route('suppliers.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
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
                                <h3 class="stepper-title">Contacts</h3>
                                <div class="stepper-desc">Informasi Kontak Agen</div>
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
                                <h3 class="stepper-title">Region</h3>
                                <div class="stepper-desc">Informasi Mengenai Lokasi</div>
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
                                <h3 class="stepper-title">NPWP</h3>
                                <div class="stepper-desc">Data NPWP Agen</div>
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
                                <h3 class="stepper-title">File</h3>
                                <div class="stepper-desc">Upload Foto</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--begin::Step 6-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">6</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Status</h3>
                                <div class="stepper-desc">Status Agen</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 6-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--begin::Content-->
                <div class="flex-row-fluid py-lg-5 px-lg-15">
                    <!--begin::Form-->
                    <form class="form w-lg-500px mx-auto" action="{{ route('suppliers.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!--begin::Group-->
                        <div class="mb-5">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Kode</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('supl_code')is-invalid @enderror" type="text" name="supl_code" value="{{ old('supl_code') ? old('supl_code') : $data->supl_code }}" disabled="disabled" />
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
                                        <label class="form-label required">Cabang</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('branch_code')is-invalid @enderror" name="branch_code" id="branch_code" data-control="select2" data-placeholder="Pilih Cabang">
                                            <option></option>
                                            @foreach ($branches as $i)
                                                <option value="{{ $i->branch_code }}" {{ old('branch_code') ? (old('branch_code') == $i->branch_code ? 'selected' : '') : ($data->branch_code == $i->branch_code ? 'selected' : '') }}>{{ $i->branch_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('branch_code')
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
                                        <label class="form-label required">Nama</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('supl_name')is-invalid @enderror" type="text" name="supl_name" value="{{ old('supl_name') ? old('supl_name') : $data->supl_name }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_name')
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
                                        <label class="form-label required">Tipe</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('supl_type')is-invalid @enderror" name="supl_type" id="supl_type" data-control="select2" data-placeholder="Pilih Tipe">
                                            <option></option>
                                            <option value="0" {{ old('supl_type') ? (old('supl_type') == '0' ? 'selected' : '') : ($data->supl_type == '0' ? 'selected' : '') }}>Individu</option>
                                            <option value="1" {{ old('supl_type') ? (old('supl_type') == '1' ? 'selected' : '') : ($data->supl_type == '1' ? 'selected' : '') }}>Company</option>
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('supl_type')
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
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Sub Tipe</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('supl_sub_type')is-invalid @enderror" name="supl_sub_type" data-control="select2" data-placeholder="Pilih Sub Tipe">
                                            <option></option>
                                            @foreach ($supplierSubTypes as $i)
                                                <option value="{{ $i->sub_code }}" {{ old('supl_sub_type') ? (old('supl_sub_type') == $i->sub_code ? 'selected' : '') : ($data->supl_sub_type == $i->sub_code ? 'selected' : '') }}>{{ $i->sub_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_sub_type')
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
                                        <label class="form-label">Foto Agen</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="hidden" name="old_supl_pic_name" value="{{ $data->supl_pic_name }}">
                                        <input class="form-control form-control form-control-solid @error('supl_pic_name')is-invalid @enderror" type="file" name="supl_pic_name" value="{{ old('supl_pic_name') ? old('supl_pic_name') : $data->supl_pic_name }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_pic_name')
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
                                        <select class="form-select form-select-solid @error('poss_code')is-invalid @enderror" name="poss_code" data-control="select2" data-placeholder="Pilih Jabatan">
                                            <option></option>
                                            @foreach ($positions as $i)
                                                <option value="{{ $i->poss_code }}" {{ old('poss_code') ? (old('poss_code') == $i->poss_code ? 'selected' : '') : ($data->poss_code == $i->poss_code ? 'selected' : '') }}>{{ $i->poss_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('poss_code')
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
                                        <input class="form-control form-control form-control-solid @error('supl_id_no')is-invalid @enderror" type="text" name="supl_id_no" value="{{ old('supl_id_no') ? old('supl_id_no') : $data->supl_id_no }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_id_no')
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
                                        <label class="form-label required">Alamat</label>
                                        <!--end::Label-->

                                        <!--begin::Textarea-->
                                        <textarea class="form-control form-control form-control-solid @error('supl_addr')is-invalid @enderror" name="supl_addr" data-kt-autosize="true">{{ old('supl_addr') ? old('supl_addr') : $data->supl_addr }}</textarea>
                                        <!--end::Textarea-->

                                        <!--begin::Error-->
                                        @error('supl_addr')
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
                                        <label class="form-label required">No Area</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('supl_tlp_area')is-invalid @enderror" type="text" name="supl_tlp_area" value="{{ old('supl_tlp_area') ? old('supl_tlp_area') : $data->supl_tlp_area }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_tlp_area')
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
                                        <input class="form-control form-control form-control-solid @error('supl_tlp')is-invalid @enderror" type="text" name="supl_tlp" value="{{ old('supl_tlp') ? old('supl_tlp') : $data->supl_tlp }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_tlp')
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
                                        <label class="form-label required">No HP 1</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('supl_hp01')is-invalid @enderror" type="text" name="supl_hp01" value="{{ old('supl_hp01') ? old('supl_hp01') : $data->supl_hp01 }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_hp01')
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
                                        <label class="form-label required">No HP 2</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('supl_hp02')is-invalid @enderror" type="text" name="supl_hp02" value="{{ old('supl_hp02') ? old('supl_hp02') : $data->supl_hp02 }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_hp02')
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
                                            <option></option>
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
                                            <option></option>
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
                                            <option></option>
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
                                        <label class="form-label required">Kode Pos</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('zip_code')is-invalid @enderror" name="zip_code" id="zip_code">
                                            <option></option>
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('zip_code')
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
                                        <label class="form-label required">No NPWP</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('supl_npwp_no')is-invalid @enderror" type="text" name="supl_npwp_no" id="supl_npwp_no" value="{{ old('supl_npwp_no') ? old('supl_npwp_no') : $data->supl_npwp_no }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_npwp_no')
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
                                        <label class="form-label required">Nama NPWP</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('supl_npwp_name')is-invalid @enderror" type="text" name="supl_npwp_name" id="supl_npwp_name" value="{{ old('supl_npwp_name') ? old('supl_npwp_name') : $data->supl_npwp_name }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_npwp_name')
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
                                        <label class="form-label required">Alamat NPWP</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <textarea class="form-control form-control form-control-solid @error('supl_npwp_addr')is-invalid @enderror" name="supl_npwp_addr" data-kt-autosize="true">{{ old('supl_npwp_addr') ? old('supl_npwp_addr') : $data->supl_npwp_addr }}</textarea>
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('supl_npwp_addr')
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
                                        <label class="form-label">File MOU</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="hidden" name="old_file_name_mou" value="{{ $data->file_name_mou }}">
                                        <input class="form-control form-control form-control-solid @error('file_name_mou')is-invalid @enderror" type="file" name="file_name_mou" id="file_name_mou" value="{{ old('file_name_mou') ? old('file_name_mou') : $data->file_name_mou }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('file_name_mou')
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
                                        <label class="form-label">File KTP</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="hidden" name="old_file_name_ktp" value="{{ $data->file_name_ktp }}">
                                        <input class="form-control form-control form-control-solid @error('file_name_ktp')is-invalid @enderror" type="file" name="file_name_ktp" id="file_name_ktp" value="{{ old('file_name_ktp') ? old('file_name_ktp') : $data->file_name_ktp }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('file_name_ktp')
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
                                        <label class="form-label">File NPWP</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="hidden" name="old_file_name_npwp" value="{{ $data->file_name_npwp }}">
                                        <input class="form-control form-control form-control-solid @error('file_name_npwp')is-invalid @enderror" type="file" name="file_name_npwp" id="file_name_npwp" value="{{ old('file_name_npwp') ? old('file_name_npwp') : $data->file_name_npwp }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('file_name_npwp')
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

                            <!--begin::Step 6-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        @if ($data->supl_status == "NW")
                                            <label class="form-label d-flex align-items-center">
                                                <span class="required">Status</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Submit Approval terlebih dahulu untuk Accept/Reject Data"></i>
                                            </label>
                                        @elseif ($data->supl_status == "NA")
                                            <label class="form-label required">Status</label>
                                        @else
                                            <label class="form-label d-flex align-items-center">
                                                <span>Status</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Pilih jika ingin Close data"></i>
                                            </label>
                                        @endif
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('supl_status')is-invalid @enderror" name="supl_status" id="supl_status" data-control="select2" data-placeholder="Pilih Status">
                                            <option></option>
                                            @if ($data->supl_status == "NW")
                                                <option value="NW" class="text-center" {{ old('supl_status') ? (old('supl_status') == 'NW' ? 'selected' : '') : ($data->supl_status == 'NW' ? 'selected' : '') }}>Baru Disimpan</option>
                                            @elseif ($data->supl_status == "NA")
                                                <option value="AP" class="text-center" {{ old('supl_status') ? (old('supl_status') == 'AP' ? 'selected' : '') : ($data->supl_status == 'AP' ? 'selected' : '') }}>Approved</option>
                                                <option value="RJ" class="text-center" {{ old('supl_status') ? (old('supl_status') == 'RJ' ? 'selected' : '') : ($data->supl_status == 'RJ' ? 'selected' : '') }}>Reject</option>
                                            @else
                                                <option value="CL" class="text-center" {{ old('supl_status') ? (old('supl_status') == 'CL' ? 'selected' : '') : ($data->supl_status == 'CL' ? 'selected' : '') }}>Closed</option>
                                            @endif
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('supl_status')
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
                                        <label class="form-label d-flex align-items-center">
                                            <span class="required">Aktif?</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Pilih jika Data bisa di gunakan"></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-custom form-check-solid mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="is_active" name="is_active" {{ old('is_active') ? (old('is_active') == 'Y' ? 'checked' : '') : ($data->is_active == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="is_active">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-custom form-check-solid mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="is_active" name="is_active" {{ old('is_active') ? (old('is_active') == 'N' ? 'checked' : '') : ($data->is_active == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="is_active">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('is_active')
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
                                        <label class="form-label required">Deskripsi</label>
                                        <!--end::Label-->

                                        <!--begin::Textarea-->
                                        <textarea class="form-control form-control form-control-solid @error('supl_desc')is-invalid @enderror" name="supl_desc" data-kt-autosize="true">{{ old('supl_desc') ? old('supl_desc') : $data->supl_desc }}</textarea>
                                        <!--end::Textarea-->

                                        <!--begin::Error-->
                                        @error('supl_desc')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Step 6-->
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
                                @if ($data->supl_status == "NW")
                                    <button type="submit" class="btn btn-warning" data-kt-stepper-action="submit" name="submit" value="approval">
                                        <span class="indicator-label">
                                            Submit Approval
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                @endif

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
        if (stepper.getCurrentStepIndex() === 6) {
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

    callLocations({{ $data->prov_code }}, {{ $data->kota_code }}, {{ $data->kec_code }}, {{ $data->kel_code }}, {{ $data->zip_code }});
</script>
@endsection