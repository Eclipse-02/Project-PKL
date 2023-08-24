@extends('dashboard.master')

@section('title', 'Update Supplier')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('suppliers.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('suppliers.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Coy ID</label>
                        <select class="form-select @error('coy_id')is-invalid @enderror" id="coy_id" name="coy_id">
                            <option class="text-center" disabled>-- Pilih Coy ID --</option>
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
                        <label class="form-label">Supplier Code</label>
                        <input type="text" class="form-control @error('supl_code')is-invalid @enderror" id="supl_code" name="supl_code" placeholder="Supplier Code" value="{{ old('supl_code') ? old('supl_code') : $data->supl_code }}">
                        @error('supl_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Code</label>
                        <select class="form-select @error('branch_code')is-invalid @enderror" id="branch_code" name="branch_code">
                            <option class="text-center" disabled>-- Pilih Branch Code --</option>
                            @foreach ($branchs as $k)
                                <option value="{{ $k->branch_code }}" {{ old('branch_code') ? (old('branch_code') == $k->branch_code ? 'selected' : '') : ($data->branch_code == $k->branch_code ? 'selected' : '') }}>{{ $k->branch_code }}</option>
                            @endforeach
                        </select>
                        @error('branch_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="Y" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == "Y" ? 'checked' : '') : ($data->is_active == "Y" ? 'checked' : '') }}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="N" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == "N" ? 'checked' : '') : ($data->is_active == "N" ? 'checked' : '') }}>
                        <label class="custom-control-label" for="No">No</label>
                    </div>
                    @error('is_active')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <label class="form-label">Supplier Status</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="supl_status" value="NW" name="supl_status" type="radio" {{ old('supl_status') ? (old('supl_status') == "NW" ? 'checked' : '') : ($data->supl_status == "NW" ? 'checked' : '') }}>
                        <label class="custom-control-label">Baru Disimpan</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="supl_status" value="NA" name="supl_status" type="radio" {{ old('supl_status') ? (old('supl_status') == "NA" ? 'checked' : '') : ($data->supl_status == "NA" ? 'checked' : '') }}>
                        <label class="custom-control-label">Need Approval</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="supl_status" value="AP" name="supl_status" type="radio" {{ old('supl_status') ? (old('supl_status') == "AP" ? 'checked' : '') : ($data->supl_status == "AP" ? 'checked' : '') }}>
                        <label class="custom-control-label">Approved</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="supl_status" value="CL" name="supl_status" type="radio" {{ old('supl_status') ? (old('supl_status') == "CL" ? 'checked' : '') : ($data->supl_status == "CL" ? 'checked' : '') }}>
                        <label class="custom-control-label">Close</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input class="custom-control-input" id="supl_status" value="RJ" name="supl_status" type="radio" {{ old('supl_status') ? (old('supl_status') == "RJ" ? 'checked' : '') : ($data->supl_status == "RJ" ? 'checked' : '') }}>
                        <label class="custom-control-label">Reject</label>
                    </div>
                    @error('supl_status')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Name</label>
                        <input type="text" class="form-control @error('supl_name')is-invalid @enderror" id="supl_name" name="supl_name" placeholder="Supplier Name" value="{{ old('supl_name') ? old('supl_name') : $data->supl_name }}">
                        @error('supl_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Type</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="supl_type" value="1" name="supl_type" type="radio" {{ old('supl_type') ? (old('supl_type') == 1 ? 'checked' : '') : ($data->supl_type == 1 ? 'checked' : '') }}>
                            <label class="custom-control-label">Company</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input" id="supl_type" value="0" name="supl_type" type="radio" {{ old('supl_type') ? (old('supl_type') == 0 ? 'checked' : '') : ($data->supl_type == 0 ? 'checked' : '') }}>
                            <label class="custom-control-label">Individual</label>
                        </div>
                        @error('supl_type')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Sub Type</label>
                        <select class="form-select @error('supl_sub_type')is-invalid @enderror" id="supl_sub_type" name="supl_sub_type">
                            <option class="text-center" disabled>-- Pilih Supplier Sub Type --</option>
                            @foreach ($supplierSubTypes as $k)
                                <option value="{{ $k->sub_code }}" {{ old('supl_sub_type') ? (old('supl_sub_type') == $k->sub_code ? 'selected' : '') : ($data->supl_sub_type == $k->sub_code ? 'selected' : '') }}>{{ $k->sub_name }}</option>
                            @endforeach
                        </select>
                        @error('supl_sub_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Pic</label>
                        <input type="hidden" name="old_supl_pic_name" value="{{ $data->supl_pic_name }}">
                        <img src="{{ asset('storage/supl-img/' . $data->supl_pic_name) }}" class="supplier-preview img-fluid d-block mb-3" style="height: 200px">
                        <input type="file" class="form-control @error('supl_pic_name')is-invalid @enderror" id="supl_pic_name" name="supl_pic_name" placeholder="Supplier Pic" value="{{ old('supl_pic_name') ? old('supl_pic_name') : $data->supl_pic_name }}">
                        @error('supl_pic_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Position Code</label>
                        <select class="form-select @error('poss_code')is-invalid @enderror" id="poss_code" name="poss_code">
                            <option class="text-center" disabled>-- Pilih Position Code --</option>
                            @foreach ($poss as $k)
                                <option value="{{ $k->poss_code }}" {{ old('poss_code') ? (old('poss_code') == $k->poss_code ? 'selected' : '') : ($data->poss_code == $k->poss_code ? 'selected' : '') }}>{{ $k->poss_name }}</option>
                            @endforeach
                        </select>
                        @error('poss_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier ID No</label>
                        <input type="text" class="form-control @error('supl_id_no')is-invalid @enderror" id="supl_id_no" name="supl_id_no" placeholder="Supplier ID No" value="{{ old('supl_id_no') ? old('supl_id_no') : $data->supl_id_no }}">
                        @error('supl_id_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Address</label>
                        <textarea class="form-control @error('supl_addr')is-invalid @enderror" rows="3" id="supl_addr" name="supl_addr" placeholder="Supplier Address">{{ old('supl_addr') ? old('supl_addr') : $data->supl_addr }}</textarea>
                        @error('supl_addr')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Telephone Area</label>
                        <input type="text" class="form-control @error('supl_tlp_area')is-invalid @enderror" id="supl_tlp_area" name="supl_tlp_area" placeholder="Supplier Telephone Area" value="{{ old('supl_tlp_area') ? old('supl_tlp_area') : $data->supl_tlp_area }}">
                        @error('supl_tlp_area')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Telephone</label>
                        <input type="text" class="form-control @error('supl_tlp')is-invalid @enderror" id="supl_tlp" name="supl_tlp" placeholder="Supplier Telephone" value="{{ old('supl_tlp') ? old('supl_tlp') : $data->supl_tlp }}">
                        @error('supl_tlp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Handphone 1</label>
                        <input type="text" class="form-control @error('supl_hp01')is-invalid @enderror" id="supl_hp01" name="supl_hp01" placeholder="Supplier Hanphone 1" value="{{ old('supl_hp01') ? old('supl_hp01') : $data->supl_hp01 }}">
                        @error('supl_hp01')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Handphone 2</label>
                        <input type="text" class="form-control @error('supl_hp02')is-invalid @enderror" id="supl_hp02" name="supl_hp02" placeholder="Supplier Hanphone 2" value="{{ old('supl_hp02') ? old('supl_hp02') : $data->supl_hp02 }}">
                        @error('supl_hp02')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip Code</label>
                        <select class="form-select @error('zip_code')is-invalid @enderror" id="zip_code" name="zip_code">
                            <option class="text-center" disabled>-- Pilih Zip --</option>
                            @foreach ($zips as $k)
                                <option value="{{ $k->zip_code }}" {{ old('zip_code') ? (old('zip_code') == $k->zip_code ? 'selected' : '') : ($data->zip_code == $k->zip_code ? 'selected' : '') }}>{{ $k->zip_code }} - {{ $k->zip_desc }}</option>
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
                        <label class="form-label">Provinsi Code</label>
                        <select class="form-select @error('prov_code')is-invalid @enderror" id="prov_code" name="prov_code">
                            <option class="text-center" disabled>-- Pilih Provinsi --</option>
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
                        <label class="form-label">Kota Code</label>
                        <select class="form-select @error('kota_code')is-invalid @enderror" id="kota_code" name="kota_code">
                            <option class="text-center" disabled>-- Pilih Kota --</option>
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
                        <label class="form-label">Kecamatan Code</label>
                        <select class="form-select @error('kec_code')is-invalid @enderror" id="kec_code" name="kec_code">
                            <option class="text-center" disabled>-- Pilih Kecamatan --</option>
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
                        <label class="form-label" class="text-center">Kelurahan Code</label>
                        <select class="form-select @error('kel_code')is-invalid @enderror" id="kel_code" name="kel_code">
                            <option class="text-center" disabled>-- Pilih Kelurahan --</option>
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
                        <label class="form-label">Supplier NPWP No</label>
                        <input type="text" class="form-control @error('supl_npwp_no')is-invalid @enderror" id="supl_npwp_no" name="supl_npwp_no" placeholder="Supplier NPWP No" value="{{ old('supl_npwp_no') ? old('supl_npwp_no') : $data->supl_npwp_no }}">
                        @error('supl_npwp_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier NPWP Name</label>
                        <input type="text" class="form-control @error('supl_npwp_name')is-invalid @enderror" id="supl_npwp_name" name="supl_npwp_name" placeholder="Supplier NPWP Name" value="{{ old('supl_npwp_name') ? old('supl_npwp_name') : $data->supl_npwp_name }}">
                        @error('supl_npwp_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier NPWP Address</label>
                        <textarea class="form-control @error('supl_npwp_addr')is-invalid @enderror" rows="3" id="supl_npwp_addr" name="supl_npwp_addr" placeholder="Supplier NPWP Address">{{ old('supl_npwp_addr') ? old('supl_npwp_addr') : $data->supl_npwp_addr }}</textarea>
                        @error('supl_npwp_addr')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Desc</label>
                        <textarea class="form-control @error('supl_desc')is-invalid @enderror" rows="3" id="supl_desc" name="supl_desc" placeholder="Supplier Desc">{{ old('supl_desc') ? old('supl_desc') : $data->supl_desc }}</textarea>
                        @error('supl_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">File Name MOU</label>
                        <input type="hidden" name="old_file_name_mou" value="{{ $data->file_name_mou }}">
                        <img src="{{ asset('storage/mous/' . $data->file_name_mou) }}" class="mou-preview img-fluid d-block mb-3" style="height: 200px">
                        <input type="file" class="form-control @error('file_name_mou')is-invalid @enderror" id="file_name_mou" name="file_name_mou" placeholder="File Name MOU" value="{{ old('file_name_mou') ? old('file_name_mou') : $data->file_name_mou }}">
                        @error('file_name_mou')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">File Name KTP</label>
                        <input type="hidden" name="old_file_name_ktp" value="{{ $data->file_name_ktp }}">
                        <img src="{{ asset('storage/ktps/' . $data->file_name_ktp) }}" class="ktp-preview img-fluid d-block mb-3" style="height: 200px">
                        <input type="file" class="form-control @error('file_name_ktp')is-invalid @enderror" id="file_name_ktp" name="file_name_ktp" placeholder="File Name KTP" value="{{ old('file_name_ktp') ? old('file_name_ktp') : $data->file_name_ktp }}">
                        @error('file_name_ktp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">File Name NPWP</label>
                        <input type="hidden" name="old_file_name_npwp" value="{{ $data->file_name_npwp }}">
                        <img src="{{ asset('storage/npwps/' . $data->file_name_npwp) }}" class="npwp-preview img-fluid d-block mb-3" style="height: 200px">
                        <input type="file" class="form-control @error('file_name_npwp')is-invalid @enderror" id="file_name_npwp" name="file_name_npwp" placeholder="File Name NPWP" value="{{ old('file_name_npwp') ? old('file_name_npwp') : $data->file_name_npwp }}">
                        @error('file_name_npwp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $('#prov_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kota_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kec_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kel_code').attr("style", "pointer-events: none; background-color: lightgray;");

        var zip_code = $('#zip_code').find(':selected').val();
        console.log(zip_code);

        fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + zip_code)
            .then(response => response.json())
            .then(zip => fetch(`http://127.0.0.1:8000/api/v1/provinsis`)
                        .then(response => response.json())
                        .then(
                            prov => prov.forEach(element => {
                                console.log(zip.prov_code);
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

    $('#supl_pic_name').change(function() {
        const supl_pic_name = document.querySelector('#supl_pic_name');
        const supl_pic_namePreview = document.querySelector('.supplier-preview');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(supl_pic_name.files[0]);

        oFReader.onload = function(oFREvent) {
            supl_pic_namePreview.src = oFREvent.target.result;
        }
    });

    $('#file_name_mou').change(function() {
        const file_name_mou = document.querySelector('#file_name_mou');
        const file_name_mouPreview = document.querySelector('.mou-preview');

        console.log(file_name_mou.files[0]);
        const oFReader = new FileReader();
        oFReader.readAsDataURL(file_name_mou.files[0]);

        oFReader.onload = function(oFREvent) {
            file_name_mouPreview.src = oFREvent.target.result;
        }
    });

    $('#file_name_ktp').change(function() {
        const file_name_ktp = document.querySelector('#file_name_ktp');
        const file_name_ktpPreview = document.querySelector('.ktp-preview');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(file_name_ktp.files[0]);

        oFReader.onload = function(oFREvent) {
            file_name_ktpPreview.src = oFREvent.target.result;
        }
    });

    $('#file_name_npwp').change(function() {
        const file_name_npwp = document.querySelector('#file_name_npwp');
        const file_name_npwpPreview = document.querySelector('.npwp-preview');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(file_name_npwp.files[0]);

        oFReader.onload = function(oFREvent) {
            file_name_npwpPreview.src = oFREvent.target.result;
        }
    });
</script>
@endsection