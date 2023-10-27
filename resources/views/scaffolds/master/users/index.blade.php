@extends('dashboard.master')

@section('title', 'User')

@section('content')
    <!--begin::Col-->
    <div class="col-xxl-12">
        <!--begin::Widget-->
        <div class="card card-xxl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column p-0">
                <!--begin::Stats-->
                <div class="flex-grow-1 card-p pb-0">
                    <div class="d-flex flex-stack flex-wrap">
                        <div class="me-2">
                            <a class="text-dark text-hover-primary fw-bolder fs-3">Data Table</a>
                            <div class="text-muted fs-7 fw-bold">Tabel Data</div>
                        </div>
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Wrapper-->
                            <div class="me-4">
                                <!--begin::Menu-->
                                <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Filter</a>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484bf44d957">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder d-inline">Filter Options</div>
                                        <span class="text-center text-muted text-uppercase fw-bolder"> / </span>
                                        <div class="text-muted fs-6 fw-bold d-inline">Opsi Filter</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <p class="fw-bold text-center">Tidak ada Filter untuk Tabel ini</p>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Button-->
                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#create_modal">Create</a>
                            <!--end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                </div>
                <!--end::Stats-->
                <!--start::Table-->
                <table class="table table-striped gy-7 gs-7">
                    <!--start::Thead-->
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                            <th class="min-w-50px">No</th>
                            <th class="min-w-100px">ID Karyawan</th>
                            <th class="min-w-100px">Cabang Karyawan</th>
                            <th class="min-w-100px">Terakhir Akses</th>
                            <th class="min-w-100px">Maksimal Sesi</th>
                            <th class="min-w-100px">Kadaluarsa Password</th>
                            <th class="min-w-100px">Nama User</th>
                            <th class="min-w-100px">Email</th>
                            <th class="min-w-150px text-center">AKSI</th>
                        </tr>
                    </thead>
                    <!--end::Thead-->
                    <!--start::Tbody-->
                    <tbody>
                    </tbody>
                    <!--end::Tbody-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Widget-->
    </div>
    <!--end::Col-->

    <!--begin::Modal - Create-->
    <div class="modal fade" id="create_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Create New Data <div class="text-muted fs-3 fw-bold d-inline"><span class="fw-bolder">/</span> Membuat Data Baru</div></h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_stepper_example_vertical" data-kt-stepper="true">
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
                            <form class="form w-lg-500px mx-auto" action="{{ route('users.store') }}" method="POST">
                                @csrf

                                <!--begin::Group-->
                                <div class="mb-5">
                                    <!--begin::Step 1-->
                                    <div class="current" data-kt-stepper-element="content">
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
                                                <select class="form-select form-select-solid @error('empl_id')is-invalid @enderror" name="empl_id" id="empl_id" data-control="select2" data-placeholder="Pilih Karyawan" data-dropdown-parent="#create_modal">
                                                    <option></option>
                                                    @foreach ($employees as $i)
                                                        <option value="{{ $i->empl_id }}" {{ old('empl_id') == $i->empl_id ? 'selected' : '' }}>{{ $i->empl_name }}</option>
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
                                                <select class="form-select form-select-solid @error('empl_branch')is-invalid @enderror" name="empl_branch" id="empl_branch" data-control="select2" data-placeholder="Pilih Cabang" data-dropdown-parent="#create_modal">
                                                    <option></option>
                                                    @foreach ($branches as $i)
                                                        <option value="{{ $i->branch_code }}" {{ old('empl_branch') == $i->branch_code ? 'selected' : '' }}>{{ $i->branch_name }}</option>
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
                                                <input class="form-control form-control form-control-solid @error('name')is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" />
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
                                                <label class="form-label required">Email</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('email')is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" />
                                                <!--end::Input-->

                                                <!--begin::Error-->
                                                @error('email')
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
                                                    <label class="form-label required">Password</label>
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
                                                <input class="form-control form-control form-control-solid @error('max_session')is-invalid @enderror" type="text" name="max_session" value="{{ old('max_session') ? old('max_session') : 1 }}" />
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
                                                <input class="form-control form-control form-control-solid @error('expired_pwd')is-invalid @enderror" type="text" name="expired_pwd" value="{{ old('expired_pwd') }}" />
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
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create-->
@endsection

@section('scripts')
<script type="text/javascript">
    $(function() {

        var table = $('.table').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: {
                "url": "{{ route('users.index') }}",
				"type": "GET"
            },
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "empl_id",
                    name: "empl_id"
                },
                {
                    data: "empl_branch",
                    name: "empl_branch"
                },
                {
                    data: "access_last",
                    name: "access_last"
                },
                {
                    data: "max_session",
                    name: "max_session"
                },
                {
                    data: "expired_pwd",
                    name: "expired_pwd"
                },
                {
                    data: "name",
                    name: "name"
                },
                {
                    data: "email",
                    name: "email"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ]
        });

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

    });
</script>
@endsection