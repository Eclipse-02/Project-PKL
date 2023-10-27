@extends('dashboard.master')

@section('title', 'Konfirmasi Pemasok')

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
                                                <select data-column="7" class="filter-select form-select form-select-solid">
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
                            <th class="min-w-100px">Kode Pemasok</th>
                            <th class="min-w-100px">Kode Bank</th>
                            <th class="min-w-100px">No Konfirmasi</th>
                            <th class="min-w-100px">Nama Konfirmasi</th>
                            <th class="min-w-100px">Deskripsi Konfirmasi</th>
                            <th class="min-w-100px">Mata Uang Konfirmasi</th>
                            <th class="min-w-100px">Status Konfirmasi</th>
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
    <div class="modal fade" id="create_modal"aria-hidden="true">
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
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="create_modal_stepper">
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" action="{{ route('supplieraccs.store') }}" method="POST">
                                @csrf

                                <!--begin::Input group-->
                                <div class="fv-row mb-5">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 mb-2">
                                        <span class="required">Pemasok</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Hanya Pemasok yang tidak memiliki data muncul di sini"></i>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid @error('supl_code')is-invalid @enderror" name="supl_code" id="supl_code" data-control="select2" data-placeholder="Pilih Pemasok">
                                        <option></option>
                                        @foreach ($suppliers as $i)
                                            <option value="{{ $i->supl_code }}" {{ old('supl_code') == $i->supl_code ? 'selected' : '' }}>{{ $i->supl_name }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->

                                    <!--start::Error-->
                                    @error('supl_code')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!--end::Error-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-5">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 mb-2">
                                        <span class="required">Bank</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid @error('bank_code')is-invalid @enderror" name="bank_code" id="bank_code" data-control="select2" data-placeholder="Pilih Bank">
                                        <option></option>
                                        @foreach ($banks as $i)
                                            <option value="{{ $i->bank_code }}" {{ old('bank_code') == $i->bank_code ? 'selected' : '' }}>{{ $i->bank_name }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->

                                    <!--start::Error-->
                                    @error('bank_code')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!--end::Error-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-5">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 mb-2">
                                        <span class="required">No Konfirmasi</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control form-control-solid @error('acc_no')is-invalid @enderror" type="text" name="acc_no" value="{{ old('acc_no') }}" />
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    @error('acc_no')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!--end::Error-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-5">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 mb-2">
                                        <span class="required">Nama</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control form-control-solid @error('acc_name')is-invalid @enderror" type="text" name="acc_name" value="{{ old('acc_name') }}" />
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    @error('acc_name')
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
                                    <textarea class="form-control form-control form-control-solid @error('acc_desc')is-invalid @enderror" name="acc_desc" data-kt-autosize="true">{{ old('acc_desc') }}</textarea>
                                    <!--end::Textarea-->

                                    <!--begin::Error-->
                                    @error('acc_desc')
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
                                    <label class="form-label required">Mata Uang</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid @error('acc_curr')is-invalid @enderror" name="acc_curr" id="acc_curr" data-control="select2" data-placeholder="Pilih Mata Uang">
                                        <option></option>
                                        <option value="IDR" {{ old('acc_curr') == 'IDR' ? 'selected' : '' }}>IDR</option>
                                        <option value="USD" {{ old('acc_curr') == 'USD' ? 'selected' : '' }}>USD</option>
                                    </select>
                                    <!--end::Input-->

                                    <!--start::Error-->
                                    @error('acc_curr')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!--end::Error-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Action-->
                                <div class="text-center">
                                    <!--begin::Submit button-->
                                    <button type="submit" id="kt_sign_in_submit" id="create" class="btn btn-lg btn-primary w-100 mb-5">
                                        <span class="indicator-label">Simpan</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Submit button-->
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        <!--end::Content-->
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
                "url": "{{ route('supplieraccs.index') }}",
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
                    data: "bank_code",
                    name: "bank_code"
                },
                {
                    data: "acc_no",
                    name: "acc_no"
                },
                {
                    data: "acc_name",
                    name: "acc_name"
                },
                {
                    data: "acc_desc",
                    name: "acc_desc"
                },
                {
                    data: "acc_curr",
                    name: "acc_curr"
                },
                {
                    data: "acc_status",
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
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('.filter-select').change(function() {
            table.column( $(this).data('column') )
                .search( $(this).val() )
                .draw();
        });

    });
</script>
@endsection