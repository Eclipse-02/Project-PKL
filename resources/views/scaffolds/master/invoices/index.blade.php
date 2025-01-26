@extends('dashboard.master')

@section('title', 'Registrasi Acara')

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
                        <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}" style="">
                        </div>
                        <!--begin::Actions-->
                        <form action="{{ route('registerpackages.export') }}" method="POST">
                            @csrf
                            <div class="d-flex align-items-center py-1 mt-sm-0 mt-3">
                                <!--begin::Button-->
                                <input type="hidden" id="start_date" name="start_date">
                                <input type="hidden" id="end_date" name="end_date">
                                <button type="submit" class="btn btn-sm btn-success me-4">Export</button>
                                <!--end::Button-->
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
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Tanggal:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <div class="mb-0">
                                                        <input class="form-control form-control-solid" placeholder="Pick date rage" id="daterange"/>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <div class="mb-0">
                                                        <select data-column="5" class="form-control form-control-solid filter-select" data-control="select2">
                                                            <option value="">All</option>
                                                            <option value="NW">New</option>
                                                            <option value="AC">Active</option>
                                                            <option value="CL">Cancel</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            </div>
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
                        </form>
                        <!--end::Actions-->
                    </div>
                </div>
                <!--end::Stats-->
                <!--start::Table-->
                <table id="table" class="table table-striped gy-7 gs-7">
                    <!--start::Thead-->
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                            <th class="min-w-50px">No</th>
                            <th class="min-w-100px">No Aplikasi</th>
                            <th class="min-w-100px">Nama</th>
                            <th class="min-w-100px">No NPWP</th>
                            <th class="min-w-100px">Nama Kontak</th>
                            <th class="min-w-100px">No HP</th>
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
                    <h2>Create New Register Data <div class="text-muted fs-3 fw-bold d-inline"><span class="fw-bolder">/</span> Membuat Data Registrasi Baru</div></h2>
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
                                        <h3 class="stepper-title">Contact Details</h3>
                                        <div class="stepper-desc">Detail Kontak</div>
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
                                    <!--begin::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Package Details</h3>
                                        <div class="stepper-desc">Detail Paket</div>
                                    </div>
                                    <!--begin::Label-->
                                </div>
                                <!--end::Step 3-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form w-lg-500px mx-auto" action="{{ route('events.store') }}" method="POST">
                                @csrf

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
                                                    <input class="form-control form-control form-control-solid @error('evn_code')is-invalid @enderror" type="text" name="evn_code" value="" readonly="readonly" />
                                                    <!--end::Input-->
    
                                                    <!--begin::Error-->
                                                    @error('evn_code')
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
                                                    <input class="form-control form-control form-control-solid @error('evn_status')is-invalid @enderror" type="text" name="evn_status" value="New" readonly="readonly" />
                                                    <!--end::Input-->
    
                                                    <!--begin::Error-->
                                                    @error('evn_status')
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
                                                    <label class="form-label required">Paket</label>
                                                    <!--end::Label-->

                                                    <!--begin::Textarea-->
                                                    <select class="form-select form-select-solid @error('pkg_code')is-invalid @enderror" name="pkg_code" id="pkg_code" data-placeholder="Pilih Title">
                                                        <option></option>
                                                        @foreach ($packages as $i)
                                                            <option value="{{ $i->pkg_code }}" {{ old('pkg_code') == $i->pkg_code ? 'selected' : '' }}>{{ $i->pkg_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <!--end::Textarea-->

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
                                                    <input class="form-control form-control form-control-solid @error('evn_date')is-invalid @enderror" type="text" name="evn_date" value="{{ Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}" readonly="readonly" />
                                                    <!--end::Input-->
    
                                                    <!--begin::Error-->
                                                    @error('evn_date')
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
                                                <label class="form-label required">Nama Instansi</label>
                                                <!--end::Label-->

                                                <!--begin::Textarea-->
                                                <input class="form-control form-control form-control-solid @error('evn_name')is-invalid @enderror" type="text" name="evn_name" value="{{ old('evn_name') }}" />
                                                <!--end::Textarea-->

                                                <!--begin::Error-->
                                                @error('evn_name')
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
                                                <label class="form-label">Alamat</label>
                                                <!--end::Label-->

                                                <!--begin::Textarea-->
                                                <textarea class="form-control form-control form-control-solid @error('evn_addr')is-invalid @enderror" name="evn_addr" data-kt-autosize="true">{{ old('evn_addr') }}</textarea>
                                                <!--end::Textarea-->

                                                <!--begin::Error-->
                                                @error('evn_addr')
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
                                                <label class="form-label required">No NPWP</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('evn_npwp_no')is-invalid @enderror" type="text" name="evn_npwp_no" value="{{ old('evn_npwp_no') }}" />
                                                <!--end::Input-->

                                                <!--begin::Error-->
                                                @error('evn_npwp_no')
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
                                                <label class="form-label required">Contact Person</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('evn_contact')is-invalid @enderror" type="text" name="evn_contact" value="{{ old('evn_contact') }}" />
                                                <!--end::Input-->

                                                <!--begin::Error-->
                                                @error('evn_contact')
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
                                                <label class="form-label required">No HP</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('evn_tlp_no')is-invalid @enderror" type="text" name="evn_tlp_no" value="{{ old('evn_tlp_no') }}" />
                                                <!--end::Input-->

                                                <!--begin::Error-->
                                                @error('evn_tlp_no')
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
                                            <div class="fv-row mb-10 fail">
                                                <div class="text-center py-20 my-10">
                                                    <!--begin::Title-->
                                                    <h2 class="fs-2x fw-bolder mb-10">Ups!</h2>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <p class="text-gray-400 fs-4 fw-bold mb-10">Pilih Paket Terlebih Dahulu</p>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10 d-none success">
                                                <!--begin::Table wrapper-->
                                                <div class="table-responsive mb-10">
                                                    <!--begin::Table-->
                                                    <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" data-kt-element="items">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                                                <th class="min-w-300px w-475px">Details</th>
                                                                <th class="min-w-150px w-300px">Price Unit</th>
                                                                <th class="min-w-150px w-300px">Qty</th>
                                                                <th class="min-w-150px w-300px">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody id="dtl_tbody"></tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
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
$(function () {

    let table = $('#table').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        ajax: {
            "url": "{{ route('events.index') }}",
            "type": 'GET'
        },
        columns: [{
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                orderable: true,
                searchable: false
            },
            {
                data: "evn_code",
                name: "evn_code"
            },
            {
                data: "evn_name",
                name: "evn_name"
            },
            {
                data: "evn_npwp_no",
                name: "evn_npwp_no"
            },
            {
                data: "evn_contact",
                name: "evn_contact"
            },
            {
                data: "evn_tlp_no",
                name: "evn_tlp_no"
            },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false
            },
        ],
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
        if (stepper.getCurrentStepIndex() === 3) {
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

    $(document).on('change', '#pkg_code', function () {
        if ($('#pkg_code :selected').val() == '') {
            $('.fail').removeClass('d-none');
            $('.success').addClass('d-none');
        } else {
            $('.fail').addClass('d-none');
            $('.success').removeClass('d-none');
            $.ajax({
                type: "GET",
                url: "{{ route('packagedetails.api') }}?code=" + $('#pkg_code :selected').val(),
                success: function (data) {
                    data.forEach(element => {
                        $('#dtl_tbody').append(
                            '<tr id="item_' + element.dtl_sq_no + '">' +
                                '<td class="pe-7">' +
                                    '<input type="text" class="form-control form-control-solid" value="' + element.dtl_desc + '" name="dtl_desc[]" placeholder="Detail" readonly="readonly" />' +
                                '</td>' +
                                '<td class="pe-7">' +
                                    '<input type="text" class="form-control form-control-solid" value="' + element.dtl_price + '" name="dtl_unit_price[]" placeholder="Unit Price" readonly="readonly" />' +
                                '</td>' +
                                '<td class="pe-7">' +
                                    '<input type="text" class="form-control form-control-solid" name="dtl_qty[]" placeholder="Qty" />' +
                                '</td>' +
                                '<td class="pe-7">' +
                                    '<input type="text" class="form-control form-control-solid" value="0" name="dtl_price[]" placeholder="Price" readonly="readonly" />' +
                                '</td>' +
                            '</tr>'
                        );
                    });
                }
            });
        }
    });

    if ($('#pkg_code :selected').val() != '') {
        $('.fail').addClass('d-none');
        $('.success').removeClass('d-none');
        $.ajax({
            type: "GET",
            url: "{{ route('packagedetails.api') }}?code=" + $('#pkg_code :selected').val(),
            success: function (data) {
                data.forEach(element => {
                    $('#dtl_tbody').append(
                        '<tr id="item_' + element.dtl_sq_no + '">' +
                            '<td class="pe-7">' +
                                '<input type="text" class="form-control form-control-solid" value="' + element.dtl_desc + '" name="dtl_desc[]" placeholder="Detail" readonly="readonly" />' +
                            '</td>' +
                            '<td class="pe-7">' +
                                '<input type="text" class="form-control form-control-solid" value="' + element.dtl_price + '" name="dtl_unit_price[]" placeholder="Unit Price" readonly="readonly" />' +
                            '</td>' +
                            '<td class="pe-7">' +
                                '<input type="text" class="form-control form-control-solid" name="dtl_qty[]" placeholder="Qty" />' +
                            '</td>' +
                            '<td class="pe-7">' +
                                '<input type="text" class="form-control form-control-solid" value="0" name="dtl_price[]" placeholder="Price" readonly="readonly" />' +
                            '</td>' +
                        '</tr>'
                    );
                });
            }
        });
    }

    $(document).on('change', '[name="dtl_qty[]"]', function () {
        let price = $('[id^="item_"]').find('[name="dtl_unit_price[]"]').val();
        let qty = $('[id^="item_"]').find('[name="dtl_qty[]"]').val();
        let value = price * qty;
        $('[id^="item_"]').find('[name="dtl_price[]"]').val(value);
    });

    $('.filter-select').change(function() {
        table.column( $(this).data('column') )
            .search( $(this).val() )
            .draw();
    });

    Inputmask("9999-9999-9999-9999", {
        "numericInput": true,
        "reverse": false
    }).mask("[name='evn_npwp_no']");

    Inputmask({
        "mask": "+62 999-9999-9999",
        "placeholder": "+62 000-0000-0000"
    }).mask("[name='evn_tlp_no']");

    $.ajax({
        type: "GET",
        url: "{{ route('util.api',[auth()->user()->coy_id,auth()->user()->empl_branch]) }}",
        success: function (data) {
            var sequence =  data.last_value.toString().padStart(2, '0') + '{{ Carbon\Carbon::now()->format("mY") }}';

            $('[name="evn_code"]').val(sequence);
        }
    });

    select2Create(['pkg_code']);

});
</script>
@endsection