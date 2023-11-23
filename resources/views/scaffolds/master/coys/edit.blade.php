@extends('dashboard.master')

@section('title', 'Perusahaan')

@section('content')
    <!--start::Col-->
    <div class="col-xxl-12">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0 flex-column">
                    <h3 class="fw-bolder m-0">Edit Company Data</h3>
                    <div class="text-muted fs-7 fw-bold">Edit Data Perusahaan</div>
                </div>
                <!--end::Card title-->
                <!--start::Button-->
                <!--start::Action-->
                <a href="{{ route('companies.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
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
                                <div class="stepper-desc">Informasi Kontak Cabang</div>
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
                    </div>
                    <!--end::Nav-->
                </div>
                <!--begin::Content-->
                <div class="flex-row-fluid py-lg-5 px-lg-15">
                    <!--begin::Form-->
                    <form class="form w-lg-500px mx-auto" action="{{ route('companies.update', $data->id) }}" method="POST">
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
                                        <input class="form-control form-control form-control-solid @error('coy_id')is-invalid @enderror" type="text" name="coy_id" value="{{ old('coy_id') ? old('coy_id') : $data->coy_id }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('coy_id')
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
                                        <input class="form-control form-control form-control-solid @error('coy_name')is-invalid @enderror" type="text" name="coy_name" value="{{ old('coy_name') ? old('coy_name') : $data->coy_name }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('coy_name')
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
                                        <label class="form-label required">Alamat</label>
                                        <!--end::Label-->

                                        <!--begin::Textarea-->
                                        <textarea class="form-control form-control form-control-solid @error('coy_addr')is-invalid @enderror" name="coy_addr" data-kt-autosize="true">{{ old('coy_addr') ? old('coy_addr') : $data->coy_addr }}</textarea>
                                        <!--end::Textarea-->

                                        <!--begin::Error-->
                                        @error('coy_addr')
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
                                        <input class="form-control form-control form-control-solid @error('empl_tlp_area')is-invalid @enderror" type="text" name="empl_tlp_area" value="{{ old('empl_tlp_area') ? old('empl_tlp_area') : $data->empl_tlp_area }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('empl_tlp_area')
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
                                        <input class="form-control form-control form-control-solid @error('empl_tlp')is-invalid @enderror" type="text" name="empl_tlp" value="{{ old('empl_tlp') ? old('empl_tlp') : $data->empl_tlp }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('empl_tlp')
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
                                        <input class="form-control form-control form-control-solid @error('empl_hp01')is-invalid @enderror" type="text" name="empl_hp01" value="{{ old('empl_hp01') ? old('empl_hp01') : $data->empl_hp01 }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('empl_hp01')
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
                                        <input class="form-control form-control form-control-solid @error('empl_hp02')is-invalid @enderror" type="text" name="empl_hp02" value="{{ old('empl_hp02') ? old('empl_hp02') : $data->empl_hp02 }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('empl_hp02')
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
                                <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Simpan
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

    callLocations({{ $data->prov_code }}, {{ $data->kota_code }}, {{ $data->kec_code }}, {{ $data->kel_code }}, {{ $data->zip_code }});

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
        if (stepper.getCurrentStepIndex() === 3) {
            document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-none")
            document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-inline-block")
            document.querySelector('[data-kt-stepper-action="next"]').classList.add("d-none")
        } else {
            document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-none")
            document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-inline-block")
            document.querySelector('[data-kt-stepper-action="next"]').classList.remove("d-none")
        }
    });

</script>
@endsection