@extends('dashboard.master')

@section('title', 'Update Bank')

@section('content')
    <!--begin::Col-->
    <div class="col-xxl-12">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0 flex-column">
                    <h3 class="fw-bolder m-0">Edit Bank Data</h3>
                    <div class="text-muted fs-7 fw-bold">Edit Data Bank</div>
                </div>
                <!--end::Card title-->
                <!--start::Button-->
                <!--start::Action-->
                <a href="{{ route('banks.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
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
            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid pt-10" id="kt_stepper_example_vertical">
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
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Region</h3>
                                <div class="stepper-desc">Informasi Mengenai Lokasi</div>
                            </div>
                            <!--end::Label-->
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
                                <h3 class="stepper-title">Active</h3>
                                <div class="stepper-desc">Aktif Atau Menonaktifkan Data</div>
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
                    <form class="form w-lg-500px mx-auto" action="{{ route('banks.update', $data->id) }}" method="POST">
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
                                        <input class="form-control form-control form-control-solid @error('bank_code')is-invalid @enderror" type="text" name="bank_code" value="{{ old('bank_code') ? old('bank_code') : $data->bank_code }}" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('bank_code')
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
                                        <input class="form-control form-control form-control-solid @error('bank_name')is-invalid @enderror" type="text" name="bank_name" value="{{ old('bank_name') ? old('bank_name') : $data->bank_name }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('bank_name')
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
                                        <input class="form-control form-control form-control-solid @error('bank_branch')is-invalid @enderror" type="text" name="bank_branch" value="{{ old('bank_branch') ? old('bank_branch') : $data->bank_branch }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('bank_branch')
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
                            <!--begin::Step 2-->

                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
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
                                            <input class="form-check-input" type="radio" value="Y" id="is_active" name="is_active" {{ old('is_active') ? (old('is_active') == "Y" ? 'checked' : '') : ($data->is_active == "Y" ? 'checked' : '') }} />
                                            <label class="form-check-label" for="is_active">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-custom form-check-solid mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="is_active" name="is_active" {{ old('is_active') ? (old('is_active') == "N" ? 'checked' : '') : ($data->is_active == "N" ? 'checked' : '') }} />
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