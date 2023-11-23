@extends('dashboard.master')

@section('title', 'User')

@section('content')
    <!--start::Col-->
    <div class="col-xxl-12">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0 flex-column">
                    <h3 class="fw-bolder m-0">Edit User Data</h3>
                    <div class="text-muted fs-7 fw-bold">Edit Data User</div>
                </div>
                <!--end::Card title-->
                <!--start::Button-->
                <!--start::Action-->
                <a href="{{ route('users.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
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
                                <h3 class="stepper-title">Configuration</h3>
                                <div class="stepper-desc">Konfigurasi Akun User</div>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Step 2-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--begin::Content-->
                <div class="flex-row-fluid py-lg-5 px-lg-15">
                    <!--begin::Form-->
                    <form class="form w-lg-500px mx-auto" action="{{ route('users.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!--begin::Group-->
                        <div class="mb-5">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                @if (($data->role_id == 2))
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 mb-2">
                                            <span class="required">Karyawan</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Hanya Karyawan yang tidak memiliki akun muncul di sini"></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid @error('empl_id')is-invalid @enderror" name="empl_id" id="empl_id" data-control="select2" data-placeholder="Pilih Karyawan" disabled="disabled">
                                            <option></option>
                                            @foreach ($employees as $i)
                                                <option value="{{ $i->empl_id }}" {{ old('empl_id') ? (old('empl_id') == $i->empl_id ? 'selected' : '') : ($data->empl_id == $i->empl_id ? 'selected' : '') }}>{{ $i->empl_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('empl_id')
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
                                        <select class="form-select form-select-solid @error('empl_branch')is-invalid @enderror" name="empl_branch" id="empl_branch" data-control="select2" data-placeholder="Pilih Cabang">
                                            <option></option>
                                            @foreach ($branches as $i)
                                                <option value="{{ $i->branch_code }}" {{ old('empl_branch') ? (old('empl_branch') == $i->branch_code ? 'selected' : '') : ($data->empl_branch == $i->branch_code ? 'selected' : '') }}>{{ $i->branch_name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('empl_branch')
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
                                        <input class="form-control form-control form-control-solid @error('name')is-invalid @enderror" type="text" name="name" value="{{ old('name') ? old('name') : $data->name }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Main wrapper-->
                                    <div class="fv-row mb-10" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 mb-2">
                                                <span>Password</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Kosongkan jika tidak ingin diubah"></i>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="password" placeholder="" name="password" autocomplete="off" />
                                                <!--begin::Visibility toggle-->
                                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="bi bi-eye-slash fs-2"></i>
                                                    <i class="bi bi-eye fs-2 d-none"></i>
                                                </span>
                                                <!--begin::Error-->
                                                @error('password')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <!--end::Error-->
                                                <!--end::Visibility toggle-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Main wrapper-->
                                </div>
                                @else
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 mb-2">
                                            <span class="required">No KTP</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Hanya Karyawan yang tidak memiliki akun muncul di sini"></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('empl_id')is-invalid @enderror" type="text" user="empl_id" value="{{ old('empl_id') ? old('empl_id') : $data->empl_id }}" />
                                        <!--end::Input-->

                                        <!--start::Error-->
                                        @error('empl_id')
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
                                        <label class="form-label required">Nama di KTP</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('name')is-invalid @enderror" type="text" name="name" value="{{ old('name') ? old('name') : $data->name }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('name')
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
                                        <label class="form-label required">Nama User</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('username')is-invalid @enderror" type="text" user="username" value="{{ old('username') ? old('username') : $data->username }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('username')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Main wrapper-->
                                    <div class="fv-row mb-10" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 mb-2">
                                                <span class="required">Password</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Kosongkan jika tidak ingin diubah"></i>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="password" placeholder="" name="password" autocomplete="off" />
                                                <!--begin::Visibility toggle-->
                                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="bi bi-eye-slash fs-2"></i>
                                                    <i class="bi bi-eye fs-2 d-none"></i>
                                                </span>
                                                <!--begin::Error-->
                                                @error('password')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <!--end::Error-->
                                                <!--end::Visibility toggle-->
                                            </div>
                                            <!--end::Input wrapper-->

                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10 agen d-none">
                                                <!--begin::Label-->
                                                <label class="form-label">Copy KTP</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('copy_ktp_name')is-invalid @enderror" type="file" name="copy_ktp_name" />
                                                <!--end::Input-->

                                                <!--begin::Error-->
                                                @error('copy_ktp_name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <!--end::Error-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10 agen d-none">
                                                <!--begin::Label-->
                                                <label class="form-label">Copy NPWP</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('copy_npwp_name')is-invalid @enderror" type="file" name="copy_npwp_name" />
                                                <!--end::Input-->

                                                <!--begin::Error-->
                                                @error('copy_npwp_name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <!--end::Error-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Main wrapper-->
                                </div>
                                @endif
                            </div>
                            <!--begin::Step 1-->

                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 mb-2">
                                            <span class="required">Sesi Maksimal</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Banyak perangkat yang bisa digunakan oleh akun ini dalam waktu bersamaan (Sementara hanya bisa 1)"></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('max_session')is-invalid @enderror" type="text" name="max_session" value="{{ old('max_session') ? old('max_session') : $data->max_session }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('max_session')
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
                                        <label class="d-flex align-items-center fs-5 mb-2">
                                            <span class="required">Kadaluarsa Password</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Jika waktu habis harus mengganti password (Disetel 1 bulan sekali setiap mengganti password)"></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('expired_pwd')is-invalid @enderror" type="text" name="expired_pwd" value="{{ old('expired_pwd') ? Carbon\Carbon::parse(old('expired_pwd'))->format('Y-m-d') : Carbon\Carbon::parse($data->expired_pwd)->format('Y-m-d') }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('expired_pwd')
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
    <script>
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
            if (stepper.getCurrentStepIndex() === 2) {
                document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-none")
                document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-inline-block")
                document.querySelector('[data-kt-stepper-action="next"]').classList.add("d-none")
            } else {
                document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-none")
                document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-inline-block")
                document.querySelector('[data-kt-stepper-action="next"]').classList.remove("d-none")
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
        }).mask("[name='email']");

        $("[name='expired_pwd']").daterangepicker({
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

        @if ($data->role_id == 3) 
        Inputmask("9999-9999-9999-9999", {
            "numericInput": true,
            "reverse": false
        }).mask("[name='empl_id']");
        @endif

    </script>
@endsection