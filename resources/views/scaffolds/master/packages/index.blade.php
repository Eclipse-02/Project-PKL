@extends('dashboard.master')

@section('title', 'Paket')

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
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select data-column="14" class="filter-select form-select form-select-solid">
                                                    <option value="">Semua</option>
                                                    <option value="NW">New</option>
                                                    <option value="AC">Aktif</option>
                                                    <option value="CN">Cancel</option>
                                                    <option value="CL">Closed</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Tampil:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select data-column="10" class="filter-select form-select form-select-solid">
                                                    <option value="">Semua</option>
                                                    <option value="Y">Ya</option>
                                                    <option value="N">Tidak</option>
                                                </select>
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
                            <th class="min-w-100px">Kode Paket</th>
                            <th class="min-w-100px">Nama Paket</th>
                            <th class="min-w-100px">Deskripsi Paket</th>
                            <th class="min-w-100px">Harga Paket</th>
                            <th class="min-w-100px">Batas Harga Paket</th>
                            <th class="min-w-100px">Harga Agen Paket</th>
                            <th class="min-w-100px">Buka Paket</th>
                            <th class="min-w-100px">Tutup Paket</th>
                            <th class="min-w-100px">Gambar Paket</th>
                            <th class="min-w-100px">Paket Tampil</th>
                            <th class="min-w-100px">No Urut Detail</th>
                            <th class="min-w-100px">Deskripsi Detail</th>
                            <th class="min-w-100px">Harga Detail</th>
                            <th class="min-w-100px">Status Paket</th>
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
    <div class="modal fade" id="create_modal" aria-hidden="true">
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
                                        <h3 class="stepper-title">Detail</h3>
                                        <div class="stepper-desc">Detail Paket</div>
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
                                        <h3 class="stepper-title">Status</h3>
                                        <div class="stepper-desc">Status Paket</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 4-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form w-lg-500px mx-auto" action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

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
                                                <input class="form-control form-control form-control-solid @error('pkg_code')is-invalid @enderror" type="text" name="pkg_code" value="{{ old('pkg_code') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('pkg_name')is-invalid @enderror" type="text" name="pkg_name" value="{{ old('pkg_name') }}" />
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
                                                <textarea class="form-control form-control form-control-solid @error('pkg_desc')is-invalid @enderror" name="pkg_desc" data-kt-autosize="true">{{ old('pkg_desc') }}</textarea>
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
                                                <input class="form-control form-control form-control-solid @error('pkg_price')is-invalid @enderror" type="text" name="pkg_price" value="{{ old('pkg_price') }}" />
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
                                                <label class="form-label required">Batas Harga</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('pkg_price_limit')is-invalid @enderror" type="text" name="pkg_price_limit" value="{{ old('pkg_price_limit') }}" />
                                                <!--end::Input-->

                                                <!--begin::Error-->
                                                @error('pkg_price_limit')
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
                                                <label class="form-label required">Harga Agen</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('pkg_price_agent')is-invalid @enderror" type="text" name="pkg_price_agent" value="{{ old('pkg_price_agent') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('pkg_start')is-invalid @enderror" type="text" name="pkg_start" value="{{ old('pkg_start') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('pkg_closed')is-invalid @enderror" type="text" name="pkg_closed" value="{{ old('pkg_closed') }}" />
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
                                                <label class="form-label required">Gambar Paket</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('pkg_image')is-invalid @enderror" type="file" name="pkg_image" value="{{ old('pkg_image') }}" />
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
                                                <label class="form-label required">Deskripsi</label>
                                                <!--end::Label-->

                                                <!--begin::Textarea-->
                                                <textarea class="form-control form-control form-control-solid @error('dtl_desc')is-invalid @enderror" name="dtl_desc" data-kt-autosize="true">{{ old('dtl_desc') }}</textarea>
                                                <!--end::Textarea-->

                                                <!--begin::Error-->
                                                @error('dtl_desc')
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
                                                <label class="form-label required">Detail Harga</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('dtl_price')is-invalid @enderror" type="text" name="dtl_price" value="{{ old('dtl_price') }}" />
                                                <!--end::Input-->

                                                <!--begin::Error-->
                                                @error('dtl_price')
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
                                                <label class="form-label required">Status</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('pkg_status')is-invalid @enderror" name="pkg_status" id="pkg_status" name="prov_code" id="prov_code" data-control="select2" data-placeholder="Pilih Status">
                                                    <option></option>
                                                    <option value="NW" {{ old('pkg_status') == 'NW' ? 'selected' : '' }}>New</option>
                                                    <option value="AC" {{ old('pkg_status') == 'AC' ? 'selected' : '' }}>Aktif</option>
                                                    <option value="CN" {{ old('pkg_status') == 'CN' ? 'selected' : '' }}>Cancel</option>
                                                    <option value="CL" {{ old('pkg_status') == 'CL' ? 'selected' : '' }}>Closed</option>
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
                                                    <input class="form-check-input" type="radio" value="Y" id="pkg_is_display" name="pkg_is_display" {{ old('pkg_is_display') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="pkg_is_display">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-custom form-check-solid mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="pkg_is_display" name="pkg_is_display" {{ old('pkg_is_display') == "N" ? 'checked' : ''  }} />
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
                                    <!--begin::Step 4-->
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
            scrollX: true,
            ajax: {
                "url": "{{ route('packages.index') }}",
				"type": "GET"
            },
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "pkg_code",
                    name: "pkg_code"
                },
                {
                    data: "pkg_name",
                    name: "pkg_name"
                },
                {
                    data: "pkg_desc",
                    name: "pkg_desc"
                },
                {
                    data: "pkg_price",
                    name: "pkg_price"
                },
                {
                    data: "pkg_price_limit",
                    name: "pkg_price_limit"
                },
                {
                    data: "pkg_price_agent",
                    name: "pkg_price_agent"
                },
                {
                    data: "pkg_start",
                    name: "pkg_start"
                },
                {
                    data: "pkg_closed",
                    name: "pkg_closed"
                },
                {
                    data: "pkg_image",
                    name: "pkg_image"
                },
                {
                    data: "pkg_is_display",
                    render: function (data) {
                        if (data == 'Y') {
                            return 'Ya';
                        } else {
                            return 'Tidak';
                        }
                    }
                },
                {
                    data: "dtl_sq_no",
                    name: "dtl_sq_no"
                },
                {
                    data: "dtl_desc",
                    name: "dtl_desc"
                },
                {
                    data: "dtl_price",
                    name: "dtl_price"
                },
                {
                    data: "pkg_status",
                    render: function (data) {
                        if (data == 'NW') {
                            return 'New';
                        } else if (data == 'AC'){
                            return 'Aktif';
                        } else if (data == 'CN'){
                            return 'Cancel';
                        } else {
                            return 'Closed';
                        }
                    }
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
            if (stepper.getCurrentStepIndex() === 4) {
                document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-none")
                document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-inline-block")
                document.querySelector('[data-kt-stepper-action="next"]').classList.add("d-none")
            } else {
                document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-none")
                document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-inline-block")
                document.querySelector('[data-kt-stepper-action="next"]').classList.remove("d-none")
            }
        });

        $('.filter-select').change(function() {
            table.column( $(this).data('column') )
                .search( $(this).val() )
                .draw();
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

    });
</script>
@endsection