@extends('dashboard.master')

@section('title', 'Update Register Package')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('registerpackages.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('registerpackages.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Coy ID</label>
                        <select class="form-select @error('coy_id')is-invalid @enderror" id="coy_id" name="coy_id">
                            <option class="text-center" selected disabled>-- Pilih Coy ID --</option>
                            @foreach ($coys as $k)
                                <option value="{{ $k->coy_id }}" {{ old('coy_id') ? (old('coy_id') == $k->coy_id ? 'selected' : '') : ($data->coy_id == $k->coy_id ? 'selected' : '') }}>{{ $k->coy_name }}</option>
                            @endforeach
                        </select>
                        @error('coy_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Package Code</label>
                        <select class="form-select @error('pkg_code')is-invalid @enderror" id="pkg_code" name="pkg_code">
                            <option class="text-center" selected disabled>-- Pilih Package Code --</option>
                            @foreach ($packages as $k)
                                <option value="{{ $k->pkg_code }}" {{ old('pkg_code') ? (old('pkg_code') == $k->pkg_code ? 'selected' : '') : ($data->pkg_code == $k->pkg_code ? 'selected' : '') }}>{{ $k->pkg_name }} {{ $k->pkg_code }}</option>
                            @endforeach
                        </select>
                        @error('pkg_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Applicant Status</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="appl_st" value="NW" name="appl_st" type="radio" {{ old('appl_st') ? (old('appl_st') == "NW" ? 'checked' : '') : ($data->appl_st == "NW" ? 'checked' : '') }}>
                        <label class="custom-control-label">New</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="appl_st" value="ST" name="appl_st" type="radio" {{ old('appl_st') ? (old('appl_st') == "CN" ? 'checked' : '') : ($data->appl_st == "CN" ? 'checked' : '') }}>
                        <label class="custom-control-label">Aktif</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="appl_st" value="CL" name="appl_st" type="radio" {{ old('appl_st') ? (old('appl_st') == "CL" ? 'checked' : '') : ($data->appl_st == "CL" ? 'checked' : '') }}>
                        <label class="custom-control-label">Cancel</label>
                    </div>
                    @error('appl_st')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Date</label>
                        <input type="date" class="form-control @error('appl_date')is-invalid @enderror" id="appl_date" name="appl_date" placeholder="Applicant Date" value="{{ old('appl_date') ? old('appl_date') : $data->appl_date }}">
                        @error('appl_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Name</label>
                        <input type="text" class="form-control @error('appl_name')is-invalid @enderror" id="appl_name" name="appl_name" placeholder="Applicant Name" value="{{ old('appl_name') ? old('appl_name') : $data->appl_name }}">
                        @error('appl_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Gender</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_gender" value="1" name="appl_gender" type="radio" {{ old('appl_gender') ? (old('appl_gender') == 1 ? 'checked' : '') : ($data->appl_gender == 1 ? 'checked' : '') }}>
                            <label class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_gender" value="2" name="appl_gender" type="radio" {{ old('appl_gender') ? (old('appl_gender') == 2 ? 'checked' : '') : ($data->appl_gender == 2 ? 'checked' : '') }}>
                            <label class="custom-control-label">Perempuan</label>
                        </div>
                        @error('appl_gender')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Title</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_title" value="MR" name="appl_title" type="radio" {{ old('appl_title') ? (old('appl_title') == "MR" ? 'checked' : '') : ($data->appl_title == "MR" ? 'checked' : '') }}>
                            <label class="custom-control-label">Mr</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_title" value="MRS" name="appl_title" type="radio" {{ old('appl_title') ? (old('appl_title') == "MRS" ? 'checked' : '') : ($data->appl_title == "MRS" ? 'checked' : '') }}>
                            <label class="custom-control-label">Mrs</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_title" value="MS" name="appl_title" type="radio" {{ old('appl_title') ? (old('appl_title') == "MR" ? 'checked' : '') : ($data->appl_title == "MR" ? 'checked' : '') }}>
                            <label class="custom-control-label">Ms</label>
                        </div>
                        @error('appl_title')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant ID Type</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_id_type" value="1" name="appl_id_type" type="radio" {{ old('appl_id_type') ? (old('appl_id_type') == 1 ? 'checked' : '') : ($data->appl_id_type == 1 ? 'checked' : '') }}>
                            <label class="custom-control-label">KTP</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_id_type" value="2" name="appl_id_type" type="radio" {{ old('appl_id_type') ? (old('appl_id_type') == 2 ? 'checked' : '') : ($data->appl_id_type == 2 ? 'checked' : '') }}>
                            <label class="custom-control-label">SIM</label>
                        </div>
                        @error('appl_id_type')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant ID No</label>
                        <input type="text" class="form-control @error('appl_id_no')is-invalid @enderror" id="appl_id_no" name="appl_id_no" placeholder="Applicant ID No" value="{{ old('appl_id_no') ? old('appl_id_no') : $data->appl_id_no }}">
                        @error('appl_id_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Birth Place</label>
                        <input type="date" class="form-control @error('appl_birth_place')is-invalid @enderror" id="appl_birth_place" name="appl_birth_place" placeholder="Applicant Birth Place" value="{{ old('appl_birth_place') ? old('appl_birth_place') : $data->appl_birth_place }}">
                        @error('appl_birth_place')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Status</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_status" value="1" name="appl_status" type="radio" {{ old('appl_status') ? (old('appl_status') == 1 ? 'checked' : '') : ($data->appl_status == 1 ? 'checked' : '') }}>
                            <label class="custom-control-label">Kawin</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_status" value="2" name="appl_status" type="radio" {{ old('appl_status') ? (old('appl_status') == 2 ? 'checked' : '') : ($data->appl_status == 2 ? 'checked' : '') }}>
                            <label class="custom-control-label">Belum Kawin</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_status" value="3" name="appl_status" type="radio" {{ old('appl_status') ? (old('appl_status') == 3 ? 'checked' : '') : ($data->appl_status == 3 ? 'checked' : '') }}>
                            <label class="custom-control-label">Cerai</label>
                        </div>
                        @error('appl_status')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip</label>
                        <select class="form-select @error('zip_code')is-invalid @enderror" id="zip_code" name="zip_code">
                            <option selected class="text-center" selected disabled>-- Pilih Zip --</option>
                            @foreach ($zips as $i)
                                <option value="{{ $i->zip_code }}" {{ old('zip_code') ? (old('zip_code') == $i->zip_code ? 'selected' : '') : ($data->zip_code == $i->zip_code ? 'selected' : '') }}>{{ $i->zip_desc }}</option>
                            @endforeach
                        </select>
                        @error('zip_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Provinsi</label>
                        <select class="form-select @error('prov_code')is-invalid @enderror" id="prov_code" name="prov_code">
                            <option class="text-center" selected disabled>-- Pilih Provinsi --</option>
                        </select>
                        @error('prov_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota</label>
                        <select class="form-select @error('kota_code')is-invalid @enderror" id="kota_code" name="kota_code">
                            <option class="text-center" selected disabled>-- Pilih Kota --</option>
                        </select>
                        @error('kota_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan</label>
                        <select class="form-select @error('kec_code')is-invalid @enderror" id="kec_code" name="kec_code">
                            <option class="text-center" selected disabled>-- Pilih Kecamatan --</option>
                        </select>
                        @error('kec_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kelurahan</label>
                        <select class="form-select @error('kel_code')is-invalid @enderror" id="kel_code" name="kel_code">
                            <option class="text-center" selected disabled>-- Pilih Kelurahan --</option>
                        </select>
                        @error('kel_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Country</label>
                        <select class="form-select @error('con_code')is-invalid @enderror" id="con_code" name="con_code">
                            <option selected class="text-center" selected disabled>-- Pilih Country --</option>
                            @foreach ($countries as $i)
                                <option value="{{ $i->con_code }}" {{ old('con_code') ? (old('con_code') == $i->con_code ? 'selected' : '') : ($data->con_code == $i->con_code ? 'selected' : '') }}>{{ $i->con_name }} / {{ $i->con_code }}</option>
                            @endforeach
                        </select>
                        @error('con_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Edu</label>
                        <select class="form-select @error('edu_code')is-invalid @enderror" id="edu_code" name="edu_code">
                            <option selected class="text-center" selected disabled>-- Pilih Edu --</option>
                            @foreach ($edus as $i)
                                <option value="{{ $i->edu_code }}" {{ old('edu_code') ? (old('edu_code') == $i->edu_code ? 'selected' : '') : ($data->edu_code == $i->edu_code ? 'selected' : '') }}>{{ $i->edu_name }} / {{ $i->edu_code }}</option>
                            @endforeach
                        </select>
                        @error('edu_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Job</label>
                        <select class="form-select @error('job_code')is-invalid @enderror" id="job_code" name="job_code">
                            <option selected class="text-center" selected disabled>-- Pilih Job --</option>
                            @foreach ($jobs as $i)
                                <option value="{{ $i->job_code }}" {{ old('job_code') ? (old('job_code') == $i->job_code ? 'selected' : '') : ($data->job_code == $i->job_code ? 'selected' : '') }}>{{ $i->job_name }} / {{ $i->job_code }}</option>
                            @endforeach
                        </select>
                        @error('job_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch</label>
                        <select class="form-select @error('branch_code')is-invalid @enderror" id="branch_code" name="branch_code">
                            <option selected class="text-center" selected disabled>-- Pilih Branch --</option>
                            @foreach ($branches as $i)
                                <option value="{{ $i->branch_code }}" {{ old('branch_code') ? (old('branch_code') == $i->branch_code ? 'selected' : '') : ($data->branch_code == $i->branch_code ? 'selected' : '') }}>{{ $i->branch_name }} / {{ $i->branch_code }}</option>
                            @endforeach
                        </select>
                        @error('branch_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Relation</label>
                        <select class="form-select @error('rel_code')is-invalid @enderror" id="rel_code" name="rel_code">
                            <option selected class="text-center" selected disabled>-- Pilih Relation --</option>
                            @foreach ($relations as $i)
                                <option value="{{ $i->rel_code }}" {{ old('rel_code') ? (old('rel_code') == $i->rel_code ? 'selected' : '') : ($data->rel_code == $i->rel_code ? 'selected' : '') }}>{{ $i->rel_name }} / {{ $i->rel_code }}</option>
                            @endforeach
                        </select>
                        @error('rel_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier</label>
                        <select class="form-select @error('supl_code')is-invalid @enderror" id="supl_code" name="supl_code">
                            <option selected class="text-center" selected disabled>-- Pilih Supplier --</option>
                            @foreach ($suppliers as $i)
                                <option value="{{ $i->supl_code }}" {{ old('supl_code') ? (old('supl_code') == $i->supl_code ? 'selected' : '') : ($data->supl_code == $i->supl_code ? 'selected' : '') }}>{{ $i->supl_name }} / {{ $i->supl_code }}</option>
                            @endforeach
                        </select>
                        @error('supl_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Father Name</label>
                        <input type="text" class="form-control @error('appl_fth_name')is-invalid @enderror" id="appl_fth_name" name="appl_fth_name" placeholder="Applicant Father Name" value="{{ old('appl_fth_name') ? old('appl_fth_name') : $data->appl_fth_name }}">
                        @error('appl_fth_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Mahram</label>
                        <input type="text" class="form-control @error('appl_mahram')is-invalid @enderror" id="appl_mahram" name="appl_mahram" placeholder="Applicant Mahram" value="{{ old('appl_mahram') ? old('appl_mahram') : $data->appl_mahram }}">
                        @error('appl_mahram')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Pass No</label>
                        <input type="text" class="form-control @error('appl_pass_no')is-invalid @enderror" id="appl_pass_no" name="appl_pass_no" placeholder="Applicant Pass No" value="{{ old('appl_pass_no') ? old('appl_pass_no') : $data->appl_pass_no }}">
                        @error('appl_pass_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Pass Name</label>
                        <input type="text" class="form-control @error('appl_pass_name')is-invalid @enderror" id="appl_pass_name" name="appl_pass_name" placeholder="Applicant Pass Name" value="{{ old('appl_pass_name') ? old('appl_pass_name') : $data->appl_pass_name }}">
                        @error('appl_pass_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Pass ISS Date</label>
                        <input type="date" class="form-control @error('appl_pass_iss_date')is-invalid @enderror" id="appl_pass_iss_date" name="appl_pass_iss_date" placeholder="Applicant Pass ISS Date" value="{{ old('appl_pass_iss_date') ? old('appl_pass_iss_date') : $data->appl_pass_iss_date }}">
                        @error('appl_pass_iss_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Pass Expired Date</label>
                        <input type="date" class="form-control @error('appl_pass_exp_date')is-invalid @enderror" id="appl_pass_exp_date" name="appl_pass_exp_date" placeholder="Applicant Pass Expired Date" value="{{ old('appl_pass_exp_date') ? old('appl_pass_exp_date') : $data->appl_pass_exp_date }}">
                        @error('appl_pass_exp_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Pass ISS Palace</label>
                        <input type="text" class="form-control @error('appl_pass_iss_palace')is-invalid @enderror" id="appl_pass_iss_palace" name="appl_pass_iss_palace" placeholder="Applicant Pass ISS Palace" value="{{ old('appl_pass_iss_palace') ? old('appl_pass_iss_palace') : $data->appl_pass_iss_palace }}">
                        @error('appl_pass_iss_palace')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Vaccine Name ID</label>
                        <input type="text" class="form-control @error('appl_vac_name_id')is-invalid @enderror" id="appl_vac_name_id" name="appl_vac_name_id" placeholder="Applicant Vaccine Name ID" value="{{ old('appl_vac_name_id') ? old('appl_vac_name_id') : $data->appl_vac_name_id }}">
                        @error('appl_vac_name_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Vaccine Code 01</label>
                        <select class="form-select @error('vc_code_01')is-invalid @enderror" id="vc_code_01" name="vc_code_01">
                            <option selected class="text-center" selected disabled>-- Pilih Vaccine Code --</option>
                            @foreach ($vaccines as $i)
                                <option value="{{ $i->vc_code }}" {{ old('vc_code_01') ? (old('vc_code_01') == $i->vc_code ? 'selected' : '') : ($data->vc_code_01 == $i->vc_code ? 'selected' : '') }}>{{ $i->vc_name }} / {{ $i->vc_code }}</option>
                            @endforeach
                        </select>
                        @error('vc_code_01')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Vaccine ID Date 01</label>
                        <input type="date" class="form-control @error('appl_vac_id_date_01')is-invalid @enderror" id="appl_vac_id_date_01" name="appl_vac_id_date_01" placeholder="Applicant Vaccine ID Date 01" value="{{ old('appl_vac_id_date_01') ? old('appl_vac_id_date_01') : $data->appl_vac_id_date_01 }}">
                        @error('appl_vac_id_date_01')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Vaccine Code 02</label>
                        <select class="form-select @error('vc_code_02')is-invalid @enderror" id="vc_code_02" name="vc_code_02">
                            <option selected class="text-center" selected disabled>-- Pilih Vaccine Code --</option>
                            @foreach ($vaccines as $i)
                                <option value="{{ $i->vc_code }}" {{ old('vc_code_02') ? (old('vc_code_02') == $i->vc_code ? 'selected' : '') : ($data->vc_code_02 == $i->vc_code ? 'selected' : '') }}>{{ $i->vc_name }} / {{ $i->vc_code }}</option>
                            @endforeach
                        </select>
                        @error('vc_code_02')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Vaccine ID Date 02</label>
                        <input type="date" class="form-control @error('appl_vac_id_date_02')is-invalid @enderror" id="appl_vac_id_date_02" name="appl_vac_id_date_02" placeholder="Applicant Vaccine ID Date 02" value="{{ old('appl_vac_id_date_02') ? old('appl_vac_id_date_02') : $data->appl_vac_id_date_02 }}">
                        @error('appl_vac_id_date_02')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Vaccine Code 03</label>
                        <select class="form-select @error('vc_code_03')is-invalid @enderror" id="vc_code_03" name="vc_code_03">
                            <option selected class="text-center" selected disabled>-- Pilih Vaccine Code --</option>
                            @foreach ($vaccines as $i)
                                <option value="{{ $i->vc_code }}" {{ old('vc_code_03') ? (old('vc_code_03') == $i->vc_code ? 'selected' : '') : ($data->vc_code_03 == $i->vc_code ? 'selected' : '') }}>{{ $i->vc_name }} / {{ $i->vc_code }}</option>
                            @endforeach
                        </select>
                        @error('vc_code_03')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Vaccine ID Date 03</label>
                        <input type="date" class="form-control @error('appl_vac_id_date_03')is-invalid @enderror" id="appl_vac_id_date_03" name="appl_vac_id_date_03" placeholder="Applicant Vaccine ID Date 01" value="{{ old('appl_vac_id_date_03') ? old('appl_vac_id_date_03') : $data->appl_vac_id_date_03 }}">
                        @error('appl_vac_id_date_03')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Vaccine Code 04</label>
                        <select class="form-select @error('vc_code_04')is-invalid @enderror" id="vc_code_04" name="vc_code_04">
                            <option selected class="text-center" selected disabled>-- Pilih Vaccine Code --</option>
                            @foreach ($vaccines as $i)
                                <option value="{{ $i->vc_code }}" {{ old('vc_code_04') ? (old('vc_code_04') == $i->vc_code ? 'selected' : '') : ($data->vc_code_04 == $i->vc_code ? 'selected' : '') }}>{{ $i->vc_name }} / {{ $i->vc_code }}</option>
                            @endforeach
                        </select>
                        @error('vc_code_04')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Vaccine ID Date 04</label>
                        <input type="date" class="form-control @error('appl_vac_id_date_04')is-invalid @enderror" id="appl_vac_id_date_04" name="appl_vac_id_date_04" placeholder="Applicant Vaccine ID Date 01" value="{{ old('appl_vac_id_date_04') ? old('appl_vac_id_date_04') : $data->appl_vac_id_date_04 }}">
                        @error('appl_vac_id_date_04')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Telephone</label>
                        <input type="text" class="form-control @error('appl_tlp')is-invalid @enderror" id="appl_tlp" name="appl_tlp" placeholder="Package Telephone" value="{{ old('appl_tlp') ? old('appl_tlp') : $data->appl_tlp }}">
                        @error('appl_tlp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Email</label>
                        <input type="text" class="form-control @error('appl_email')is-invalid @enderror" id="appl_email" name="appl_email" placeholder="Package Telephone" value="{{ old('appl_email') ? old('appl_email') : $data->appl_email }}">
                        @error('appl_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Image Full</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_img_full" value="Y" name="appl_is_img_full" type="radio" {{ old('appl_is_img_full') ? (old('appl_is_img_full') == "Y" ? 'checked' : '') : ($data->appl_is_img_full == "Y" ? 'checked' : '') }}>
                            <label class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_img_full" value="N" name="appl_is_img_full" type="radio" {{ old('appl_is_img_full') ? (old('appl_is_img_full') == "N" ? 'checked' : '') : ($data->appl_is_img_full == "N" ? 'checked' : '') }}>
                            <label class="custom-control-label">No</label>
                        </div>
                        @error('appl_is_img_full')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Image Full Name</label>
                        <input type="hidden" name="old_appl_is_img_full_name" value="{{ $data->appl_is_img_full_name }}">
                        <img class="img-full-name-preview img-fluid mb-3">
                        <input type="file" class="form-control @error('appl_is_img_full_name')is-invalid @enderror" id="appl_is_img_full_name" name="appl_is_img_full_name" placeholder="Supplier Pic" value="{{ old('appl_is_img_full_name') ? old('appl_is_img_full_name') : $data->appl_is_img_full_name }}">
                        @error('appl_is_img_full_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Image Half</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_img_half" value="Y" name="appl_is_img_half" type="radio" {{ old('appl_is_img_half') ? (old('appl_is_img_half') == "Y" ? 'checked' : '') : ($data->appl_is_img_half == "Y" ? 'checked' : '') }}>
                            <label class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_img_half" value="N" name="appl_is_img_half" type="radio" {{ old('appl_is_img_half') ? (old('appl_is_img_half') == "N" ? 'checked' : '') : ($data->appl_is_img_half == "N" ? 'checked' : '') }}>
                            <label class="custom-control-label">No</label>
                        </div>
                        @error('appl_is_img_half')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Image Half Name</label>
                        <input type="hidden" name="old_appl_is_img_full_name" value="{{ $data->appl_is_img_full_name }}">
                        <img class="img-half-name-preview img-fluid mb-3">
                        <input type="file" class="form-control @error('appl_is_img_half_name')is-invalid @enderror" id="appl_is_img_half_name" name="appl_is_img_half_name" placeholder="Supplier Pic" value="{{ old('appl_is_img_half_name') ? old('appl_is_img_half_name') : $data->appl_is_img_half_name }}">
                        @error('appl_is_img_half_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Is YB</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_yb" value="Y" name="appl_is_yb" type="radio" {{ old('appl_is_yb') ? (old('appl_is_yb') == "Y" ? 'checked' : '') : ($data->appl_is_yb == "Y" ? 'checked' : '') }}>
                            <label class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_yb" value="N" name="appl_is_yb" type="radio" {{ old('appl_is_yb') ? (old('appl_is_yb') == "N" ? 'checked' : '') : ($data->appl_is_yb == "N" ? 'checked' : '') }}>
                            <label class="custom-control-label">No</label>
                        </div>
                        @error('appl_is_yb')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Is YB Name</label>
                        <input type="hidden" name="old_appl_is_yb_name" value="{{ $data->appl_is_yb_name }}">
                        <img class="img-yb-name-preview img-fluid mb-3">
                        <input type="file" class="form-control @error('appl_is_yb_name')is-invalid @enderror" id="appl_is_yb_name" name="appl_is_yb_name" placeholder="Supplier Pic" value="{{ old('appl_is_yb_name') ? old('appl_is_yb_name') : $data->appl_is_yb_name }}">
                        @error('appl_is_yb_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Copy ID</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_id" value="Y" name="appl_is_copy_id" type="radio" {{ old('appl_is_copy_id') ? (old('appl_is_copy_id') == "Y" ? 'checked' : '') : ($data->appl_is_copy_id == "Y" ? 'checked' : '') }}>
                            <label class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_id" value="N" name="appl_is_copy_id" type="radio" {{ old('appl_is_copy_id') ? (old('appl_is_copy_id') == "N" ? 'checked' : '') : ($data->appl_is_copy_id == "N" ? 'checked' : '') }}>
                            <label class="custom-control-label">No</label>
                        </div>
                        @error('appl_is_copy_id')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Is ID Name</label>
                        <input type="hidden" name="old_appl_is_id_name" value="{{ $data->appl_is_id_name }}">
                        <img class="img-id-name-preview img-fluid mb-3">
                        <input type="file" class="form-control @error('appl_is_id_name')is-invalid @enderror" id="appl_is_id_name" name="appl_is_id_name" placeholder="Supplier Pic" value="{{ old('appl_is_id_name') ? old('appl_is_id_name') : $data->appl_is_id_name }}">
                        @error('appl_is_id_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Copy KK</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_kk" value="Y" name="appl_is_copy_kk" type="radio" {{ old('appl_is_copy_kk') ? (old('appl_is_copy_kk') == "Y" ? 'checked' : '') : ($data->appl_is_copy_kk == "Y" ? 'checked' : '') }}>
                            <label class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_kk" value="N" name="appl_is_copy_kk" type="radio" {{ old('appl_is_copy_kk') ? (old('appl_is_copy_kk') == "N" ? 'checked' : '') : ($data->appl_is_copy_kk == "N" ? 'checked' : '') }}>
                            <label class="custom-control-label">No</label>
                        </div>
                        @error('appl_is_copy_kk')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Is KK Name</label>
                        <input type="hidden" name="old_appl_is_kk_name" value="{{ $data->appl_is_kk_name }}">
                        <img class="img-kk-name-preview img-fluid mb-3">
                        <input type="file" class="form-control @error('appl_is_kk_name')is-invalid @enderror" id="appl_is_kk_name" name="appl_is_kk_name" placeholder="Supplier Pic" value="{{ old('appl_is_kk_name') ? old('appl_is_kk_name') : $data->appl_is_kk_name }}">
                        @error('appl_is_kk_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Copy Pass</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_pass" value="Y" name="appl_is_copy_pass" type="radio" {{ old('appl_is_copy_pass') ? (old('appl_is_copy_pass') == "Y" ? 'checked' : '') : ($data->appl_is_copy_pass == "Y" ? 'checked' : '') }}>
                            <label class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_pass" value="N" name="appl_is_copy_pass" type="radio" {{ old('appl_is_copy_pass') ? (old('appl_is_copy_pass') == "N" ? 'checked' : '') : ($data->appl_is_copy_pass == "N" ? 'checked' : '') }}>
                            <label class="custom-control-label">No</label>
                        </div>
                        @error('appl_is_copy_pass')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Pass Name</label>
                        <input type="hidden" name="old_appl_is_img_half_name" value="{{ $data->appl_is_img_half_name }}">
                        <img class="img-pass-name-preview img-fluid mb-3">
                        <input type="file" class="form-control @error('appl_is_pass_name')is-invalid @enderror" id="appl_is_pass_name" name="appl_is_pass_name" placeholder="Supplier Pic" value="{{ old('appl_is_pass_name') ? old('appl_is_pass_name') : $data->appl_is_pass_name }}">
                        @error('appl_is_pass_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Copy Akta N</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_akta_n" value="Y" name="appl_is_copy_akta_n" type="radio" {{ old('appl_is_copy_akta_n') ? (old('appl_is_copy_akta_n') == "Y" ? 'checked' : '') : ($data->appl_is_copy_akta_n == "Y" ? 'checked' : '') }}>
                            <label class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_akta_n" value="N" name="appl_is_copy_akta_n" type="radio" {{ old('appl_is_copy_akta_n') ? (old('appl_is_copy_akta_n') == "N" ? 'checked' : '') : ($data->appl_is_copy_akta_n == "N" ? 'checked' : '') }}>
                            <label class="custom-control-label">No</label>
                        </div>
                        @error('appl_is_copy_akta_n')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Akta N Name</label>
                        <input type="hidden" name="old_appl_is_akta_n_name" value="{{ $data->appl_is_akta_n_name }}">
                        <img class="img-akta-n-name-preview img-fluid mb-3">
                        <input type="file" class="form-control @error('appl_is_akta_n_name')is-invalid @enderror" id="appl_is_akta_n_name" name="appl_is_akta_n_name" placeholder="Supplier Pic" value="{{ old('appl_is_akta_n_name') ? old('appl_is_akta_n_name') : $data->appl_is_akta_n_name }}">
                        @error('appl_is_akta_n_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Copy Akta L</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_akta_l" value="Y" name="appl_is_copy_akta_l" type="radio" {{ old('appl_is_copy_akta_l') ? (old('appl_is_copy_akta_l') == "Y" ? 'checked' : '') : ($data->appl_is_copy_akta_l == "Y" ? 'checked' : '') }}>
                            <label class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="appl_is_copy_akta_l" value="N" name="appl_is_copy_akta_l" type="radio" {{ old('appl_is_copy_akta_l') ? (old('appl_is_copy_akta_l') == "N" ? 'checked' : '') : ($data->appl_is_copy_akta_l == "N" ? 'checked' : '') }}>
                            <label class="custom-control-label">No</label>
                        </div>
                        @error('appl_is_copy_akta_l')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Applicant Is Akta L Name</label>
                        <input type="hidden" name="old_appl_is_akta_l_name" value="{{ $data->appl_is_akta_l_name }}">
                        <img class="img-akta-l-name-preview img-fluid mb-3">
                        <input type="file" class="form-control @error('appl_is_akta_l_name')is-invalid @enderror" id="appl_is_akta_l_name" name="appl_is_akta_l_name" placeholder="Supplier Pic" value="{{ old('appl_is_akta_l_name') ? old('appl_is_akta_l_name') : $data->appl_is_akta_l_name }}">
                        @error('appl_is_akta_l_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            <div class="col-lg-12 col-md-6">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $('#appl_id_no').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#appl_is_img_full_name').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#appl_is_img_half_name').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#appl_is_pass_name').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#appl_is_yb_name').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#appl_is_id_name').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#appl_is_kk_name').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#appl_is_akta_n_name').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#appl_is_akta_l_name').attr("style", "pointer-events: none; background-color: lightgray;");

    $('#prov_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kota_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kec_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kel_code').attr("style", "pointer-events: none; background-color: lightgray;");

    window.onload = function() {
        var zip_code = $('#zip_code').val();

        fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + zip_code)
            .then(response => response.json())
            .then(zip => fetch(`http://127.0.0.1:8000/api/v1/provinsis`)
                        .then(response => response.json())
                        .then(
                            prov => prov.forEach(element => {
                                if (zip.prov_code == element.prov_code) {
                                    $("#prov_code").append("<option value='" + element.prov_code + "' selected>" + element.provinsi +
                                    "</option>");
                                }
                            })
                        )
                    );

        fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + zip_code)
            .then(response => response.json())
            .then(zip => fetch(`http://127.0.0.1:8000/api/v1/kotas?code=` + zip.prov_code)
                        .then(response => response.json())
                        .then(
                            kota => kota.forEach(element => {
                                if (zip.kota_code == element.kota_code) {
                                    $("#kota_code").append("<option value='" + element.kota_code + "' selected>" + element.kota +
                                    "</option>");
                                }
                            })
                        )
                    );

        fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + zip_code)
            .then(response => response.json())
            .then(zip => fetch(`http://127.0.0.1:8000/api/v1/kecamatans?code=` + zip.kota_code)
                        .then(response => response.json())
                        .then(
                            kec => kec.forEach(element => {
                                if (zip.kec_code == element.kec_code) {
                                    $("#kec_code").append("<option value='" + element.kec_code + "' selected>" + element.kecamatan +
                                    "</option>");
                                }
                            })
                        )
                    );

        fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + zip_code)
            .then(response => response.json())
            .then(zip => fetch(`http://127.0.0.1:8000/api/v1/kelurahans?code=` + zip.kec_code)
                        .then(response => response.json())
                        .then(
                            kel => kel.forEach(element => {
                                if (zip.kel_code == element.kel_code) {
                                    $("#kel_code").append("<option value='" + element.kel_code + "' selected>" + element.kelurahan +
                                    "</option>");
                                }
                            })
                        )
                    );

    if ($('#appl_id_type').val()) {
        $('#appl_id_no').attr("style", "");
        var appl_id_no = document.getElementById('appl_id_no');

        appl_id_no.value = formatID(appl_id_no.value);

        function formatID(angka, prefix)
        {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split    = number_string.split(','),
                sisa     = split[0].length % 4,
                rupiah     = split[0].substr(0, sisa),
                ribuan     = split[0].substr(sisa).match(/\d{4}/gi);
                
            if (ribuan) {
                separator = sisa ? '-' : '';
                rupiah += separator + ribuan.join('-');
            }
            
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
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

    if ($('input:radio[name=appl_is_copy_pass]:checked').val() == 'Y') {
        $('#appl_is_pass_name').attr("style", "");
    } else {
        $('#appl_is_pass_name').attr("style", "pointer-events: none; background-color: lightgray;");
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

    $('#zip_code').change(function() {
        var zip_code = $(this).val();

        fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + zip_code)
            .then(response => response.json())
            .then(zip => fetch(`http://127.0.0.1:8000/api/v1/provinsis`)
                        .then(response => response.json())
                        .then(
                            prov => prov.forEach(element => {
                                if (zip.prov_code == element.prov_code) {
                                    $("#prov_code").append("<option value='" + element.prov_code + "' selected>" + element.provinsi +
                                    "</option>");
                                }
                            })
                        )
                    );

        fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + zip_code)
            .then(response => response.json())
            .then(zip => fetch(`http://127.0.0.1:8000/api/v1/kotas?code=` + zip.prov_code)
                        .then(response => response.json())
                        .then(
                            kota => kota.forEach(element => {
                                if (zip.kota_code == element.kota_code) {
                                    $("#kota_code").append("<option value='" + element.kota_code + "' selected>" + element.kota +
                                    "</option>");
                                }
                            })
                        )
                    );

        fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + zip_code)
            .then(response => response.json())
            .then(zip => fetch(`http://127.0.0.1:8000/api/v1/kecamatans?code=` + zip.kota_code)
                        .then(response => response.json())
                        .then(
                            kec => kec.forEach(element => {
                                if (zip.kec_code == element.kec_code) {
                                    $("#kec_code").append("<option value='" + element.kec_code + "' selected>" + element.kecamatan +
                                    "</option>");
                                }
                            })
                        )
                    );

        fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + zip_code)
            .then(response => response.json())
            .then(zip => fetch(`http://127.0.0.1:8000/api/v1/kelurahans?code=` + zip.kec_code)
                        .then(response => response.json())
                        .then(
                            kel => kel.forEach(element => {
                                if (zip.kel_code == element.kel_code) {
                                    $("#kel_code").append("<option value='" + element.kel_code + "' selected>" + element.kelurahan +
                                    "</option>");
                                }
                            })
                        )
                    );
    });

    $('input:radio[name=appl_is_img_full]').change(function () {
        if ($(this).val() == 'Y') {
            $('#appl_is_img_full_name').attr("style", "");
        } else {
            $('#appl_is_img_full_name').attr("style", "pointer-events: none; background-color: lightgray;");
        }
    })

    $('input:radio[name=appl_is_img_half]').change(function () {
        if ($(this).val() == 'Y') {
            $('#appl_is_img_half_name').attr("style", "");
        } else {
            $('#appl_is_img_half_name').attr("style", "pointer-events: none; background-color: lightgray;");
        }
    })

    $('input:radio[name=appl_is_yb]').change(function () {
        if ($(this).val() == 'Y') {
            $('#appl_is_yb_name').attr("style", "");
        } else {
            $('#appl_is_yb_name').attr("style", "pointer-events: none; background-color: lightgray;");
        }
    })

    $('input:radio[name=appl_is_copy_id]').change(function () {
        if ($(this).val() == 'Y') {
            $('#appl_is_id_name').attr("style", "");
        } else {
            $('#appl_is_id_name').attr("style", "pointer-events: none; background-color: lightgray;");
        }
    })

    $('input:radio[name=appl_is_copy_kk]').change(function () {
        if ($(this).val() == 'Y') {
            $('#appl_is_kk_name').attr("style", "");
        } else {
            $('#appl_is_kk_name').attr("style", "pointer-events: none; background-color: lightgray;");
        }
    })

    $('input:radio[name=appl_is_copy_pass]').change(function () {
        if ($(this).val() == 'Y') {
            $('#appl_is_pass_name').attr("style", "");
        } else {
            $('#appl_is_pass_name').attr("style", "pointer-events: none; background-color: lightgray;");
        }
    })

    $('input:radio[name=appl_is_copy_akta_n]').change(function () {
        if ($(this).val() == 'Y') {
            $('#appl_is_akta_n_name').attr("style", "");
        } else {
            $('#appl_is_akta_n_name').attr("style", "pointer-events: none; background-color: lightgray;");
        }
    })

    $('input:radio[name=appl_is_copy_akta_l]').change(function () {
        if ($(this).val() == 'Y') {
            $('#appl_is_akta_l_name').attr("style", "");
        } else {
            $('#appl_is_akta_l_name').attr("style", "pointer-events: none; background-color: lightgray;");
        }
    })

    $('input:radio[name=appl_id_type]').change(function () {
        $('#appl_id_no').attr("style", "");
        var appl_id_no = document.getElementById('appl_id_no');

        appl_id_no.addEventListener('keyup', function(e)
        {
            appl_id_no.value = formatID(this.value);
        });

        function formatID(angka, prefix)
        {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split    = number_string.split(','),
                sisa     = split[0].length % 4,
                rupiah     = split[0].substr(0, sisa),
                ribuan     = split[0].substr(sisa).match(/\d{4}/gi);
                
            if (ribuan) {
                separator = sisa ? '-' : '';
                rupiah += separator + ribuan.join('-');
            }
            
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    })

    $('#appl_is_img_full_name').change(function() {
        const appl_is_img_full_name = document.querySelector('#appl_is_img_full_name');
        const appl_is_img_full_namePreview = document.querySelector('.img-full-name-preview');

        appl_is_img_full_namePreview.style.display = 'block';
        appl_is_img_full_namePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(appl_is_img_full_name.files[0]);

        oFReader.onload = function(oFREvent) {
            appl_is_img_full_namePreview.src = oFREvent.target.result;
        }
    });

    $('#appl_is_img_half_name').change(function() {
        const appl_is_img_half_name = document.querySelector('#appl_is_img_half_name');
        const appl_is_img_half_namePreview = document.querySelector('.img-half-name-preview');

        appl_is_img_half_namePreview.style.display = 'block';
        appl_is_img_half_namePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(appl_is_img_half_name.files[0]);

        oFReader.onload = function(oFREvent) {
            appl_is_img_half_namePreview.src = oFREvent.target.result;
        }
    });

    $('#appl_is_pass_name').change(function() {
        const appl_is_pass_name = document.querySelector('#appl_is_pass_name');
        const appl_is_pass_namePreview = document.querySelector('.img-pass-name-preview');

        appl_is_pass_namePreview.style.display = 'block';
        appl_is_pass_namePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(appl_is_pass_name.files[0]);

        oFReader.onload = function(oFREvent) {
            appl_is_pass_namePreview.src = oFREvent.target.result;
        }
    });

    $('#appl_is_yb_name').change(function() {
        const appl_is_yb_name = document.querySelector('#appl_is_yb_name');
        const appl_is_yb_namePreview = document.querySelector('.img-yb-name-preview');

        appl_is_yb_namePreview.style.display = 'block';
        appl_is_yb_namePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(appl_is_yb_name.files[0]);

        oFReader.onload = function(oFREvent) {
            appl_is_yb_namePreview.src = oFREvent.target.result;
        }
    });

    $('#appl_is_id_name').change(function() {
        const appl_is_id_name = document.querySelector('#appl_is_id_name');
        const appl_is_id_namePreview = document.querySelector('.img-id-name-preview');

        appl_is_id_namePreview.style.display = 'block';
        appl_is_id_namePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(appl_is_id_name.files[0]);

        oFReader.onload = function(oFREvent) {
            appl_is_id_namePreview.src = oFREvent.target.result;
        }
    });

    $('#appl_is_kk_name').change(function() {
        const appl_is_kk_name = document.querySelector('#appl_is_kk_name');
        const appl_is_kk_namePreview = document.querySelector('.img-kk-name-preview');

        appl_is_kk_namePreview.style.display = 'block';
        appl_is_kk_namePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(appl_is_kk_name.files[0]);

        oFReader.onload = function(oFREvent) {
            appl_is_kk_namePreview.src = oFREvent.target.result;
        }
    });

    $('#appl_is_akta_n_name').change(function() {
        const appl_is_akta_n_name = document.querySelector('#appl_is_akta_n_name');
        const appl_is_akta_n_namePreview = document.querySelector('.img-akta-n-name-preview');

        appl_is_akta_n_namePreview.style.display = 'block';
        appl_is_akta_n_namePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(appl_is_akta_n_name.files[0]);

        oFReader.onload = function(oFREvent) {
            appl_is_akta_n_namePreview.src = oFREvent.target.result;
        }
    });

    $('#appl_is_akta_l_name').change(function() {
        const appl_is_akta_l_name = document.querySelector('#appl_is_akta_l_name');
        const appl_is_akta_l_namePreview = document.querySelector('.img-akta-l-name-preview');

        appl_is_akta_l_namePreview.style.display = 'block';
        appl_is_akta_l_namePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(appl_is_akta_l_name.files[0]);

        oFReader.onload = function(oFREvent) {
            appl_is_akta_l_namePreview.src = oFREvent.target.result;
        }
    });
</script>
@endsection