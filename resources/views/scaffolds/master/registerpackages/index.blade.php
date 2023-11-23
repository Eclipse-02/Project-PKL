@extends('dashboard.master')

@section('title', 'Registrasi Jamaah')

@role('office')
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
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Jemaah Dari:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <div class="mb-0">
                                                        <select data-column="4" class="form-control form-control-solid filter-select" data-control="select2">
                                                            <option value="">All</option>
                                                            @foreach ($suppliers as $i)
                                                                <option value="{{ $i->supl_code }}">{{ $i->supl_name }}</option>
                                                            @endforeach
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
                <table class="table table-striped gy-7 gs-7">
                    <!--start::Thead-->
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                            <th class="min-w-50px">No</th>
                            <th class="min-w-100px">No Aplikasi</th>
                            <th class="min-w-100px">Nama</th>
                            <th class="min-w-100px">Tanggal Aplikasi</th>
                            <th class="min-w-100px">Jemaah Dari</th>
                            <th class="min-w-100px">Status Aplikasi</th>
                            <th class="min-w-100px">Tanggal Posting</th>
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
                            <form class="form w-lg-500px mx-auto" action="@role('office'){{ route('registerpackages.store') }}@endrole @role('agen'){{ route('agen.registerpackages.store') }}@endrole" method="POST" enctype="multipart/form-data">
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
                                                    <input class="form-control form-control form-control-solid @error('appl_no')is-invalid @enderror" type="text" name="appl_no" value="{{ $utilities->last_value }}" readonly="readonly" />
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
                                                    <input class="form-control form-control form-control-solid @error('appl_st')is-invalid @enderror" type="text" name="appl_st" value="New" readonly="readonly" />
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
                                                    <label class="form-label">Nama Paket</label>
                                                    <!--end::Label-->
    
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid @error('pkg_code')is-invalid @enderror" name="pkg_code" id="pkg_code" data-placeholder="Pilih Paket">
                                                        <option></option>
                                                        @foreach ($packages as $i)
                                                            <option value="{{ $i->pkg_code }}" {{ old('pkg_code') == $i->pkg_code ? 'selected' : '' }}>{{ $i->pkg_name }}</option>
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
                                                    <input class="form-control form-control form-control-solid @error('appl_date')is-invalid @enderror" type="text" name="appl_date" value="{{ Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}" readonly="readonly" />
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
                                                <label class="form-label">Nama Konsumen</label>
                                                <!--end::Label-->

                                                <!--begin::Textarea-->
                                                <input class="form-control form-control form-control-solid @error('appl_name')is-invalid @enderror" type="text" name="appl_name" value="{{ old('appl_name') }}" />
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
                                                <label class="form-label">Title</label>
                                                <!--end::Label-->

                                                <!--begin::Textarea-->
                                                <select class="form-select form-select-solid @error('appl_title')is-invalid @enderror" name="appl_title" id="appl_title" data-placeholder="Pilih Title">
                                                    <option></option>
                                                    <option value="MR" {{ old('appl_title') == 'MR' ? 'selected' : '' }}>Mr</option>
                                                    <option value="MRS" {{ old('appl_title') == 'MRS' ? 'selected' : '' }}>Mrs</option>
                                                    <option value="MS" {{ old('appl_title') == 'MS' ? 'selected' : '' }}>Ms</option>
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
                                                    <label class="form-label">Jenis Kelamin</label>
                                                    <!--end::Label-->
    
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid @error('appl_gender')is-invalid @enderror" name="appl_gender" id="appl_gender" data-placeholder="Pilih Jenis Kelamin">
                                                        <option></option>
                                                        <option value="1" {{ old('appl_gender') == '1' ? 'selected' : '' }}>Laki-Laki</option>
                                                        <option value="2" {{ old('appl_gender') == '2' ? 'selected' : '' }}>Perempuan</option>
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
                                                    <label class="form-label">Status</label>
                                                    <!--end::Label-->
    
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid @error('appl_status')is-invalid @enderror" name="appl_status" id="appl_status" data-placeholder="Pilih Status">
                                                        <option></option>
                                                        <option value="1" {{ old('appl_status') == '1' ? 'selected' : '' }}>Kawin</option>
                                                        <option value="2" {{ old('appl_status') == '2' ? 'selected' : '' }}>Belum Kawin</option>
                                                        <option value="3" {{ old('appl_status') == '3' ? 'selected' : '' }}>Cerai</option>
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
                                                <select class="form-select form-select-solid @error('appl_id_type')is-invalid @enderror" name="appl_id_type" id="appl_id_type" data-placeholder="Pilih Tipe ID">
                                                    <option></option>
                                                    <option value="1" {{ old('appl_id_type') == '1' ? 'selected' : '' }}>KTP</option>
                                                    <option value="2" {{ old('appl_id_type') == '2' ? 'selected' : '' }}>SIM</option>
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
                                                <input class="form-control form-control form-control-solid @error('appl_id_no')is-invalid @enderror" type="text" name="appl_id_no" value="{{ old('appl_id_no') }}" />
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
                                                    <label class="form-label">Tempat Lahir</label>
                                                    <!--end::Label-->
    
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control form-control-solid @error('appl_birth_place')is-invalid @enderror" type="text" name="appl_birth_place" value="{{ old('appl_birth_place') }}" />
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
                                                    <label class="form-label">Tanggal Lahir</label>
                                                    <!--end::Label-->
    
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control form-control-solid @error('appl_birth_date')is-invalid @enderror" type="text" name="appl_birth_date" value="{{ old('appl_birth_date') }}" />
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
                                                <label class="form-label">Alamat</label>
                                                <!--end::Label-->

                                                <!--begin::Textarea-->
                                                <textarea class="form-control form-control form-control-solid @error('appl_addr')is-invalid @enderror" name="appl_addr" data-kt-autosize="true">{{ old('appl_addr') }}</textarea>
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
                                                <label class="form-label">Provinsi</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('prov_code')is-invalid @enderror" name="prov_code" id="prov_code" data-placeholder="Pilih Provinsi">
                                                    <option></option>
                                                    @foreach ($provinsis as $i)
                                                        <option value="{{ $i->prov_code }}" {{ old('prov_code') == $i->prov_code ? 'selected' : '' }}>{{ $i->provinsi }}</option>
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
                                                <label class="form-label">Kota</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('kota_code')is-invalid @enderror" name="kota_code" id="kota_code" disabled="disabled">
                                                    <option value="" class="text-center">Pilih Provinsi Terlebih Dahulu</option>
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
                                                <label class="form-label">Kecamatan</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('kec_code')is-invalid @enderror" name="kec_code" id="kec_code" disabled="disabled">
                                                    <option value="" class="text-center">Pilih Kota Terlebih Dahulu</option>
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
                                                <label class="form-label">Kelurahan</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('kel_code')is-invalid @enderror" name="kel_code" id="kel_code" disabled="disabled">
                                                    <option value="" class="text-center">Pilih Kecamatan Terlebih Dahulu</option>
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
                                                <label class="form-label">Warga Negara</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('con_code')is-invalid @enderror" name="con_code" id="con_code" data-placeholder="Pilih Warga Negara">
                                                    <option></option>
                                                    @foreach ($countries as $i)
                                                        <option value="{{ $i->con_code }}" {{ old('con_code') == $i->con_code ? 'selected' : '' }}>{{ $i->con_name }}</option>
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
                                                <label class="form-label">Pendidikan</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('edu_code')is-invalid @enderror" name="edu_code" id="edu_code" data-placeholder="Pilih Pendidikan">
                                                    <option></option>
                                                    @foreach ($edus as $i)
                                                        <option value="{{ $i->edu_code }}" {{ old('edu_code') == $i->edu_code ? 'selected' : '' }}>{{ $i->edu_name }}</option>
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
                                                <label class="form-label">Jabatan</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('job_code')is-invalid @enderror" name="job_code" id="job_code" data-placeholder="Pilih Jabatan">
                                                    <option></option>
                                                    @foreach ($jobs as $i)
                                                        <option value="{{ $i->job_code }}" {{ old('job_code') == $i->job_code ? 'selected' : '' }}>{{ $i->job_name }}</option>
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
                                                <label class="form-label">Nama Orang Tua</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_fth_name')is-invalid @enderror" type="text" name="appl_fth_name" value="{{ old('appl_fth_name') }}" />
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
                                                <label class="form-label">Relasi</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('rel_code')is-invalid @enderror" name="rel_code" id="rel_code" data-placeholder="Pilih Relasi">
                                                    <option></option>
                                                    @foreach ($relations as $i)
                                                        <option value="{{ $i->rel_code }}" {{ old('rel_code') == $i->rel_code ? 'selected' : '' }}>{{ $i->rel_name }}</option>
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
                                                <label class="form-label">Mahram</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_mahram')is-invalid @enderror" type="text" name="appl_mahram" value="{{ old('appl_mahram') }}" />
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
                                                <input class="form-control form-control form-control-solid text-uppercase @error('appl_pass_no')is-invalid @enderror" type="text" name="appl_pass_no" value="{{ old('appl_pass_no') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('appl_pass_name')is-invalid @enderror" type="text" name="appl_pass_name" value="{{ old('appl_pass_name') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('appl_pass_iss_date')is-invalid @enderror" type="text" name="appl_pass_iss_date" value="{{ old('appl_pass_iss_date') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('appl_pass_exp_date')is-invalid @enderror" type="text" name="appl_pass_exp_date" value="{{ old('appl_pass_exp_date') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('appl_pass_iss_place')is-invalid @enderror" type="text" name="appl_pass_iss_place" value="{{ old('appl_pass_iss_place') }}" />
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
                                                <label class="form-label">Nama Di Kartu</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_vac_name_id')is-invalid @enderror" type="text" name="appl_vac_name_id" id="appl_vac_name_id" value="{{ old('appl_vac_name_id') }}" />
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
                                                <label class="form-label">Nama Vaksin</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('vc_code_01')is-invalid @enderror" name="vc_code_01" id="vc_code_01" data-placeholder="Pilih Vaksin">
                                                    <option></option>
                                                    @foreach ($vaccines as $i)
                                                        <option value="{{ $i->vc_code }}" {{ old('vc_code_01') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }}</option>
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
                                                <label class="form-label">Tanggal Vaksin</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_vac_id_date_01')is-invalid @enderror vac" type="text" name="appl_vac_id_date_01" value="{{ old('appl_vac_id_date_01') }}" />
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
                                                <label class="form-label">Nama Vaksin</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('vc_code_02')is-invalid @enderror" name="vc_code_02" id="vc_code_02"  data-placeholder="Pilih Vaksin">
                                                    <option></option>
                                                    @foreach ($vaccines as $i)
                                                        <option value="{{ $i->vc_code }}" {{ old('vc_code_02') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }}</option>
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
                                                <label class="form-label">Tanggal Vaksin</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_vac_id_date_02')is-invalid @enderror vac" type="text" name="appl_vac_id_date_02" value="{{ old('appl_vac_id_date_02') }}" />
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
                                                <label class="form-label">Nama Vaksin</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('vc_code_03')is-invalid @enderror" name="vc_code_03" id="vc_code_03"  data-placeholder="Pilih Vaksin">
                                                    <option></option>
                                                    @foreach ($vaccines as $i)
                                                        <option value="{{ $i->vc_code }}" {{ old('vc_code_03') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }}</option>
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
                                                <label class="form-label">Tanggal Vaksin</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_vac_id_date_03')is-invalid @enderror vac" type="text" name="appl_vac_id_date_03" value="{{ old('appl_vac_id_date_03') }}" />
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
                                                <label class="form-label">Nama Vaksin</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('vc_code_04')is-invalid @enderror" name="vc_code_04" id="vc_code_04"  data-placeholder="Pilih Vaksin">
                                                    <option></option>
                                                    @foreach ($vaccines as $i)
                                                        <option value="{{ $i->vc_code }}" {{ old('vc_code_04') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }}</option>
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
                                                <label class="form-label">Tanggal Vaksin</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_vac_id_date_04')is-invalid @enderror vac" type="text" name="appl_vac_id_date_04" value="{{ old('appl_vac_id_date_04') }}" />
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
                                                <label class="form-label">Jemaah Dari</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('supl_code')is-invalid @enderror" name="supl_code" id="supl_code" data-placeholder="Pilih Jemaah">
                                                    <option></option>
                                                    @foreach ($suppliers as $i)
                                                        <option value="{{ $i->supl_code }}" {{ old('supl_code') == $i->supl_code ? 'selected' : '' }}>{{ $i->supl_name }}</option>
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
                                                <label class="form-label">No Telp</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_tlp')is-invalid @enderror" type="text" name="appl_tlp" value="{{ old('appl_tlp') }}" />
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
                                                <label class="form-label">Email</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_email')is-invalid @enderror" type="text" name="appl_email" value="{{ old('appl_email') }}" />
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
                                                    <label class="form-label">Foto Full?</label>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="appl_is_img_full" name="appl_is_img_full" {{ old('appl_is_img_full') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="appl_is_img_full">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="appl_is_img_full" name="appl_is_img_full" {{ old('appl_is_img_full') == "N" ? 'checked' : ''  }} />
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
                                                <label class="form-label">File</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_is_img_full_name')is-invalid @enderror" type="file" name="appl_is_img_full_name" id="appl_is_img_full_name" />
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
                                                    <label class="form-label">Foto Setengah?</label>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="appl_is_img_half" name="appl_is_img_half" {{ old('appl_is_img_half') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="appl_is_img_half">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="appl_is_img_half" name="appl_is_img_half" {{ old('appl_is_img_half') == "N" ? 'checked' : ''  }} />
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
                                                <label class="form-label">File</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_is_img_half_name')is-invalid @enderror" type="file" name="appl_is_img_half_name" id="appl_is_img_half_name" />
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
                                                    <label class="form-label">Fisik Passport?</label>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="appl_is_pass" name="appl_is_pass" {{ old('appl_is_pass') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="appl_is_pass">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="appl_is_pass" name="appl_is_pass" {{ old('appl_is_pass') == "N" ? 'checked' : ''  }} />
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
                                                <label class="form-label">File</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_is_pass_name')is-invalid @enderror" type="file" name="appl_is_pass_name" id="appl_is_pass_name" />
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
                                                    <label class="form-label">Buku Kuning?</label>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="appl_is_yb" name="appl_is_yb" {{ old('appl_is_yb') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="appl_is_yb">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="appl_is_yb" name="appl_is_yb" {{ old('appl_is_yb') == "N" ? 'checked' : ''  }} />
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
                                                <label class="form-label">File</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_is_yb_name')is-invalid @enderror" type="file" name="appl_is_yb_name" id="appl_is_yb_name" />
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
                                                    <label class="form-label">Copy KTP?</label>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_id" name="appl_is_copy_id" {{ old('appl_is_copy_id') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="appl_is_copy_id">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="appl_is_copy_id" name="appl_is_copy_id" {{ old('appl_is_copy_id') == "N" ? 'checked' : ''  }} />
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
                                                <label class="form-label">File</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_is_id_name')is-invalid @enderror" type="file" name="appl_is_id_name" id="appl_is_id_name" />
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
                                                    <label class="form-label">Copy KK?</label>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_kk" name="appl_is_copy_kk" {{ old('appl_is_copy_kk') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="appl_is_copy_kk">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="appl_is_copy_kk" name="appl_is_copy_kk" {{ old('appl_is_copy_kk') == "N" ? 'checked' : ''  }} />
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
                                                <label class="form-label">File</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_is_kk_name')is-invalid @enderror" type="file" name="appl_is_kk_name" id="appl_is_kk_name" />
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
                                                    <label class="form-label">Copy Passport?</label>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_pass" name="appl_is_copy_pass" {{ old('appl_is_copy_pass') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="appl_is_copy_pass">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="appl_is_copy_pass" name="appl_is_copy_pass" {{ old('appl_is_copy_pass') == "N" ? 'checked' : ''  }} />
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
                                                <label class="form-label">File</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_is_copy_pass_name')is-invalid @enderror" type="file" name="appl_is_copy_pass_name" id="appl_is_copy_pass_name" />
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
                                                    <label class="form-label">Copy Akta N?</label>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_akta_n" name="appl_is_copy_akta_n" {{ old('appl_is_copy_akta_n') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="appl_is_copy_akta_n">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="appl_is_copy_akta_n" name="appl_is_copy_akta_n" {{ old('appl_is_copy_akta_n') == "N" ? 'checked' : ''  }} />
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
                                                <label class="form-label">File</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_is_akta_n_name')is-invalid @enderror" type="file" name="appl_is_akta_n_name" id="appl_is_akta_n_name" />
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
                                                    <label class="form-label">Copy Akta Lahir?</label>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_akta_l" name="appl_is_copy_akta_l" {{ old('appl_is_copy_akta_l') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="appl_is_copy_akta_l">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="appl_is_copy_akta_l" name="appl_is_copy_akta_l" {{ old('appl_is_copy_akta_l') == "N" ? 'checked' : ''  }} />
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
                                                <label class="form-label">File</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('appl_is_akta_l_name')is-invalid @enderror" type="file" name="appl_is_akta_l_name" id="appl_is_akta_l_name" />
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

    var start_date = moment().subtract(1, 'M');
    $('#start_date').val(start_date.format('YYYY-MM-DD'));

    var end_date = moment();
    $('#end_date').val(end_date.format('YYYY-MM-DD'));

    $('#daterange').daterangepicker({
        startDate : start_date,
        endDate : end_date
    }, function(start_date, end_date){
        $('#daterange span').html(start_date.format('MMMM D, YYYY') + ' - ' + end_date.format('MMMM D, YYYY'));
        $('#start_date').val(start_date.format('YYYY-MM-DD'));
        $('#end_date').val(end_date.format('YYYY-MM-DD'));

        table.draw();
    });

    $('#daterange').change(function(){
        sessionStorage.setItem('dateRange', $(this).val());
    });

    let table = $('.table').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        ajax: {
            "url": "{{ route('registerpackages.index') }}",
            "data": function(data){
                data.from_date = $('#daterange').data('daterangepicker').startDate.format('YYYY-MM-DD');
                data.to_date = $('#daterange').data('daterangepicker').endDate.format('YYYY-MM-DD');
            }},
        columns: [{
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                orderable: true,
                searchable: false
            },
            {
                data: "appl_no",
                name: "appl_no"
            },
            {
                data: "appl_name",
                name: "appl_name"
            },
            {
                data: "appl_date",
                name: "appl_date"
            },
            {
                data: "supl_code",
                name: "supl_code"
            },
            {
                data: "appl_st",
                render: function (data) {
                    if (data == "NW") {
                        return "New";
                    } else if (data == "AC") {
                        return "Accept";
                    } else {
                        return "Cancel"
                    }
                }
            },
            {
                data: "appl_posting_date",
                name: "appl_posting_date"
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

    $(document).ready(function() {
        if ($('[name="appl_id_type"]').val() == "") {
            $('[name="appl_id_no"]').attr('disabled', true);
            $('[name="appl_id_no"]').attr('placeholder', 'Pilih Tipe ID Terlebih Dahulu');
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
        if ($('[name="appl_id_no"]').val() != "") {
            $('[name="appl_id_no"]').attr('disabled', true);
            $('[name="appl_id_no"]').attr('placeholder', '');
        } else {
            $('[name="appl_id_no"]').attr('disabled', false);
            $('[name="appl_id_no"]').attr('placeholder', 'Pilih Tipe ID Terlebih Dahulu');
        }
    });

    $('form').on('click', '[name="appl_is_img_full"]', function() {
        if ($('[name="appl_is_img_full"]:checked').val() == 'Y') {
            $('[name="appl_is_img_full_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_img_full_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_img_half"]', function() {
        if ($('[name="appl_is_img_half"]:checked').val() == 'Y') {
            $('[name="appl_is_img_half_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_img_half_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_pass"]', function() {
        if ($('[name="appl_is_pass"]:checked').val() == 'Y') {
            $('[name="appl_is_pass_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_pass_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_yb"]', function() {
        if ($('[name="appl_is_yb"]:checked').val() == 'Y') {
            $('[name="appl_is_yb_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_yb_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_id"]', function() {
        if ($('[name="appl_is_copy_id"]:checked').val() == 'Y') {
            $('[name="appl_is_id_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_id_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_kk"]', function() {
        if ($('[name="appl_is_copy_kk"]:checked').val() == 'Y') {
            $('[name="appl_is_kk_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_kk_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_pass"]', function() {
        if ($('[name="appl_is_copy_pass"]:checked').val() == 'Y') {
            $('[name="appl_is_copy_pass_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_copy_pass_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_akta_n"]', function() {
        if ($('[name="appl_is_copy_akta_n"]:checked').val() == 'Y') {
            $('[name="appl_is_akta_n_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_akta_n_name"]').attr('disabled', true);
        }
    });

    $('form').on('click', '[name="appl_is_copy_akta_l"]', function() {
        if ($('[name="appl_is_copy_akta_l"]:checked').val() == 'Y') {
            $('[name="appl_is_akta_l_name"]').attr('disabled', false);
        } else {
            $('[name="appl_is_akta_l_name"]').attr('disabled', true);
        }
    });

    $('.filter-select').change(function() {
        table.column( $(this).data('column') )
            .search( $(this).val() )
            .draw();
    });

    Inputmask("9999-9999-9999-9999", {
        "numericInput": true,
        "reverse": false
    }).mask("[name='appl_id_no']");

    Inputmask({
        "mask": "a 9999999",
        "placeholder": "X 0000000"
    }).mask("[name='appl_pass_no']");

    $("[name='appl_birth_date']").daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10),
        opens: 'right',
        drops: 'auto',
        locale: {
            format: 'YYYY-MM-DD'
        }
    }).on("apply.daterangepicker", function (e, picker) {
        picker.element.val(picker.startDate.format(picker.locale.format));
    });

    $("[name='appl_pass_iss_date']").daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10),
        opens: 'right',
        drops: 'auto',
        locale: {
            format: 'YYYY-MM-DD'
        }
    }).on("apply.daterangepicker", function (e, picker) {
        picker.element.val(picker.startDate.format(picker.locale.format));
    });

    $("[name='appl_pass_exp_date']").daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10),
        opens: 'right',
        drops: 'auto',
        locale: {
            format: 'YYYY-MM-DD'
        }
    }).on("apply.daterangepicker", function (e, picker) {
        picker.element.val(picker.startDate.format(picker.locale.format));
    });

    $(".vac").daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10),
        opens: 'right',
        drops: 'auto',
        locale: {
            format: 'YYYY-MM-DD'
        }
    }).on("apply.daterangepicker", function (e, picker) {
        picker.element.val(picker.startDate.format(picker.locale.format));
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

    $.ajax({
        type: "GET",
        url: "{{ route('util.api', [auth()->user()->coy_id, auth()->user()->empl_branch]) }}",
        success: function (data) {
            if (data.is_cycle == 'Y') {
                var sequence = '{{ auth()->user()->empl_branch }}' + 'ORD' + '{{ Carbon\Carbon::now()->format("y") }}' + data.last_value.toString().padStart(8, '0');
            } else if (data.is_cycle == 'M') {
                var sequence = '{{ auth()->user()->empl_branch }}' + 'ORD' + '{{ Carbon\Carbon::now()->format("ym") }}' + data.last_value.toString().padStart(8, '0');
            } else {
                var sequence = '{{ auth()->user()->empl_branch }}' + 'ORD' + '{{ Carbon\Carbon::now()->format("ymd") }}' + data.last_value.toString().padStart(8, '0');
            }

            $('[name="appl_no"]').val(sequence);
        }
    });

    select2Create(['pkg_code', 'appl_title', 'appl_gender', 'appl_st', 'appl_status', 'appl_id_type', 'prov_code', 'con_code', 'edu_code', 'job_code', 'rel_code', 'vc_code_01', 'vc_code_02', 'vc_code_03', 'vc_code_04', 'supl_code'])

</script>
@endsection
@endrole

@role('agen')
@section('content')
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                @foreach ($data as $i)
                <!--begin::Col-->
                <div class="col-md-4">
                    <!--begin::Card-->
                    <div class="card card-flush h-md-100">
                        <img src="{{ asset('storage/pkg/pkg-img/' . $i->pkg_image) }}" class="card-img-top" style="height: 200px">
                        <!--begin::Card header-->
                        <div class="card-header flex-column justify-content-center my-3">
                            <!--begin::Card title-->
                            <div class="card-title justify-content-center">
                                <h2>{{ $i->pkg_name }}</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Description-->
                            <div class="text-gray-400 fw-bold text-center mb-5">{{ $i->pkg_desc }}</div>
                            <!--end::Description-->
                            <!--begin::Price-->
                            <div class="text-center">
                                <span class="mb-2 text-primary">Rp.</span>
                                <span class="fs-1 fw-bolder text-primary">{{ number_format($i->pkg_price, 0, ',', '.') }}</span>
                            </div>
                            <!--end::Price-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-1">
                            <!--begin::Descriptions-->
                            <div class="d-flex flex-column text-gray-600">
                                @foreach ($i->details as $j)
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>
                                        {{ $j->dtl_desc }} 
                                    </div>
                                @endforeach
                                @if (count($i->details) < 1)
                                    <div class="d-flex align-items-center justify-content-center py-2">
                                        No details have been created
                                    </div>
                                @endif
                            </div>
                            <!--end::Descriptions-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer flex-wrap pt-0">
                            <button class="btn btn-light btn-active-primary w-100 my-1 modal_create" data-bs-toggle="modal" data-bs-target="#create_modal" value="{{ $i->pkg_code }}">Register</button>
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                @endforeach
            </div>
            <!--start::Modal - Create-->
            <div class="modal fade" id="create_modal"aria-hidden="true">
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
                                    <form class="form w-lg-500px mx-auto" action="@role('office'){{ route('registerpackages.store') }}@endrole @role('agen'){{ route('agen.registerpackages.store') }}@endrole" method="POST" enctype="multipart/form-data">
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
                                                            <input class="form-control form-control form-control-solid @error('appl_no')is-invalid @enderror" type="text" name="appl_no" value="{{ $utilities->last_value }}" readonly="readonly" />
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
                                                            <input class="form-control form-control form-control-solid @error('appl_st')is-invalid @enderror" type="text" name="appl_st" value="New" readonly="readonly" />
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
                                                            <label class="form-label">Paket Produk</label>
                                                            <!--end::Label-->
            
                                                            <!--begin::Input-->
                                                            <input class="form-control form-control form-control-solid @error('pkg_name')is-invalid @enderror" type="text" name="pkg_name" id="pkg_name" value="{{ old('pkg_name') }}" readonly="readonly" />
                                                            <input type="hidden" name="pkg_code" id="pkg_code" value="{{ old('pkg_code') }}" />
                                                            <!--end::Input-->
            
                                                            <!--begin::Error-->
                                                            @error('pkg_name')
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
                                                            <input class="form-control form-control form-control-solid @error('appl_date')is-invalid @enderror" type="text" name="appl_date" value="{{ Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}" readonly="readonly" />
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
                                                        <label class="form-label">Nama Konsumen</label>
                                                        <!--end::Label-->

                                                        <!--begin::Textarea-->
                                                        <input class="form-control form-control form-control-solid @error('appl_name')is-invalid @enderror" type="text" name="appl_name" value="{{ old('appl_name') }}" />
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
                                                        <label class="form-label">Title</label>
                                                        <!--end::Label-->

                                                        <!--begin::Textarea-->
                                                        <select class="form-select form-select-solid @error('appl_title')is-invalid @enderror" name="appl_title" id="appl_title" data-placeholder="Pilih Title">
                                                            <option></option>
                                                            <option value="MR" {{ old('appl_title') == 'MR' ? 'selected' : '' }}>Mr</option>
                                                            <option value="MRS" {{ old('appl_title') == 'MRS' ? 'selected' : '' }}>Mrs</option>
                                                            <option value="MS" {{ old('appl_title') == 'MS' ? 'selected' : '' }}>Ms</option>
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
                                                            <label class="form-label">Jenis Kelamin</label>
                                                            <!--end::Label-->
            
                                                            <!--begin::Input-->
                                                            <select class="form-select form-select-solid @error('appl_gender')is-invalid @enderror" name="appl_gender" id="appl_gender" data-placeholder="Pilih Jenis Kelamin">
                                                                <option></option>
                                                                <option value="1" {{ old('appl_gender') == '1' ? 'selected' : '' }}>Laki-Laki</option>
                                                                <option value="2" {{ old('appl_gender') == '2' ? 'selected' : '' }}>Perempuan</option>
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
                                                            <label class="form-label">Status</label>
                                                            <!--end::Label-->
            
                                                            <!--begin::Input-->
                                                            <select class="form-select form-select-solid @error('appl_status')is-invalid @enderror" name="appl_status" id="appl_status" data-placeholder="Pilih Status">
                                                                <option></option>
                                                                <option value="1" {{ old('appl_status') == '1' ? 'selected' : '' }}>Kawin</option>
                                                                <option value="2" {{ old('appl_status') == '2' ? 'selected' : '' }}>Belum Kawin</option>
                                                                <option value="3" {{ old('appl_status') == '3' ? 'selected' : '' }}>Cerai</option>
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
                                                        <select class="form-select form-select-solid @error('appl_id_type')is-invalid @enderror" name="appl_id_type" id="appl_id_type" data-placeholder="Pilih Tipe ID">
                                                            <option></option>
                                                            <option value="1" {{ old('appl_id_type') == '1' ? 'selected' : '' }}>KTP</option>
                                                            <option value="2" {{ old('appl_id_type') == '2' ? 'selected' : '' }}>SIM</option>
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
                                                        <input class="form-control form-control form-control-solid @error('appl_id_no')is-invalid @enderror" type="text" name="appl_id_no" value="{{ old('appl_id_no') }}" />
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
                                                            <label class="form-label">Tempat Lahir</label>
                                                            <!--end::Label-->
            
                                                            <!--begin::Input-->
                                                            <input class="form-control form-control form-control-solid @error('appl_birth_place')is-invalid @enderror" type="text" name="appl_birth_place" value="{{ old('appl_birth_place') }}" />
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
                                                            <label class="form-label">Tanggal Lahir</label>
                                                            <!--end::Label-->
            
                                                            <!--begin::Input-->
                                                            <input class="form-control form-control form-control-solid @error('appl_birth_date')is-invalid @enderror" type="text" name="appl_birth_date" value="{{ old('appl_birth_date') }}" />
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
                                                        <label class="form-label">Alamat</label>
                                                        <!--end::Label-->

                                                        <!--begin::Textarea-->
                                                        <textarea class="form-control form-control form-control-solid @error('appl_addr')is-invalid @enderror" name="appl_addr" data-kt-autosize="true">{{ old('appl_addr') }}</textarea>
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
                                                        <label class="form-label">Provinsi</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('prov_code')is-invalid @enderror" name="prov_code" id="prov_code" data-placeholder="Pilih Provinsi">
                                                            <option></option>
                                                            @foreach ($provinsis as $i)
                                                                <option value="{{ $i->prov_code }}" {{ old('prov_code') == $i->prov_code ? 'selected' : '' }}>{{ $i->provinsi }}</option>
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
                                                        <label class="form-label">Kota</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('kota_code')is-invalid @enderror" name="kota_code" id="kota_code">
                                                            <option value="" class="text-center">Pilih Provinsi Terlebih Dahulu</option>
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
                                                        <label class="form-label">Kecamatan</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('kec_code')is-invalid @enderror" name="kec_code" id="kec_code">
                                                            <option value="" class="text-center">Pilih Kota Terlebih Dahulu</option>
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
                                                        <label class="form-label">Kelurahan</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('kel_code')is-invalid @enderror" name="kel_code" id="kel_code">
                                                            <option value="" class="text-center">Pilih Kecamatan Terlebih Dahulu</option>
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
                                                        <label class="form-label">Warga Negara</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('con_code')is-invalid @enderror" name="con_code" id="con_code" data-placeholder="Pilih Warga Negara">
                                                            <option></option>
                                                            @foreach ($countries as $i)
                                                                <option value="{{ $i->con_code }}" {{ old('con_code') == $i->con_code ? 'selected' : '' }}>{{ $i->con_name }}</option>
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
                                                        <label class="form-label">Pendidikan</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('edu_code')is-invalid @enderror" name="edu_code" id="edu_code" data-placeholder="Pilih Pendidikan">
                                                            <option></option>
                                                            @foreach ($edus as $i)
                                                                <option value="{{ $i->edu_code }}" {{ old('edu_code') == $i->edu_code ? 'selected' : '' }}>{{ $i->edu_name }}</option>
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
                                                        <label class="form-label">Jabatan</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('job_code')is-invalid @enderror" name="job_code" id="job_code" data-placeholder="Pilih Jabatan">
                                                            <option></option>
                                                            @foreach ($jobs as $i)
                                                                <option value="{{ $i->job_code }}" {{ old('job_code') == $i->job_code ? 'selected' : '' }}>{{ $i->job_name }}</option>
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
                                                        <label class="form-label">Nama Orang Tua</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_fth_name')is-invalid @enderror" type="text" name="appl_fth_name" value="{{ old('appl_fth_name') }}" />
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
                                                        <label class="form-label">Relasi</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('rel_code')is-invalid @enderror" name="rel_code" id="rel_code" data-placeholder="Pilih Relasi">
                                                            <option></option>
                                                            @foreach ($relations as $i)
                                                                <option value="{{ $i->rel_code }}" {{ old('rel_code') == $i->rel_code ? 'selected' : '' }}>{{ $i->rel_name }}</option>
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
                                                        <label class="form-label">Mahram</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_mahram')is-invalid @enderror" type="text" name="appl_mahram" value="{{ old('appl_mahram') }}" />
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
                                                        <input class="form-control form-control form-control-solid text-uppercase @error('appl_pass_no')is-invalid @enderror" type="text" name="appl_pass_no" value="{{ old('appl_pass_no') }}" />
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
                                                        <input class="form-control form-control form-control-solid @error('appl_pass_name')is-invalid @enderror" type="text" name="appl_pass_name" value="{{ old('appl_pass_name') }}" />
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
                                                        <input class="form-control form-control form-control-solid @error('appl_pass_iss_date')is-invalid @enderror" type="text" name="appl_pass_iss_date" value="{{ old('appl_pass_iss_date') }}" />
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
                                                        <input class="form-control form-control form-control-solid @error('appl_pass_exp_date')is-invalid @enderror" type="text" name="appl_pass_exp_date" value="{{ old('appl_pass_exp_date') }}" />
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
                                                        <input class="form-control form-control form-control-solid @error('appl_pass_iss_place')is-invalid @enderror" type="text" name="appl_pass_iss_place" value="{{ old('appl_pass_iss_place') }}" />
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
                                                        <label class="form-label">Nama Di Kartu</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_vac_name_id')is-invalid @enderror" type="text" name="appl_vac_name_id" id="appl_vac_name_id" value="{{ old('appl_vac_name_id') }}" />
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
                                                        <label class="form-label">Nama Vaksin</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('vc_code_01')is-invalid @enderror" name="vc_code_01" id="vc_code_01" data-placeholder="Pilih Vaksin">
                                                            <option></option>
                                                            @foreach ($vaccines as $i)
                                                                <option value="{{ $i->vc_code }}" {{ old('vc_code_01') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }}</option>
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
                                                        <label class="form-label">Tanggal Vaksin</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_vac_id_date_01')is-invalid @enderror vac" type="text" name="appl_vac_id_date_01" value="{{ old('appl_vac_id_date_01') }}" />
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
                                                        <label class="form-label">Nama Vaksin</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('vc_code_02')is-invalid @enderror" name="vc_code_02" id="vc_code_02" data-placeholder="Pilih Vaksin">
                                                            <option></option>
                                                            @foreach ($vaccines as $i)
                                                                <option value="{{ $i->vc_code }}" {{ old('vc_code_02') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }}</option>
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
                                                        <label class="form-label">Tanggal Vaksin</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_vac_id_date_02')is-invalid @enderror vac" type="text" name="appl_vac_id_date_02" value="{{ old('appl_vac_id_date_02') }}" />
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
                                                        <label class="form-label">Nama Vaksin</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('vc_code_03')is-invalid @enderror" name="vc_code_03" id="vc_code_03" data-placeholder="Pilih Vaksin">
                                                            <option></option>
                                                            @foreach ($vaccines as $i)
                                                                <option value="{{ $i->vc_code }}" {{ old('vc_code_03') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }}</option>
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
                                                        <label class="form-label">Tanggal Vaksin</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_vac_id_date_03')is-invalid @enderror vac" type="text" name="appl_vac_id_date_03" value="{{ old('appl_vac_id_date_03') }}" />
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
                                                        <label class="form-label">Nama Vaksin</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('vc_code_04')is-invalid @enderror" name="vc_code_04" id="vc_code_04" data-placeholder="Pilih Vaksin">
                                                            <option></option>
                                                            @foreach ($vaccines as $i)
                                                                <option value="{{ $i->vc_code }}" {{ old('vc_code_04') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }}</option>
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
                                                        <label class="form-label">Tanggal Vaksin</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_vac_id_date_04')is-invalid @enderror vac" type="text" name="appl_vac_id_date_04" value="{{ old('appl_vac_id_date_04') }}" />
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
                                                        <label class="form-label">Jemaah Dari</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid @error('supl_code')is-invalid @enderror" name="supl_code" id="supl_code" data-placeholder="Pilih Jemaah">
                                                            <option></option>
                                                            @foreach ($suppliers as $i)
                                                                <option value="{{ $i->supl_code }}" {{ auth()->user()->empl_branch == $i->supl_code ? 'selected' : '' }}>{{ $i->supl_name }}</option>
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
                                                        <label class="form-label">No Telp</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_tlp')is-invalid @enderror" type="text" name="appl_tlp" value="{{ old('appl_tlp') }}" />
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
                                                        <label class="form-label">Email</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_email')is-invalid @enderror" type="text" name="appl_email" value="{{ old('appl_email') }}" />
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
                                                            <label class="form-label">Foto Full?</label>
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_img_full" name="appl_is_img_full" {{ old('appl_is_img_full') == "Y" ? 'checked' : ''  }} />
                                                            <label class="form-check-label" for="appl_is_img_full">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <!--end::Radio Button-->
                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="N" id="appl_is_img_full" name="appl_is_img_full" {{ old('appl_is_img_full') == "N" ? 'checked' : ''  }} />
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
                                                        <label class="form-label">File</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_is_img_full_name')is-invalid @enderror" type="file" name="appl_is_img_full_name" id="appl_is_img_full_name" />
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
                                                            <label class="form-label">Foto Setengah?</label>
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_img_half" name="appl_is_img_half" {{ old('appl_is_img_half') == "Y" ? 'checked' : ''  }} />
                                                            <label class="form-check-label" for="appl_is_img_half">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <!--end::Radio Button-->
                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="N" id="appl_is_img_half" name="appl_is_img_half" {{ old('appl_is_img_half') == "N" ? 'checked' : ''  }} />
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
                                                        <label class="form-label">File</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_is_img_half_name')is-invalid @enderror" type="file" name="appl_is_img_half_name" id="appl_is_img_half_name" />
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
                                                            <label class="form-label">Fisik Passport?</label>
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_pass" name="appl_is_pass" {{ old('appl_is_pass') == "Y" ? 'checked' : ''  }} />
                                                            <label class="form-check-label" for="appl_is_pass">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <!--end::Radio Button-->
                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="N" id="appl_is_pass" name="appl_is_pass" {{ old('appl_is_pass') == "N" ? 'checked' : ''  }} />
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
                                                        <label class="form-label">File</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_is_pass_name')is-invalid @enderror" type="file" name="appl_is_pass_name" id="appl_is_pass_name" />
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
                                                            <label class="form-label">Buku Kuning?</label>
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_yb" name="appl_is_yb" {{ old('appl_is_yb') == "Y" ? 'checked' : ''  }} />
                                                            <label class="form-check-label" for="appl_is_yb">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <!--end::Radio Button-->
                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="N" id="appl_is_yb" name="appl_is_yb" {{ old('appl_is_yb') == "N" ? 'checked' : ''  }} />
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
                                                        <label class="form-label">File</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_is_yb_name')is-invalid @enderror" type="file" name="appl_is_yb_name" id="appl_is_yb_name" />
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
                                                            <label class="form-label">Copy KTP?</label>
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_id" name="appl_is_copy_id" {{ old('appl_is_copy_id') == "Y" ? 'checked' : ''  }} />
                                                            <label class="form-check-label" for="appl_is_copy_id">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <!--end::Radio Button-->
                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_id" name="appl_is_copy_id" {{ old('appl_is_copy_id') == "N" ? 'checked' : ''  }} />
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
                                                        <label class="form-label">File</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_is_id_name')is-invalid @enderror" type="file" name="appl_is_id_name" id="appl_is_id_name" />
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
                                                            <label class="form-label">Copy KK?</label>
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_kk" name="appl_is_copy_kk" {{ old('appl_is_copy_kk') == "Y" ? 'checked' : ''  }} />
                                                            <label class="form-check-label" for="appl_is_copy_kk">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <!--end::Radio Button-->
                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_kk" name="appl_is_copy_kk" {{ old('appl_is_copy_kk') == "N" ? 'checked' : ''  }} />
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
                                                        <label class="form-label">File</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_is_kk_name')is-invalid @enderror" type="file" name="appl_is_kk_name" id="appl_is_kk_name" />
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
                                                            <label class="form-label">Copy Passport?</label>
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_pass" name="appl_is_copy_pass" {{ old('appl_is_copy_pass') == "Y" ? 'checked' : ''  }} />
                                                            <label class="form-check-label" for="appl_is_copy_pass">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <!--end::Radio Button-->
                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_pass" name="appl_is_copy_pass" {{ old('appl_is_copy_pass') == "N" ? 'checked' : ''  }} />
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
                                                        <label class="form-label">File</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_is_copy_pass_name')is-invalid @enderror" type="file" name="appl_is_copy_pass_name" id="appl_is_copy_pass_name" />
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
                                                            <label class="form-label">Copy Akta N?</label>
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_akta_n" name="appl_is_copy_akta_n" {{ old('appl_is_copy_akta_n') == "Y" ? 'checked' : ''  }} />
                                                            <label class="form-check-label" for="appl_is_copy_akta_n">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <!--end::Radio Button-->
                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_akta_n" name="appl_is_copy_akta_n" {{ old('appl_is_copy_akta_n') == "N" ? 'checked' : ''  }} />
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
                                                        <label class="form-label">File</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_is_akta_n_name')is-invalid @enderror" type="file" name="appl_is_akta_n_name" id="appl_is_akta_n_name" />
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
                                                            <label class="form-label">Copy Akta Lahir?</label>
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="Y" id="appl_is_copy_akta_l" name="appl_is_copy_akta_l" {{ old('appl_is_copy_akta_l') == "Y" ? 'checked' : ''  }} />
                                                            <label class="form-check-label" for="appl_is_copy_akta_l">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <!--end::Radio Button-->
                                                        <!--begin::Radio Button-->
                                                        <div class="form-check form-check-inline mb-3">
                                                            <input class="form-check-input" type="radio" value="N" id="appl_is_copy_akta_l" name="appl_is_copy_akta_l" {{ old('appl_is_copy_akta_l') == "N" ? 'checked' : ''  }} />
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
                                                        <label class="form-label">File</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control form-control-solid @error('appl_is_akta_l_name')is-invalid @enderror" type="file" name="appl_is_akta_l_name" id="appl_is_akta_l_name" />
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
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {

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
                    document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-none")
                    document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-inline-block")
                    document.querySelector('[data-kt-stepper-action="next"]').classList.add("d-none")
                } else {
                    document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-none")
                    document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-inline-block")
                    document.querySelector('[data-kt-stepper-action="next"]').classList.remove("d-none")
                }
            });

            $(document).ready(function() {
                if ($('[name="appl_id_type"]').val() == "") {
                    $('[name="appl_id_no"]').attr('disabled', true);
                    $('[name="appl_id_no"]').attr('placeholder', 'Pilih Tipe ID Terlebih Dahulu');
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
                if ($('[name="appl_id_no"]').val() != "") {
                    $('[name="appl_id_no"]').attr('disabled', true);
                    $('[name="appl_id_no"]').attr('placeholder', '');
                } else {
                    $('[name="appl_id_no"]').attr('disabled', false);
                    $('[name="appl_id_no"]').attr('placeholder', 'Pilih Tipe ID Terlebih Dahulu');
                }
            });

            $('form').on('click', '[name="appl_is_img_full"]', function() {
                if ($('[name="appl_is_img_full"]:checked').val() == 'Y') {
                    $('[name="appl_is_img_full_name"]').attr('disabled', false);
                } else {
                    $('[name="appl_is_img_full_name"]').attr('disabled', true);
                }
            });

            $('form').on('click', '[name="appl_is_img_half"]', function() {
                if ($('[name="appl_is_img_half"]:checked').val() == 'Y') {
                    $('[name="appl_is_img_half_name"]').attr('disabled', false);
                } else {
                    $('[name="appl_is_img_half_name"]').attr('disabled', true);
                }
            });

            $('form').on('click', '[name="appl_is_pass"]', function() {
                if ($('[name="appl_is_pass"]:checked').val() == 'Y') {
                    $('[name="appl_is_pass_name"]').attr('disabled', false);
                } else {
                    $('[name="appl_is_pass_name"]').attr('disabled', true);
                }
            });

            $('form').on('click', '[name="appl_is_yb"]', function() {
                if ($('[name="appl_is_yb"]:checked').val() == 'Y') {
                    $('[name="appl_is_yb_name"]').attr('disabled', false);
                } else {
                    $('[name="appl_is_yb_name"]').attr('disabled', true);
                }
            });

            $('form').on('click', '[name="appl_is_copy_id"]', function() {
                if ($('[name="appl_is_copy_id"]:checked').val() == 'Y') {
                    $('[name="appl_is_id_name"]').attr('disabled', false);
                } else {
                    $('[name="appl_is_id_name"]').attr('disabled', true);
                }
            });

            $('form').on('click', '[name="appl_is_copy_kk"]', function() {
                if ($('[name="appl_is_copy_kk"]:checked').val() == 'Y') {
                    $('[name="appl_is_kk_name"]').attr('disabled', false);
                } else {
                    $('[name="appl_is_kk_name"]').attr('disabled', true);
                }
            });

            $('form').on('click', '[name="appl_is_copy_pass"]', function() {
                if ($('[name="appl_is_copy_pass"]:checked').val() == 'Y') {
                    $('[name="appl_is_copy_pass_name"]').attr('disabled', false);
                } else {
                    $('[name="appl_is_copy_pass_name"]').attr('disabled', true);
                }
            });

            $('form').on('click', '[name="appl_is_copy_akta_n"]', function() {
                if ($('[name="appl_is_copy_akta_n"]:checked').val() == 'Y') {
                    $('[name="appl_is_akta_n_name"]').attr('disabled', false);
                } else {
                    $('[name="appl_is_akta_n_name"]').attr('disabled', true);
                }
            });

            $('form').on('click', '[name="appl_is_copy_akta_l"]', function() {
                if ($('[name="appl_is_copy_akta_l"]:checked').val() == 'Y') {
                    $('[name="appl_is_akta_l_name"]').attr('disabled', false);
                } else {
                    $('[name="appl_is_akta_l_name"]').attr('disabled', true);
                }
            });

            Inputmask("9999-9999-9999-9999", {
                "numericInput": true,
                "reverse": false
            }).mask("[name='appl_id_no']");

            Inputmask({
                "mask": "a 9999999",
                "placeholder": "X 0000000"
            }).mask("[name='appl_pass_no']");

            $("[name='appl_birth_date']").daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format("YYYY"),10),
                opens: 'right',
                drops: 'auto',
                locale: {
                    format: 'YYYY-MM-DD'
                }
            }).on("apply.daterangepicker", function (e, picker) {
                picker.element.val(picker.startDate.format(picker.locale.format));
            });

            $("[name='appl_pass_iss_date']").daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format("YYYY"),10),
                opens: 'right',
                drops: 'auto',
                locale: {
                    format: 'YYYY-MM-DD'
                }
            }).on("apply.daterangepicker", function (e, picker) {
                picker.element.val(picker.startDate.format(picker.locale.format));
            });

            $("[name='appl_pass_exp_date']").daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format("YYYY"),10),
                opens: 'right',
                drops: 'auto',
                locale: {
                    format: 'YYYY-MM-DD'
                }
            }).on("apply.daterangepicker", function (e, picker) {
                picker.element.val(picker.startDate.format(picker.locale.format));
            });

            $(".vac").daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format("YYYY"),10),
                opens: 'right',
                drops: 'auto',
                locale: {
                    format: 'YYYY-MM-DD'
                }
            }).on("apply.daterangepicker", function (e, picker) {
                picker.element.val(picker.startDate.format(picker.locale.format));
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

            $.ajax({
                type: "GET",
                url: "{{ route('util.api', [auth()->user()->coy_id, auth()->user()->empl_branch]) }}",
                success: function (data) {
                    if (data.is_cycle == 'Y') {
                        var sequence = '{{ auth()->user()->empl_branch }}' + 'ORD' + '{{ Carbon\Carbon::now()->format("y") }}' + data.last_value.toString().padStart(8, '0');
                    } else if (data.is_cycle == 'M') {
                        var sequence = '{{ auth()->user()->empl_branch }}' + 'ORD' + '{{ Carbon\Carbon::now()->format("ym") }}' + data.last_value.toString().padStart(8, '0');
                    } else {
                        var sequence = '{{ auth()->user()->empl_branch }}' + 'ORD' + '{{ Carbon\Carbon::now()->format("ymd") }}' + data.last_value.toString().padStart(8, '0');
                    }

                    $('[name="appl_no"]').val(sequence);
                }
            });

            $(document).on('click','.modal_create',function(){
                var url = `${baseUrl}/api/v1/registerpackage`;
                var id = $(this).val();
                $.get(url + '/' + id, function (data) {
                    $('#pkg_name').val(data.pkg_name);
                    $('#pkg_code').val(data.pkg_code);
                }) 
            });

        select2Create(['appl_title', 'appl_gender', 'appl_st', 'appl_status', 'appl_id_type', 'prov_code', 'con_code', 'edu_code', 'job_code', 'rel_code', 'vc_code_01', 'vc_code_02', 'vc_code_03', 'vc_code_04', 'supl_code'])

        });
    </script>
@endsection
@endrole