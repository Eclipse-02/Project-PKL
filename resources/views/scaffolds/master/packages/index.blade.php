@extends('dashboard.master')

@section('title', 'Paket')

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
                            <a href="{{ route('packagedetails.create', $i->pkg_code) }}" class="btn btn-light btn-active-primary w-100 my-1">Create New Details</a>
							<a href="{{ route('packages.edit', $i->id) }}" class="btn btn-light btn-active-light-primary w-100 my-1">Edit Package</a>
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                @endforeach
                <!--begin::Add new card-->
                <div class="col-md-4">
                    <!--begin::Card-->
                    <div class="card h-md-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal" data-bs-target="#create_modal">
                                <!--begin::Illustration-->
                                <img src="{{ asset('master/html/theme/dist/assets/media/illustrations/sketchy-1/4.png') }}" alt="" class="mw-100 mh-150px mb-7" />
                                <!--end::Illustration-->
                                <!--begin::Label-->
                                <div class="fw-bolder fs-3 text-gray-600 text-hover-primary">Add New Package</div>
                                <!--end::Label-->
                            </button>
                            <!--begin::Button-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--begin::Add new card-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

    <!--begin::Modal - Create-->
    <div class="modal fade" id="create_modal" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Create New Package Data <div class="text-muted fs-3 fw-bold d-inline"><span class="fw-bolder">/</span> Membuat Data Paket Baru</div></h2>
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
                                        <h3 class="stepper-title">Package Type</h3>
                                        <div class="stepper-desc">Tipe Paket</div>
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
                                        <h3 class="stepper-title">Basic Info</h3>
                                        <div class="stepper-desc">Informasi Dasar</div>
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
                                    <!--begin::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Information</h3>
                                        <div class="stepper-desc">Informasi Paket</div>
                                    </div>
                                    <!--begin::Label-->
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
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="pkg_type" id="umroh" value="U" checked="checked">
                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="umroh">
                                                    <!--begin::Icon-->
                                                    <i class="fas fa-kaaba fs-2hx me-5"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-block fw-bold text-start">
                                                        <span class="text-dark fw-bolder d-block fs-4 mb-2">Umroh Package</span>
                                                        <span class="text-muted fw-bold fs-6">This package include Passport, Vaccine, and ID to fill</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="pkg_type" id="event" value="E">
                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="event">
                                                    <!--begin::Icon-->
                                                    <i class="fas fa-calendar-day fs-2hx me-5"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-block fw-bold text-start">
                                                        <span class="text-dark fw-bolder d-block fs-4 mb-2">Event Package</span>
                                                        <span class="text-muted fw-bold fs-6">Simillar as Umroh Package but with Invoice included</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
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
                                                <label class="form-label required">Lokasi</label>
                                                <!--end::Label-->

                                                <!--begin::Textarea-->
                                                <textarea class="form-control form-control form-control-solid @error('pkg_location')is-invalid @enderror" name="pkg_location" data-kt-autosize="true">{{ old('pkg_location') }}</textarea>
                                                <!--end::Textarea-->

                                                <!--begin::Error-->
                                                @error('pkg_location')
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
                                    <!--begin::Step 2-->

                                    <!--begin::Step 3-->
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
                                                <select class="form-select form-select-solid @error('pkg_status')is-invalid @enderror" name="pkg_status" id="pkg_status" data-placeholder="Pilih Status">
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
                                    <!--end::Step 4-->
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

        $(document).on('click', '[name="pkg_type"]:checked', function() {
            if ($('[name="pkg_type"]:checked').val() == 'U') {
                $('.umroh').removeClass('d-none');
            } else {
                $('.umroh').addClass('d-none');
            }
        })

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

        select2Create(['pkg_status']);

    });
</script>
@endsection