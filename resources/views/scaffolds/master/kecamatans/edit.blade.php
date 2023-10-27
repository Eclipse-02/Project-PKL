@extends('dashboard.master')

@section('title', 'Kecamatan')

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
                <a href="{{ route('kecamatans.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
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
            <form class="form" action="{{ route('kecamatans.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Input group-->
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">Kode</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-lg form-control-solid @error('kec_code')is-invalid @enderror" type="text" id="kec_code" name="kec_code" value="{{ old('kec_code') ? old('kec_code') : $data->kec_code }}" />
                        <!--end::Input-->
                        <!--begin::Error-->
                        @error('kec_code')
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
                        <input class="form-control form-control-lg form-control-solid @error('kecamatan')is-invalid @enderror" type="text" id="kecamatan" name="kecamatan" value="{{ old('kecamatan') ? old('kecamatan') : $data->kecamatan }}" />
                        <!--end::Input-->
                        <!--begin::Error-->
                        @error('kecamatan')
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
                            <span class="required">Dari Kota</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-solid @error('kota_code')is-invalid @enderror" name="kota_code" data-control="select2" data-placeholder="Pilih Kota">
                            <option class="text-center">Pilih Kota</option>
                            @foreach ($kotas as $i)
                                <option value="{{ $i->kota_code }}" {{ old('kota_code') ? (old('kota_code') == $i->kota_code ? 'selected' : '') : ($data->kota_code == $i->kota_code ? 'selected' : '') }}>{{ $i->kota }}</option>
                            @endforeach
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
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2" id="is_active">
                            <span class="required">Aktif?</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Pilih jika Data bisa digunakan"></i>

                        </label>
                        <!--end::Label-->
                        <!--begin::Radio Button-->
                        <div class="form-check form-check-custom form-check-solid mb-3">
                            <input class="form-check-input" type="radio" value="Y" id="is_active" name="is_active" {{ old('is_active') ? (old('is_active') == "Y" ? 'checked' : '') : ($data->is_active == "Y" ? 'checked' : '') }} />
                            <label class="form-check-label" for="is_active">
                                Ya
                            </label>
                        </div>
                        <!--end::Radio Button-->
                        <!--begin::Radio Button-->
                        <div class="form-check form-check-custom form-check-solid mb-3">
                            <input class="form-check-input" type="radio" value="N" id="is_active" name="is_active" {{ old('is_active') ? (old('is_active') == "N" ? 'checked' : '') : ($data->is_active == "N" ? 'checked' : '') }} />
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
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <!--end::Card footer-->
            </form>
            <!--end:Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
@endsection