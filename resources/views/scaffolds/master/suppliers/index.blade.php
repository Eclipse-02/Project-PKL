@extends('dashboard.master')

@section('title', 'Agen')

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
                                            <label class="form-label fw-bold">Aktif:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select data-column="3" class="filter-select form-select form-select-solid" data-control="select2">
                                                    <option value="">Semua</option>
                                                    <option value="Y">Ya</option>
                                                    <option value="N">Tidak</option>
                                                </select>
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
                                                <select data-column="4" class="filter-select form-select form-select-solid" data-control="select2">
                                                    <option value="">Semua</option>
                                                    <option value="NW">Baru Disimpan</option>
                                                    <option value="NA">Need Approval</option>
                                                    <option value="AP">Approved</option>
                                                    <option value="CL">Closed</option>
                                                    <option value="RJ">Reject</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Tipe:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select data-column="6" class="filter-select form-select form-select-solid" data-control="select2">
                                                    <option value="">Semua</option>
                                                    <option value="0">Individu</option>
                                                    <option value="1">Company</option>
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
                <table class="table table-striped gy-7 gs-7 d-none">
                    <!--start::Thead-->
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                            <th class="min-w-50px">No</th>
                            <th class="min-w-100px">Kode Agen</th>
                            <th class="min-w-100px">Nama Cabang</th>
                            <th class="min-w-100px">Aktif</th>
                            <th class="min-w-100px">Status Agen</th>
                            <th class="min-w-100px">Nama Agen</th>
                            <th class="min-w-100px">Tipe Agen</th>
                            <th class="min-w-100px">Sub Tipe Agen</th>
                            <th class="min-w-100px">Nama Foto Agen</th>
                            <th class="min-w-100px">Nama Posisi</th>
                            <th class="min-w-100px">No ID Agen</th>
                            <th class="min-w-100px">Alamat Agen</th>
                            <th class="min-w-100px">No Area Agen</th>
                            <th class="min-w-100px">No Agen</th>
                            <th class="min-w-100px">No HP 1 Agen</th>
                            <th class="min-w-100px">No HP 2 Agen</th>
                            <th class="min-w-100px">Nama Provinsi</th>
                            <th class="min-w-100px">Nama Kota</th>
                            <th class="min-w-100px">Nama kecamatan</th>
                            <th class="min-w-100px">Nama kelurahan</th>
                            <th class="min-w-100px">Nama Pos</th>
                            <th class="min-w-100px">No NPWP Agen</th>
                            <th class="min-w-100px">Nama NPWP Agen</th>
                            <th class="min-w-100px">Alamat NPWP Agen</th>
                            <th class="min-w-100px">Deskripsi Agen</th>
                            <th class="min-w-100px">Nama File MOU</th>
                            <th class="min-w-100px">Nama File KTP</th>
                            <th class="min-w-100px">Nama File NPWP</th>
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
                    <h2>Create New Supplier Data <div class="text-muted fs-3 fw-bold d-inline"><span class="fw-bolder">/</span> Membuat Data Agen Baru</div></h2>
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
                            <form class="form w-lg-500px mx-auto" action="{{ route('suppliers.store') }}" method="POST" enctype="multipart/form-data">
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
                                                <input class="form-control form-control form-control-solid @error('supl_code')is-invalid @enderror" type="text" name="supl_code" value="{{ old('supl_code') }}" />
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
                                                <select class="form-select form-select-solid @error('branch_code')is-invalid @enderror" name="branch_code" id="branch_code" data-placeholder="Pilih Cabang">
                                                    <option></option>
                                                    @foreach ($branches as $i)
                                                        <option value="{{ $i->branch_code }}" {{ old('branch_code') == $i->branch_code ? 'selected' : '' }}>{{ $i->branch_name }}</option>
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
                                                <input class="form-control form-control form-control-solid @error('supl_name')is-invalid @enderror" type="text" name="supl_name" value="{{ old('supl_name') }}" />
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
                                                <select class="form-select form-select-solid @error('supl_type')is-invalid @enderror" name="supl_type" id="supl_type" data-placeholder="Pilih Tipe">
                                                    <option></option>
                                                    <option value="0" {{ old('supl_type') == '0' ? 'selected' : '' }}>Individu</option>
                                                    <option value="1" {{ old('supl_type') == '1' ? 'selected' : '' }}>Company</option>
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
                                                <select class="form-select form-select-solid @error('supl_sub_type')is-invalid @enderror" name="supl_sub_type" id="supl_sub_type" data-placeholder="Pilih Sub Tipe">
                                                    <option></option>
                                                    @foreach ($supplierSubTypes as $i)
                                                        <option value="{{ $i->sub_code }}" {{ old('supl_sub_type') == $i->sub_code ? 'selected' : '' }}>{{ $i->sub_name }}</option>
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
                                                <label class="form-label required">Foto Agen</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('supl_pic_name')is-invalid @enderror" type="file" name="supl_pic_name" value="{{ old('supl_pic_name') }}" />
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
                                                <select class="form-select form-select-solid @error('poss_code')is-invalid @enderror" name="poss_code" id="poss_code" data-placeholder="Pilih Jabatan">
                                                    <option></option>
                                                    @foreach ($positions as $i)
                                                        <option value="{{ $i->poss_code }}" {{ old('poss_code') == $i->poss_code ? 'selected' : '' }}>{{ $i->poss_name }}</option>
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
                                                <input class="form-control form-control form-control-solid @error('supl_id_no')is-invalid @enderror" type="text" name="supl_id_no" value="{{ old('supl_id_no') }}" />
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
                                                <textarea class="form-control form-control form-control-solid @error('supl_addr')is-invalid @enderror" name="supl_addr" data-kt-autosize="true">{{ old('supl_addr') }}</textarea>
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
                                                <input class="form-control form-control form-control-solid @error('supl_tlp_area')is-invalid @enderror" type="text" name="supl_tlp_area" value="{{ old('supl_tlp_area') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('supl_tlp')is-invalid @enderror" type="text" name="supl_tlp" value="{{ old('supl_tlp') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('supl_hp01')is-invalid @enderror" type="text" name="supl_hp01" value="{{ old('supl_hp01') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('supl_hp02')is-invalid @enderror" type="text" name="supl_hp02" value="{{ old('supl_hp02') }}" />
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
                                                <label class="form-label required">Kota</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid @error('kota_code')is-invalid @enderror" name="kota_code" id="kota_code" disabled="disabled">
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
                                                <select class="form-select form-select-solid @error('kec_code')is-invalid @enderror" name="kec_code" id="kec_code" disabled="disabled">
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
                                                <select class="form-select form-select-solid @error('kel_code')is-invalid @enderror" name="kel_code" id="kel_code" disabled="disabled">
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
                                                <select class="form-select form-select-solid @error('zip_code')is-invalid @enderror" name="zip_code" id="zip_code" disabled="disabled">
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
                                                <input class="form-control form-control form-control-solid @error('supl_npwp_no')is-invalid @enderror" type="text" name="supl_npwp_no" id="supl_npwp_no" value="{{ old('supl_npwp_no') }}" />
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
                                                <input class="form-control form-control form-control-solid @error('supl_npwp_name')is-invalid @enderror" type="text" name="supl_npwp_name" id="supl_npwp_name" value="{{ old('supl_npwp_name') }}" />
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
                                                <textarea class="form-control form-control form-control-solid @error('supl_npwp_addr')is-invalid @enderror" name="supl_npwp_addr" data-kt-autosize="true">{{ old('supl_npwp_addr') }}</textarea>
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
                                                <label class="form-label required">File MOU</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('file_name_mou')is-invalid @enderror" type="file" name="file_name_mou" id="file_name_mou" value="{{ old('file_name_mou') }}" />
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
                                                <label class="form-label required">File KTP</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('file_name_ktp')is-invalid @enderror" type="file" name="file_name_ktp" id="file_name_ktp" value="{{ old('file_name_ktp') }}" />
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
                                                <label class="form-label required">File NPWP</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control form-control-solid @error('file_name_npwp')is-invalid @enderror" type="file" name="file_name_npwp" id="file_name_npwp" value="{{ old('file_name_npwp') }}" />
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
                                                <label class="form-label d-flex align-items-center">
                                                    <span class="required">Aktif?</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Pilih jika Data bisa di gunakan"></i>
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-custom form-check-solid mb-3">
                                                    <input class="form-check-input" type="radio" value="Y" id="is_active" name="is_active" {{ old('is_active') == "Y" ? 'checked' : ''  }} />
                                                    <label class="form-check-label" for="is_active">
                                                        Ya
                                                    </label>
                                                </div>
                                                <!--end::Radio Button-->
                                                <!--begin::Radio Button-->
                                                <div class="form-check form-check-custom form-check-solid mb-3">
                                                    <input class="form-check-input" type="radio" value="N" id="is_active" name="is_active" {{ old('is_active') == "N" ? 'checked' : ''  }} />
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
                                                <textarea class="form-control form-control form-control-solid @error('supl_desc')is-invalid @enderror" name="supl_desc" data-kt-autosize="true">{{ old('supl_desc') }}</textarea>
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
                                        <button type="submit" class="btn btn-warning" data-kt-stepper-action="submit" name="submit" value="approval">
                                            <span class="indicator-label">
                                                Submit Approval
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

        $('.table').removeClass('d-none');

        var table = $('.table').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: {
                "url": "{{ route('suppliers.index') }}",
				"type": "GET"
            },
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "supl_code",
                    name: "supl_code"
                },
                {
                    data: "branch.branch_name",
                    name: "branch"
                },
                {
                    data: "is_active",
                    render: function(data) {
                        if(data == 'Y') {
                            return 'Ya';
                        } else {
                            return 'Tidak'
                        }
                    }
                },
                {
                    data: "supl_status",
                    render: function(data) {
                        if(data == 'NW') {
                            return 'Baru Disimpan';
                        } else if (data == 'NA') {
                            return 'Need Approval'
                        } else if (data == 'AP') {
                            return 'Approved'
                        } else if (data == 'CL') {
                            return 'Closed'
                        } else {
                            return 'Reject'
                        }
                    }
                },
                {
                    data: "supl_name",
                    name: "supl_name"
                },
                {
                    data: "supl_type",
                    render: function(data) {
                        if(data == '0') {
                            return 'Individu';
                        } else {
                            return 'Company'
                        }
                    }
                },
                {
                    data: "sub.sub_name",
                    name: "sub"
                },
                {
                    data: "supl_pic_name",
                    name: "supl_pic_name"
                },
                {
                    data: "position.poss_name",
                    name: "position"
                },
                {
                    data: "supl_id_no",
                    name: "supl_id_no"
                },
                {
                    data: "supl_addr",
                    name: "supl_addr"
                },
                {
                    data: "supl_tlp_area",
                    name: "supl_tlp_area"
                },
                {
                    data: "supl_tlp",
                    name: "supl_tlp"
                },
                {
                    data: "supl_hp01",
                    name: "supl_hp01"
                },
                {
                    data: "supl_hp02",
                    name: "supl_hp02"
                },
                {
                    data: "provinsi.provinsi",
                    name: "provinsi"
                },
                {
                    data: "kota.kota",
                    name: "kota"
                },
                {
                    data: "kecamatan.kecamatan",
                    name: "kecamatan"
                },
                {
                    data: "kelurahan.kelurahan",
                    name: "kelurahan"
                },
                {
                    data: "zip.zip_desc",
                    name: "zip"
                },
                {
                    data: "supl_npwp_no",
                    name: "supl_npwp_no"
                },
                {
                    data: "supl_npwp_name",
                    name: "supl_npwp_name"
                },
                {
                    data: "supl_npwp_addr",
                    name: "supl_npwp_addr"
                },
                {
                    data: "supl_desc",
                    name: "supl_desc"
                },
                {
                    data: "file_name_mou",
                    name: "file_name_mou"
                },
                {
                    data: "file_name_ktp",
                    name: "file_name_ktp"
                },
                {
                    data: "file_name_npwp",
                    name: "file_name_npwp"
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

        $('.filter-select').change(function() {
            table.column( $(this).data('column') )
                .search( $(this).val() )
                .draw();
        });

        select2Create(['branch_code', 'supl_type', 'supl_sub_type', 'poss_code', 'prov_code'])

    });
</script>
@endsection