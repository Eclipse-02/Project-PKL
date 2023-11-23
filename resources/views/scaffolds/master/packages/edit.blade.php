@extends('dashboard.master')

@section('title', 'Paket')

@section('content')
    <!--start::Col-->
    <div class="col-xxl-12">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0 flex-column">
                    <h3 class="fw-bolder m-0">Edit Package Data</h3>
                    <div class="text-muted fs-7 fw-bold">Edit Data Paket</div>
                </div>
                <!--end::Card title-->
                <!--start::Button-->
                <!--start::Action-->
                <a href="{{ route('packages.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
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
            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid mt-10" id="kt_stepper_example_vertical" data-kt-stepper="true">
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
                                <h3 class="stepper-title">Information</h3>
                                <div class="stepper-desc">Informasi Paket</div>
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
                                <h3 class="stepper-title">Status</h3>
                                <div class="stepper-desc">Status Paket</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 3-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid py-lg-5 px-lg-15">
                    <!--begin::Form-->
                    <form class="form w-lg-500px mx-auto" action="{{ route('packages.update', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                                        <input class="form-control form-control form-control-solid @error('pkg_code')is-invalid @enderror" type="text" name="pkg_code" value="{{ old('pkg_code') ? old('pkg_code') : $data->pkg_code }}" disabled="disabled" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('pkg_code')
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
                                        <input class="form-control form-control form-control-solid @error('pkg_name')is-invalid @enderror" type="text" name="pkg_name" value="{{ old('pkg_name') ? old('pkg_name') : $data->pkg_name }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('pkg_name')
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
                                        <textarea class="form-control form-control form-control-solid @error('pkg_desc')is-invalid @enderror" name="pkg_desc" data-kt-autosize="true">{{ old('pkg_desc') ? old('pkg_desc') : $data->pkg_desc }}</textarea>
                                        <!--end::Textarea-->

                                        <!--begin::Error-->
                                        @error('pkg_desc')
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
                                        <label class="form-label required">Harga</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('pkg_price')is-invalid @enderror" type="text" name="pkg_price" value="{{ old('pkg_price') ? old('pkg_price') : $data->pkg_price }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('pkg_price')
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
                                        <label class="form-label required">Insentif Agen</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('pkg_price_agent')is-invalid @enderror" type="text" name="pkg_price_agent" value="{{ old('pkg_price_agent') ? old('pkg_price_agent') : $data->pkg_price_agent }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('pkg_price_agent')
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
                                        <label class="form-label required">Mulai</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('pkg_start')is-invalid @enderror" type="text" name="pkg_start" value="{{ old('pkg_start') ? old('pkg_start') : $data->pkg_start }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('pkg_start')
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
                                        <label class="form-label required">Akhir</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('pkg_closed')is-invalid @enderror" type="text" name="pkg_closed" value="{{ old('pkg_closed') ? old('pkg_closed') : $data->pkg_closed }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('pkg_closed')
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
                                        <label class="form-label">Gambar Paket</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="hidden" name="old_pkg_image" value="{{ $data->pkg_image }}">
                                        <input class="form-control form-control form-control-solid @error('pkg_image')is-invalid @enderror" type="file" name="pkg_image" value="{{ old('pkg_image') ? old('pkg_image') : $data->pkg_image }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('pkg_image')
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
                                        <label class="form-label required">Status</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('pkg_status')is-invalid @enderror" name="pkg_status" id="pkg_status" data-control="select2" data-placeholder="Pilih Status">
                                            <option></option>
                                            <option value="NW" {{ old('pkg_status') ? (old('pkg_status') == 'NW' ? 'selected' : '') : ($data->pkg_status == 'NW' ? 'selected' : '') }}>New</option>
                                            <option value="AC" {{ old('pkg_status') ? (old('pkg_status') == 'AC' ? 'selected' : '') : ($data->pkg_status == 'AC' ? 'selected' : '') }}>Aktif</option>
                                            <option value="CN" {{ old('pkg_status') ? (old('pkg_status') == 'CN' ? 'selected' : '') : ($data->pkg_status == 'CN' ? 'selected' : '') }}>Cancel</option>
                                            <option value="CL" {{ old('pkg_status') ? (old('pkg_status') == 'CL' ? 'selected' : '') : ($data->pkg_status == 'CL' ? 'selected' : '') }}>Closed</option>
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('pkg_status')
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
                                            <span class="required">Tampil</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Pilih jika Data tampil di Landing Page"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-custom form-check-solid mb-3">
                                            <input class="form-check-input" type="radio" value="Y" id="pkg_is_display" name="pkg_is_display" {{ old('pkg_is_display') ? (old('pkg_is_display') == 'Y' ? 'checked' : '') : ($data->pkg_is_display == 'Y' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="pkg_is_display">
                                                Ya
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Radio Button-->
                                        <div class="form-check form-check-custom form-check-solid mb-3">
                                            <input class="form-check-input" type="radio" value="N" id="pkg_is_display" name="pkg_is_display" {{ old('pkg_is_display') ? (old('pkg_is_display') == 'N' ? 'checked' : '') : ($data->pkg_is_display == 'N' ? 'checked' : '') }} />
                                            <label class="form-check-label" for="pkg_is_display">
                                                Tidak
                                            </label>
                                        </div>
                                        <!--end::Radio Button-->
                                        <!--begin::Error-->
                                        @error('pkg_is_display')
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
        // Currency
        Inputmask("decimal", {
            numericInput: true,
            groupSeparator: '.',
            radixPoint: ",",
            digits: 2,
            autoGroup: true,
            autoUnmask: true,
            prefix: 'Rp. ',
            placeholder: '0,00',
            androidHack: "rtfm",
            //clearIncomplete: !0,
        }).mask("[name='pkg_price']");

        Inputmask("decimal", {
            numericInput: true,
            groupSeparator: '.',
            radixPoint: ",",
            digits: 2,
            autoGroup: true,
            autoUnmask: true,
            prefix: 'Rp. ',
            placeholder: '0,00',
            androidHack: "rtfm",
            //clearIncomplete: !0,
        }).mask("[name='pkg_price_limit']");

        Inputmask("decimal", {
            numericInput: true,
            groupSeparator: '.',
            radixPoint: ",",
            digits: 2,
            autoGroup: true,
            autoUnmask: true,
            prefix: 'Rp. ',
            placeholder: '0,00',
            androidHack: "rtfm",
            //clearIncomplete: !0,
        }).mask("[name='pkg_price_agent']");

        Inputmask("decimal", {
            numericInput: true,
            groupSeparator: '.',
            radixPoint: ",",
            digits: 2,
            autoGroup: true,
            autoUnmask: true,
            prefix: 'Rp. ',
            placeholder: '0,00',
            androidHack: "rtfm",
            //clearIncomplete: !0,
        }).mask("[name='dtl_price']");

        $("[name='pkg_start']").daterangepicker({
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

        $("[name='pkg_closed']").daterangepicker({
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

</script>
@endsection