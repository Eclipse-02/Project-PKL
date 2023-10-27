@extends('dashboard.master')

@section('title', 'Konfirmasi Pemasok')

@section('content')
    <!--start::Col-->
    <div class="col-xxl-12">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0 flex-column">
                    <h3 class="fw-bolder m-0">Edit Data</h3>
                    <div class="text-muted fs-7 fw-bold">Edit Data</div>
                </div>
                <!--end::Card title-->
                <!--start::Button-->
                <!--start::Action-->
                <a href="{{ route('supplieraccs.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
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
            <!--begin::Form-->
            <form class="form" action="{{ route('supplieraccs.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Input group-->
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">Pemasok</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-solid @error('supl_code')is-invalid @enderror" name="supl_code" id="supl_code" data-control="select2" data-placeholder="Pilih Pemasok" disabled="disabled">
                            <option></option>
                            @foreach ($suppliers as $i)
                                <option value="{{ $i->supl_code }}" {{ old('supl_code') ? (old('supl_code') == $i->supl_code ? 'selected' : '') : ($data->supl_code == $i->supl_code ? 'selected' : '') }}>{{ $i->supl_name }}</option>
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
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">Bank</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-solid @error('bank_code')is-invalid @enderror" name="bank_code" id="bank_code" data-control="select2" data-placeholder="Pilih Bank">
                            <option></option>
                            @foreach ($banks as $i)
                                <option value="{{ $i->bank_code }}" {{ old('bank_code') ? (old('bank_code') == $i->bank_code ? 'selected' : '') : ($data->bank_code == $i->bank_code ? 'selected' : '') }}>{{ $i->bank_name }}</option>
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
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">No Pemasok</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-lg form-control-solid @error('acc_no')is-invalid @enderror" type="text" id="acc_no" name="acc_no" value="{{ old('acc_no') ? old('acc_no') : $data->acc_no }}" />
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
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">Nama</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-lg form-control-solid @error('acc_name')is-invalid @enderror" type="text" id="acc_name" name="acc_name" value="{{ old('acc_name') ? old('acc_name') : $data->acc_name }}" />
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
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">Deskripsi</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Textarea-->
                        <textarea class="form-control form-control-lg form-control-solid @error('acc_desc')is-invalid @enderror" name="acc_desc" data-kt-autosize="true">{{ old('acc_desc') ? old('acc_desc') : $data->acc_desc }}</textarea>
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
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">Mata Uang</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-solid @error('acc_curr')is-invalid @enderror" name="acc_curr" id="acc_curr" data-control="select2" data-placeholder="Pilih Mata Uang">
                            <option></option>
                            <option value="IDR" {{ old('acc_curr') ? (old('acc_curr') == 'IDR' ? 'selected' : '') : ($data->acc_curr == 'IDR' ? 'selected' : '') }}>IDR</option>
                            <option value="USD" {{ old('acc_curr') ? (old('acc_curr') == 'USD' ? 'selected' : '') : ($data->acc_curr == 'USD' ? 'selected' : '') }}>USD</option>
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
                    <!--begin::Input group-->
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        @if ($data->acc_status == "NW")
                            <label class="form-label d-flex align-items-center">
                                <span class="required">Status</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Submit Approval terlebih dahulu untuk Accept/Reject Data"></i>
                            </label>
                        @elseif ($data->acc_status == "NA")
                            <label class="form-label required">Status</label>
                        @else
                            <label class="form-label d-flex align-items-center">
                                <span>Status</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Pilih jika ingin Close data"></i>
                            </label>
                        @endif
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-solid @error('acc_status')is-invalid @enderror" name="acc_status" id="acc_status" data-control="select2" data-placeholder="Pilih Status">
                            <option></option>
                            @if ($data->acc_status == "NW")
                                <option value="NW" class="text-center" {{ old('acc_status') ? (old('acc_status') == 'NW' ? 'selected' : '') : ($data->acc_status == 'NW' ? 'selected' : '') }}>Baru Disimpan</option>
                            @elseif ($data->acc_status == "NA")
                                <option value="AP" class="text-center" {{ old('acc_status') ? (old('acc_status') == 'AP' ? 'selected' : '') : ($data->acc_status == 'AP' ? 'selected' : '') }}>Approved</option>
                                <option value="RJ" class="text-center" {{ old('acc_status') ? (old('acc_status') == 'RJ' ? 'selected' : '') : ($data->acc_status == 'RJ' ? 'selected' : '') }}>Reject</option>
                            @else
                                <option value="CL" class="text-center" {{ old('acc_status') ? (old('acc_status') == 'CL' ? 'selected' : '') : ($data->acc_status == 'CL' ? 'selected' : '') }}>Closed</option>
                            @endif
                        </select>
                        <!--end::Input-->
                        <!--start::Error-->
                        @error('acc_status')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!--end::Error-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary me-2" name="submit" value="submit">Simpan</button>
                    @if ($data->acc_status == "NW")
                        <button type="submit" class="btn btn-warning" name="submit" value="approval">Approval</button>
                    @endif
                </div>
                <!--end::Card footer-->
            </form>
            <!--end:Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
@endsection