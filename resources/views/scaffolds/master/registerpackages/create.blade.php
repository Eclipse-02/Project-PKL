@extends('dashboard.master')

@section('title', 'Create Register Package')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('registerpackages.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <form action="{{ route('registerpackages.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row mx-2">
                    <div class="row g-2 align-items-center">
                        <div class="col-2 text-end">
                            <label for="coy_id" class="col-form-label">No Aplikasi</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control @error('coy_id')is-invalid @enderror"
                                    id="coy_id" name="coy_id" placeholder="Applicant Name"
                                    value="{{ auth()->user()->coy_id }}">
                        </div>
                        <div class="col-2 text-end">
                            <label for="appl_st" class="col-form-label">Aplikasi Status</label>
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('appl_st')is-invalid @enderror"
                                id="appl_st" name="appl_st" placeholder="Applicant Name"
                                value="New">
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 text-end">
                            <label for="pkg_code" class="col-form-label">Paket Produk</label>
                        </div>
                        <div class="col-5">
                            <select class="form-select @error('pkg_code')is-invalid @enderror" id="pkg_code"
                                name="pkg_code">
                                <option class="text-center" selected disabled>-- Pilih Paket Produk --</option>
                                @foreach ($packages as $k)
                                    <option value="{{ $k->pkg_code }}"
                                        {{ old('pkg_code') == $k->pkg_code ? 'selected' : '' }}>{{ $k->pkg_name }}
                                        {{ $k->pkg_code }}</option>
                                @endforeach
                            </select>
                            @error('pkg_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-2 text-end">
                            <label for="appl_date" class="col-form-label">Tgl. Aplikasi</label>
                        </div>
                        <div class="col-3">
                            <input type="date" class="form-control @error('appl_date')is-invalid @enderror"
                                id="appl_date" name="appl_date" placeholder="Applicant Date"
                                value="{{ old('appl_date') }}">
                            @error('appl_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 text-end">
                            <label for="appl_name" class="col-form-label">Nama Konsumen</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control @error('appl_name')is-invalid @enderror"
                                id="appl_name" name="appl_name" placeholder="Applicant Name"
                                value="{{ old('appl_name') }}">
                            @error('appl_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 text-end">
                            <label for="appl_title" class="col-form-label">Title</label>
                        </div>
                        <div class="col-5">
                            <select class="form-select @error('appl_title')is-invalid @enderror" id="appl_title"
                                name="appl_title">
                                <option class="text-center" selected disabled>-- Pilih Title --</option>
                                    <option value="MR">Mr</option>
                                    <option value="MRS">Mrs</option>
                                    <option value="MS">Ms</option>
                            </select>
                        </div>
                    </div>
                    <div class="accordion border border-dark rounded my-3" id="accordionRegisterPackage">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <div class="d-flex justify-content-between">
                                    <button class="accordion-button collapsed pribadi" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <strong>Data Pribadi</strong>
                                    </button>
                                    <i class="fas fa-chevron-down fa-xs prbd d-flex align-items-center me-4"></i>
                                </div>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionRegisterPackage">
                                <div class="accordion-body">
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_gender" class="col-form-label">Jenis Kelamin</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('appl_gender')is-invalid @enderror" id="appl_gender" name="appl_gender">
                                                <option class="text-center" selected disabled>-- Pilih Jenis Kelamin --</option>
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                            </select>
                                            @error('appl_gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-2 text-end">
                                            <label for="appl_status" class="col-form-label">Status</label>
                                        </div>
                                        <div class="col-3">
                                            <select class="form-select @error('appl_status')is-invalid @enderror" id="appl_status" name="appl_status">
                                                <option class="text-center" selected disabled>-- Pilih Status --</option>
                                                    <option value="1">Kawin</option>
                                                    <option value="2">Belum Kawin</option>
                                                    <option value="3">Cerai</option>
                                            </select>
                                            @error('appl_status')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_id_type" class="col-form-label">Tipe ID</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('appl_id_type')is-invalid @enderror" id="appl_id_type" name="appl_id_type">
                                                <option class="text-center" selected disabled>-- Pilih Tipe ID --</option>
                                                    <option value="1">KTP</option>
                                                    <option value="2">SIM</option>
                                            </select>
                                            @error('appl_id_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_id_no" class="col-form-label">No ID</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_id_no')is-invalid @enderror"
                                                id="appl_id_no" name="appl_id_no" placeholder="Applicant ID No"
                                                value="{{ old('appl_id_no') }}">
                                            @error('appl_id_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_birth_place" class="col-form-label">Tempat Lahir</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_birth_place')is-invalid @enderror"
                                                id="appl_birth_place" name="appl_birth_place" placeholder="Applicant Birth Place"
                                                value="{{ old('appl_birth_place') }}">
                                            @error('appl_birth_place')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-2 text-end">
                                            <label for="appl_birth_date" class="col-form-label">Tgl. Lahir</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="date" class="form-control @error('appl_birth_date')is-invalid @enderror"
                                                id="appl_birth_date" name="appl_birth_date" placeholder="Applicant Birth Place"
                                                value="{{ old('appl_birth_date') }}">
                                            @error('appl_birth_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_addr" class="col-form-label">Alamat</label>
                                        </div>
                                        <div class="col-5">
                                            <textarea class="form-control @error('appl_addr')is-invalid @enderror" id="appl_addr" name="appl_addr" placeholder="Alamat"></textarea>
                                            @error('appl_addr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="prov_code" class="col-form-label">Provinsi</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('prov_code')is-invalid @enderror" id="prov_code"
                                                name="prov_code">
                                                <option class="text-center" selected disabled>-- Pilih Provinsi --</option>
                                                @foreach ($prov as $i)
                                                    <option value="{{ $i->prov_code }}"
                                                        {{ old('prov_code') == $i->prov_code ? 'selected' : '' }}>{{ $i->provinsi }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('prov_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="kota_code" class="col-form-label">Kota</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('kota_code')is-invalid @enderror" id="kota_code"
                                                name="kota_code">
                                                <option class="text-center" selected disabled>-- Pilih Kota --</option>
                                            </select>
                                            @error('kota_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="kec_code" class="col-form-label">Kecamatan</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('kec_code')is-invalid @enderror" id="kec_code"
                                                name="kec_code">
                                                <option class="text-center" selected disabled>-- Pilih Kecamatan --</option>
                                            </select>
                                            @error('kec_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="kel_code" class="col-form-label">Kelurahan</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('kel_code')is-invalid @enderror" id="kel_code"
                                                name="kel_code">
                                                <option class="text-center" selected disabled>-- Pilih Kelurahan --</option>
                                            </select>
                                            @error('kel_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="con_code" class="col-form-label">Warga Negara</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('con_code')is-invalid @enderror" id="con_code"
                                                name="con_code">
                                                <option selected class="text-center" selected disabled>-- Pilih Warga Negara --</option>
                                                @foreach ($countries as $i)
                                                    <option value="{{ $i->con_code }}"
                                                        {{ old('con_code') == $i->con_code ? 'selected' : '' }}>{{ $i->con_name }} /
                                                        {{ $i->con_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('con_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="edu_code" class="col-form-label">Pendidikan</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('edu_code')is-invalid @enderror" id="edu_code"
                                                name="edu_code">
                                                <option selected class="text-center" selected disabled>-- Pilih Pendidikan --</option>
                                                @foreach ($edus as $i)
                                                    <option value="{{ $i->edu_code }}"
                                                        {{ old('edu_code') == $i->edu_code ? 'selected' : '' }}>{{ $i->edu_name }} /
                                                        {{ $i->edu_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('edu_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="job_code" class="col-form-label">Jabatan</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('job_code')is-invalid @enderror" id="job_code"
                                                name="job_code">
                                                <option selected class="text-center" selected disabled>-- Pilih Jabatan --</option>
                                                @foreach ($jobs as $i)
                                                    <option value="{{ $i->job_code }}"
                                                        {{ old('job_code') == $i->job_code ? 'selected' : '' }}>{{ $i->job_name }} /
                                                        {{ $i->job_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('job_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_fth_name" class="col-form-label">Nama Orang Tua</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_fth_name')is-invalid @enderror"
                                                id="appl_fth_name" name="appl_fth_name" placeholder="Applicant Father Name"
                                                value="{{ old('appl_fth_name') }}">
                                            @error('appl_fth_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="rel_code" class="col-form-label">Relasi</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('rel_code')is-invalid @enderror" id="rel_code"
                                                name="rel_code">
                                                <option selected class="text-center" selected disabled>-- Pilih Relasi --</option>
                                                @foreach ($relations as $i)
                                                    <option value="{{ $i->rel_code }}"
                                                        {{ old('rel_code') == $i->rel_code ? 'selected' : '' }}>{{ $i->rel_name }} /
                                                        {{ $i->rel_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('rel_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <div class="d-flex justify-content-between">
                                    <button class="accordion-button collapsed pass" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <strong>Passport</strong>
                                    </button>
                                    <i class="fas fa-chevron-down fa-xs pss d-flex align-items-center me-4"></i>
                                </div>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionRegisterPackage">
                                <div class="accordion-body">
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_mahram" class="col-form-label">Mahram</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_mahram')is-invalid @enderror"
                                                id="appl_mahram" name="appl_mahram" placeholder="Applicant Mahram"
                                                value="{{ old('appl_mahram') }}">
                                            @error('appl_mahram')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_pass_no" class="col-form-label">No. Passport</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_pass_no')is-invalid @enderror"
                                                id="appl_pass_no" name="appl_pass_no" placeholder="Applicant Pass No"
                                                value="{{ old('appl_pass_no') }}">
                                            @error('appl_pass_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_pass_name" class="col-form-label">Nama Passport</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_pass_name')is-invalid @enderror"
                                                id="appl_pass_name" name="appl_pass_name" placeholder="Applicant Pass Name"
                                                value="{{ old('appl_pass_name') }}">
                                            @error('appl_pass_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_pass_iss_date" class="col-form-label">Issue Date</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control @error('appl_pass_iss_date')is-invalid @enderror"
                                                id="appl_pass_iss_date" name="appl_pass_iss_date" placeholder="Applicant Pass ISS Date"
                                                value="{{ old('appl_pass_iss_date') }}">
                                            @error('appl_pass_iss_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_pass_exp_date" class="col-form-label">Expired Date</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control @error('appl_pass_exp_date')is-invalid @enderror"
                                                id="appl_pass_exp_date" name="appl_pass_exp_date"
                                                placeholder="Applicant Pass Expired Date" value="{{ old('appl_pass_exp_date') }}">
                                            @error('appl_pass_exp_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_pass_iss_palace" class="col-form-label">Issued Place</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_pass_iss_palace')is-invalid @enderror"
                                                id="appl_pass_iss_palace" name="appl_pass_iss_palace"
                                                placeholder="Applicant Pass ISS Palace" value="{{ old('appl_pass_iss_palace') }}">
                                            @error('appl_pass_iss_palace')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <div class="d-flex justify-content-between">
                                    <button class="accordion-button collapsed vac" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>Data Vaksin</strong>
                                    </button>
                                    <i class="fas fa-chevron-down fa-xs vc d-flex align-items-center me-4"></i>
                                </div>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionRegisterPackage">
                                <div class="accordion-body">
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_vac_name_id" class="col-form-label">Nama di Kartu</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_vac_name_id')is-invalid @enderror"
                                                id="appl_vac_name_id" name="appl_vac_name_id" placeholder="Applicant Vaccine Name ID"
                                                value="{{ old('appl_vac_name_id') }}">
                                            @error('appl_vac_name_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <p class="mb-1 text-primary">Vaksin 1</p>
                                        <div style="border: 1px solid black; width: 100%" class="my-1"></div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="vc_code_01" class="col-form-label">Nama Vaksin</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('vc_code_01')is-invalid @enderror" id="vc_code_01"
                                                name="vc_code_01">
                                                <option selected class="text-center" selected disabled>-- Pilih Vaccine Code --</option>
                                                @foreach ($vaccines as $i)
                                                    <option value="{{ $i->vc_code }}"
                                                        {{ old('vc_code_01') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }} /
                                                        {{ $i->vc_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('vc_code_01')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_vac_id_date_01" class="col-form-label">Tanggal Vaksin</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control @error('appl_vac_id_date_01')is-invalid @enderror"
                                                id="appl_vac_id_date_01" name="appl_vac_id_date_01"
                                                placeholder="Applicant Vaccine ID Date 01" value="{{ old('appl_vac_id_date_01') }}">
                                            @error('appl_vac_id_date_01')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <p class="mb-1 text-primary">Vaksin 2</p>
                                        <div style="border: 1px solid black; width: 100%" class="my-1"></div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="vc_code_02" class="col-form-label">Nama Vaksin</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('vc_code_02')is-invalid @enderror" id="vc_code_02"
                                                name="vc_code_02">
                                                <option selected class="text-center" selected disabled>-- Pilih Vaccine Code --</option>
                                                @foreach ($vaccines as $i)
                                                    <option value="{{ $i->vc_code }}"
                                                        {{ old('vc_code_02') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }} /
                                                        {{ $i->vc_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('vc_code_02')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_vac_id_date_02" class="col-form-label">Tanggal Vaksin</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control @error('appl_vac_id_date_02')is-invalid @enderror"
                                                id="appl_vac_id_date_02" name="appl_vac_id_date_02"
                                                placeholder="Applicant Vaccine ID Date 02" value="{{ old('appl_vac_id_date_02') }}">
                                            @error('appl_vac_id_date_02')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <p class="mb-1 text-primary">Vaksin 3</p>
                                        <div style="border: 1px solid black; width: 100%" class="my-1"></div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="vc_code_03" class="col-form-label">Nama Vaksin</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('vc_code_03')is-invalid @enderror" id="vc_code_03"
                                                name="vc_code_03">
                                                <option selected class="text-center" selected disabled>-- Pilih Vaccine Code --</option>
                                                @foreach ($vaccines as $i)
                                                    <option value="{{ $i->vc_code }}"
                                                        {{ old('vc_code_03') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }} /
                                                        {{ $i->vc_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('vc_code_03')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_vac_id_date_03" class="col-form-label">Tanggal Vaksin</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control @error('appl_vac_id_date_03')is-invalid @enderror"
                                                id="appl_vac_id_date_03" name="appl_vac_id_date_03"
                                                placeholder="Applicant Vaccine ID Date 03" value="{{ old('appl_vac_id_date_03') }}">
                                            @error('appl_vac_id_date_03')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <p class="mb-1 text-primary">Vaksin 4</p>
                                        <div style="border: 1px solid black; width: 100%" class="my-1"></div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="vc_code_04" class="col-form-label">Nama Vaksin</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('vc_code_04')is-invalid @enderror" id="vc_code_04"
                                                name="vc_code_04">
                                                <option selected class="text-center" selected disabled>-- Pilih Vaccine Code --</option>
                                                @foreach ($vaccines as $i)
                                                    <option value="{{ $i->vc_code }}"
                                                        {{ old('vc_code_04') == $i->vc_code ? 'selected' : '' }}>{{ $i->vc_name }} /
                                                        {{ $i->vc_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('vc_code_04')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_vac_id_date_04" class="col-form-label">Tanggal Vaksin</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control @error('appl_vac_id_date_04')is-invalid @enderror"
                                                id="appl_vac_id_date_04" name="appl_vac_id_date_04"
                                                placeholder="Applicant Vaccine ID Date 04" value="{{ old('appl_vac_id_date_04') }}">
                                            @error('appl_vac_id_date_04')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <div class="d-flex justify-content-between">
                                    <button class="accordion-button collapsed data" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <strong>Kelengkapan Data</strong>
                                    </button>
                                    <i class="fas fa-chevron-down fa-xs dt d-flex align-items-center me-4"></i>
                                </div>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionRegisterPackage">
                                <div class="accordion-body">
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="supl_code" class="col-form-label">Jemaah dari</label>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select @error('supl_code')is-invalid @enderror" id="supl_code"
                                                name="supl_code">
                                                <option selected class="text-center" selected disabled>-- Pilih Jemaah --</option>
                                                @foreach ($suppliers as $i)
                                                    <option value="{{ $i->supl_code }}"
                                                        {{ old('supl_code') == $i->supl_code ? 'selected' : '' }}>{{ $i->supl_name }} /
                                                        {{ $i->supl_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('supl_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_tlp" class="col-form-label">No. Telp</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_tlp')is-invalid @enderror"
                                                id="appl_tlp" name="appl_tlp" placeholder="Package Telephone"
                                                value="{{ old('appl_tlp') }}">
                                            @error('appl_tlp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_email" class="col-form-label">Email</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control @error('appl_email')is-invalid @enderror"
                                                id="appl_email" name="appl_email" placeholder="Package Telephone"
                                                value="{{ old('appl_email') }}">
                                            @error('appl_email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_img_full" class="col-form-label">Foto Full</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-control custom-radio form-check-inline ms-2">
                                                <input class="custom-control-input" id="appl_is_img_full" value="Y"
                                                    name="appl_is_img_full" type="radio"
                                                    {{ old('appl_is_img_full') == 'Y' ? 'checked' : '' }}>
                                                <label class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input class="custom-control-input" id="appl_is_img_full" value="N"
                                                    name="appl_is_img_full" type="radio"
                                                    {{ old('appl_is_img_full') == 'N' ? 'checked' : '' }}>
                                                <label class="custom-control-label">No</label>
                                            </div>
                                            @error('appl_is_img_full')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_img_full_name" class="col-form-label">File</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="file"
                                                class="form-control @error('appl_is_img_full_name')is-invalid @enderror"
                                                id="appl_is_img_full_name" name="appl_is_img_full_name" placeholder="Supplier Pic"
                                                value="{{ old('appl_is_img_full_name') }}">
                                            @error('appl_is_img_full_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_img_half" class="col-form-label">Foto Setengah</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-control custom-radio form-check-inline ms-2">
                                                <input class="custom-control-input" id="appl_is_img_half" value="Y"
                                                    name="appl_is_img_half" type="radio"
                                                    {{ old('appl_is_img_half') == 'Y' ? 'checked' : '' }}>
                                                <label class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input class="custom-control-input" id="appl_is_img_half" value="N"
                                                    name="appl_is_img_half" type="radio"
                                                    {{ old('appl_is_img_half') == 'N' ? 'checked' : '' }}>
                                                <label class="custom-control-label">No</label>
                                            </div>
                                            @error('appl_is_img_half')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_img_half_name" class="col-form-label">File</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="file"
                                                class="form-control @error('appl_is_img_half_name')is-invalid @enderror"
                                                id="appl_is_img_half_name" name="appl_is_img_half_name" placeholder="Supplier Pic"
                                                value="{{ old('appl_is_img_half_name') }}">
                                            @error('appl_is_img_half_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_pass" class="col-form-label">Fisik Passport</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-control custom-radio form-check-inline ms-2">
                                                <input class="custom-control-input" id="appl_is_pass" value="Y"
                                                    name="appl_is_pass" type="radio"
                                                    {{ old('appl_is_pass') == 'Y' ? 'checked' : '' }}>
                                                <label class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input class="custom-control-input" id="appl_is_pass" value="N"
                                                    name="appl_is_pass" type="radio"
                                                    {{ old('appl_is_pass') == 'N' ? 'checked' : '' }}>
                                                <label class="custom-control-label">No</label>
                                            </div>
                                            @error('appl_is_pass')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_pass_name" class="col-form-label">File</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="file"
                                                class="form-control @error('appl_is_pass_name')is-invalid @enderror"
                                                id="appl_is_pass_name" name="appl_is_pass_name" placeholder="Supplier Pic"
                                                value="{{ old('appl_is_pass_name') }}">
                                            @error('appl_is_pass_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_yb" class="col-form-label">Buku Kuning</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-control custom-radio form-check-inline ms-2">
                                                <input class="custom-control-input" id="appl_is_yb" value="Y"
                                                    name="appl_is_yb" type="radio"
                                                    {{ old('appl_is_yb') == 'Y' ? 'checked' : '' }}>
                                                <label class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input class="custom-control-input" id="appl_is_yb" value="N"
                                                    name="appl_is_yb" type="radio"
                                                    {{ old('appl_is_yb') == 'N' ? 'checked' : '' }}>
                                                <label class="custom-control-label">No</label>
                                            </div>
                                            @error('appl_is_yb')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_yb_name" class="col-form-label">File</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="file"
                                                class="form-control @error('appl_is_yb_name')is-invalid @enderror"
                                                id="appl_is_yb_name" name="appl_is_yb_name" placeholder="Supplier Pic"
                                                value="{{ old('appl_is_yb_name') }}">
                                            @error('appl_is_yb_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_copy_id" class="col-form-label">Foto KTP</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-control custom-radio form-check-inline ms-2">
                                                <input class="custom-control-input" id="appl_is_copy_id" value="Y"
                                                    name="appl_is_copy_id" type="radio"
                                                    {{ old('appl_is_copy_id') == 'Y' ? 'checked' : '' }}>
                                                <label class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input class="custom-control-input" id="appl_is_copy_id" value="N"
                                                    name="appl_is_copy_id" type="radio"
                                                    {{ old('appl_is_copy_id') == 'N' ? 'checked' : '' }}>
                                                <label class="custom-control-label">No</label>
                                            </div>
                                            @error('appl_is_copy_id')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_id_name" class="col-form-label">File</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="file"
                                                class="form-control @error('appl_is_id_name')is-invalid @enderror"
                                                id="appl_is_id_name" name="appl_is_id_name" placeholder="Supplier Pic"
                                                value="{{ old('appl_is_id_name') }}">
                                            @error('appl_is_id_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_copy_kk" class="col-form-label">Copy KK</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-control custom-radio form-check-inline ms-2">
                                                <input class="custom-control-input" id="appl_is_copy_kk" value="Y"
                                                    name="appl_is_copy_kk" type="radio"
                                                    {{ old('appl_is_copy_kk') == 'Y' ? 'checked' : '' }}>
                                                <label class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input class="custom-control-input" id="appl_is_copy_kk" value="N"
                                                    name="appl_is_copy_kk" type="radio"
                                                    {{ old('appl_is_copy_kk') == 'N' ? 'checked' : '' }}>
                                                <label class="custom-control-label">No</label>
                                            </div>
                                            @error('appl_is_copy_kk')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_kk_name" class="col-form-label">File</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="file"
                                                class="form-control @error('appl_is_kk_name')is-invalid @enderror"
                                                id="appl_is_kk_name" name="appl_is_kk_name" placeholder="Supplier Pic"
                                                value="{{ old('appl_is_kk_name') }}">
                                            @error('appl_is_kk_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_copy_pass" class="col-form-label">Copy Passport</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-control custom-radio form-check-inline ms-2">
                                                <input class="custom-control-input" id="appl_is_copy_pass" value="Y"
                                                    name="appl_is_copy_pass" type="radio"
                                                    {{ old('appl_is_copy_pass') == 'Y' ? 'checked' : '' }}>
                                                <label class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input class="custom-control-input" id="appl_is_copy_pass" value="N"
                                                    name="appl_is_copy_pass" type="radio"
                                                    {{ old('appl_is_copy_pass') == 'N' ? 'checked' : '' }}>
                                                <label class="custom-control-label">No</label>
                                            </div>
                                            @error('appl_is_copy_pass')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_copy_pass_name" class="col-form-label">File</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="file"
                                                class="form-control @error('appl_is_copy_pass_name')is-invalid @enderror"
                                                id="appl_is_copy_pass_name" name="appl_is_copy_pass_name" placeholder="Supplier Pic"
                                                value="{{ old('appl_is_copy_pass_name') }}">
                                            @error('appl_is_copy_pass_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_copy_akta_n" class="col-form-label">Copy Akta N</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-control custom-radio form-check-inline ms-2">
                                                <input class="custom-control-input" id="appl_is_copy_akta_n" value="Y"
                                                    name="appl_is_copy_akta_n" type="radio"
                                                    {{ old('appl_is_copy_akta_n') == 'Y' ? 'checked' : '' }}>
                                                <label class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input class="custom-control-input" id="appl_is_copy_akta_n" value="N"
                                                    name="appl_is_copy_akta_n" type="radio"
                                                    {{ old('appl_is_copy_akta_n') == 'N' ? 'checked' : '' }}>
                                                <label class="custom-control-label">No</label>
                                            </div>
                                            @error('appl_is_copy_akta_n')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_akta_n_name" class="col-form-label">File</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="file"
                                                class="form-control @error('appl_is_akta_n_name')is-invalid @enderror"
                                                id="appl_is_akta_n_name" name="appl_is_akta_n_name" placeholder="Supplier Pic"
                                                value="{{ old('appl_is_akta_n_name') }}">
                                            @error('appl_is_akta_n_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_copy_akta_l" class="col-form-label">Copy Akta Lahir</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-control custom-radio form-check-inline ms-2">
                                                <input class="custom-control-input" id="appl_is_copy_akta_l" value="Y"
                                                    name="appl_is_copy_akta_l" type="radio"
                                                    {{ old('appl_is_copy_akta_l') == 'Y' ? 'checked' : '' }}>
                                                <label class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input class="custom-control-input" id="appl_is_copy_akta_l" value="N"
                                                    name="appl_is_copy_akta_l" type="radio"
                                                    {{ old('appl_is_copy_akta_l') == 'N' ? 'checked' : '' }}>
                                                <label class="custom-control-label">No</label>
                                            </div>
                                            @error('appl_is_copy_akta_l')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-3 align-items-center">
                                        <div class="col-2 text-end">
                                            <label for="appl_is_akta_l_name" class="col-form-label">File</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="file"
                                                class="form-control @error('appl_is_akta_l_name')is-invalid @enderror"
                                                id="appl_is_akta_l_name" name="appl_is_akta_l_name" placeholder="Supplier Pic"
                                                value="{{ old('appl_is_akta_l_name') }}">
                                            @error('appl_is_akta_l_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <button type="submit" class="btn btn-primary w-100" name="action" value="submit">Submit</button>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <button type="submit" class="btn btn-warning w-100" name="action" value="post">Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('.pribadi').click(function() {
            var clicks = $(this).data('clicks');
            if (clicks) {
                $('.prbd').removeClass('fa-chevron-up');
                $('.prbd').addClass('fa-chevron-down');
            } else {
                $('.prbd').removeClass('fa-chevron-down');
                $('.prbd').addClass('fa-chevron-up');
            }
            $(this).data("clicks", !clicks);
        });
        $('.pass').click(function() {
            var clicks = $(this).data('clicks');
            if (clicks) {
                $('.pss').removeClass('fa-chevron-up');
                $('.pss').addClass('fa-chevron-down');
            } else {
                $('.pss').removeClass('fa-chevron-down');
                $('.pss').addClass('fa-chevron-up');
            }
            $(this).data("clicks", !clicks);
        });
        $('.vac').click(function() {
            var clicks = $(this).data('clicks');
            if (clicks) {
                $('.vc').removeClass('fa-chevron-up');
                $('.vc').addClass('fa-chevron-down');
            } else {
                $('.vc').removeClass('fa-chevron-down');
                $('.vc').addClass('fa-chevron-up');
            }
            $(this).data("clicks", !clicks);
        });
        $('.data').click(function() {
            var clicks = $(this).data('clicks');
            if (clicks) {
                $('.dt').removeClass('fa-chevron-up');
                $('.dt').addClass('fa-chevron-down');
            } else {
                $('.dt').removeClass('fa-chevron-down');
                $('.dt').addClass('fa-chevron-up');
            }
            $(this).data("clicks", !clicks);
        });
        $('#coy_id').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_date').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_st').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_id_no').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_is_img_full_name').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_is_img_half_name').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_is_pass_name').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_is_copy_pass_name').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_is_yb_name').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_is_id_name').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_is_kk_name').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_is_akta_n_name').attr("style", "pointer-events: none; background-color: lightgray;");
        $('#appl_is_akta_l_name').attr("style", "pointer-events: none; background-color: lightgray;");

        window.onload = function() {
            if ($('#appl_id_type').val()) {
                $('#appl_id_no').attr("style", "");
                var appl_id_no = document.getElementById('appl_id_no');

                appl_id_no.value = formatID(appl_id_no.value);
            }

            if ($('input:radio[name=appl_id_type]:checked').val()) {
                $('#appl_is_img_full_name').attr("style", "");
            } else {
                $('#appl_is_img_full_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }

            if ($('input:radio[name=appl_is_img_full]:checked').val() == 'Y') {
                $('#appl_is_img_full_name').attr("style", "");
            } else {
                $('#appl_is_img_full_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }

            if ($('input:radio[name=appl_is_img_half]:checked').val() == 'Y') {
                $('#appl_is_img_half_name').attr("style", "");
            } else {
                $('#appl_is_img_half_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }

            if ($('input:radio[name=appl_is_yb]:checked').val() == 'Y') {
                $('#appl_is_yb_name').attr("style", "");
            } else {
                $('#appl_is_yb_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }

            if ($('input:radio[name=appl_is_copy_id]:checked').val() == 'Y') {
                $('#appl_is_id_name').attr("style", "");
            } else {
                $('#appl_is_id_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }

            if ($('input:radio[name=appl_is_copy_kk]:checked').val() == 'Y') {
                $('#appl_is_kk_name').attr("style", "");
            } else {
                $('#appl_is_kk_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }

            if ($('input:radio[name=appl_is_pass]:checked').val() == 'Y') {
                $('#appl_is_pass_name').attr("style", "");
            } else {
                $('#appl_is_pass_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }

            if ($('input:radio[name=appl_is_copy_pass]:checked').val() == 'Y') {
                $('#appl_is_copy_pass_name').attr("style", "");
            } else {
                $('#appl_is_copy_pass_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }

            if ($('input:radio[name=appl_is_copy_akta_n]:checked').val() == 'Y') {
                $('#appl_is_akta_n_name').attr("style", "");
            } else {
                $('#appl_is_akta_n_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }

            if ($('input:radio[name=appl_is_copy_akta_l]:checked').val() == 'Y') {
                $('#appl_is_akta_l_name').attr("style", "");
            } else {
                $('#appl_is_akta_l_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        }

        $('#appl_id_type').change(function() {
            $('#appl_id_no').attr("style", "");
            var appl_id_no = document.getElementById('appl_id_no');

            appl_id_no.addEventListener('keyup', function(e) {
                appl_id_no.value = formatID(this.value);
            });
        })

        $('input:radio[name=appl_is_img_full]').change(function() {
            if ($(this).val() == 'Y') {
                $('#appl_is_img_full_name').attr("style", "");
            } else {
                $('#appl_is_img_full_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        })

        $('input:radio[name=appl_is_img_half]').change(function() {
            if ($(this).val() == 'Y') {
                $('#appl_is_img_half_name').attr("style", "");
            } else {
                $('#appl_is_img_half_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        })

        $('input:radio[name=appl_is_yb]').change(function() {
            if ($(this).val() == 'Y') {
                $('#appl_is_yb_name').attr("style", "");
            } else {
                $('#appl_is_yb_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        })

        $('input:radio[name=appl_is_copy_id]').change(function() {
            if ($(this).val() == 'Y') {
                $('#appl_is_id_name').attr("style", "");
            } else {
                $('#appl_is_id_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        })

        $('input:radio[name=appl_is_copy_kk]').change(function() {
            if ($(this).val() == 'Y') {
                $('#appl_is_kk_name').attr("style", "");
            } else {
                $('#appl_is_kk_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        })

        $('input:radio[name=appl_is_copy_pass]').change(function() {
            if ($(this).val() == 'Y') {
                $('#appl_is_copy_pass_name').attr("style", "");
            } else {
                $('#appl_is_copy_pass_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        })

        $('input:radio[name=appl_is_pass]').change(function() {
            if ($(this).val() == 'Y') {
                $('#appl_is_pass_name').attr("style", "");
            } else {
                $('#appl_is_pass_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        })

        $('input:radio[name=appl_is_copy_akta_n]').change(function() {
            if ($(this).val() == 'Y') {
                $('#appl_is_akta_n_name').attr("style", "");
            } else {
                $('#appl_is_akta_n_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        })

        $('input:radio[name=appl_is_copy_akta_l]').change(function() {
            if ($(this).val() == 'Y') {
                $('#appl_is_akta_l_name').attr("style", "");
            } else {
                $('#appl_is_akta_l_name').attr("style", "pointer-events: none; background-color: lightgray;");
            }
        })
    </script>
@endsection