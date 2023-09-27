@extends('dashboard.master')

@section('title', 'Update Zip')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('zips.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('zips.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip Code</label>
                        <input type="text" class="form-control @error('zip_code')is-invalid @enderror" id="zip_code" name="zip_code" placeholder="zip Code" value="{{ old('zip_code') ? old('zip_code') : $data->zip_code }}">
                        @error('zip_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Sub Zip Code</label>
                        <input type="text" maxlength="5" class="form-control @error('sub_zip_code')is-invalid @enderror" id="sub_zip_code" name="sub_zip_code" placeholder="Max 5 Numbers" value="{{ old('sub_zip_code') ? old('sub_zip_code') : $data->sub_zip_code }}">
                        @error('sub_zip_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip Desc</label>
                        <textarea class="form-control @error('zip_desc')is-invalid @enderror" rows="3" placeholder="Write some descriptions here..." name="zip_desc" id="zip_desc">{{ old('zip_desc') ? old('zip_desc') : $data->zip_desc }}</textarea>
                        @error('zip_desc')
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
                            <option class='text-center' selected disabled>-- Pilih Provinsi --</option>
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
                            <option class='text-center' selected disabled>-- Pilih Kota --</option>
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
                            <option class='text-center' selected disabled>-- Pilih Kecamatan --</option>
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
                            <option class='text-center' selected disabled>-- Pilih Kelurahan --</option>
                        </select>
                        @error('kel_code')
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
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
    fetch(`http://127.0.0.1:8000/api/v1/provinsis`)
        .then(response => response.json())
        .then(
            districts => districts.forEach(element => {
                if (element.prov_code == {{ $data->prov_code }}) {
                    $("#prov_code").append("<option value='" + element.prov_code + "' selected>" + element.provinsi +
                    "</option>");
                } else {
                    $("#prov_code").append("<option value='" + element.prov_code + "'>" + element.provinsi +
                    "</option>");
                }
            })
        );

    fetch(`http://127.0.0.1:8000/api/v1/kotas?code=` + {{ $data->prov_code }})
        .then(response => response.json())
        .then(
            districts => districts.forEach(element => {
                if (element.kota_code == {{ $data->kota_code }}) {
                    $("#kota_code").append("<option value='" + element.kota_code + "' selected>" + element.kota +
                    "</option>");
                } else {
                    $("#kota_code").append("<option value='" + element.kota_code + "'>" + element.kota +
                    "</option>");
                }
            })
        );

    fetch(`http://127.0.0.1:8000/api/v1/kecamatans?code=` + {{ $data->kota_code }})
        .then(response => response.json())
        .then(
            districts => districts.forEach(element => {
                if (element.kec_code == {{ $data->kec_code }}) {
                    $("#kec_code").append("<option value='" + element.kec_code + "' selected>" + element.kecamatan +
                    "</option>");
                } else {
                    $("#kec_code").append("<option value='" + element.kec_code + "'>" + element.kecamatan +
                    "</option>");
                }
            })
        );

    fetch(`http://127.0.0.1:8000/api/v1/kelurahans?code=` + {{ $data->kel_code }})
        .then(response => response.json())
        .then(
            districts => districts.forEach(element => {
                if (element.kel_code == {{ $data->kel_code }}) {
                    $("#kel_code").append("<option value='" + element.kel_code + "' selected>" + element.kelurahan +
                    "</option>");
                } else {
                    $("#kel_code").append("<option value='" + element.kel_code + "'>" + element.kelurahan +
                    "</option>");
                }
            })
        );
})
    $('#prov_code').change(function() {
        var prov_code = $(this).val();

        $('#kota_code').empty();
        $('#kec_code').empty();
        $('#kel_code').empty();
        $('#kota_code').prop('disabled', false);
        $('#kec_code').prop('disabled', true);
        $('#kel_code').prop('disabled', true);

        $("#kota_code").append("<option class='text-center' selected disabled>-- Pilih Kecamatan --</option>");
        $("#kec_code").append("<option class='text-center' selected disabled>-- Pilih Kota Terlebih Dahulu --</option>");
        $("#kel_code").append(
            "<option class='text-center' selected disabled>-- Pilih Kecamatan Terlebih Dahulu --</option>"
        );

        fetch(`http://127.0.0.1:8000/api/v1/kotas?code=` + prov_code)
            .then(response => response.json())
            .then(
                districts => districts.forEach(element => {
                    $("#kota_code").append("<option value='" + element.kota_code + "'>" + element.kota +
                        "</option>");
                })
            );
    });

    $('#kota_code').change(function() {
        var kota_code = $(this).val();

        $('#kec_code').empty();
        $('#kel_code').empty();
        $('#kec_code').prop('disabled', false);
        $('#kel_code').prop('disabled', true);

        $("#kec_code").append("<option class='text-center' selected disabled>-- Pilih Kecamatan --</option>");
        $("#kel_code").append(
            "<option class='text-center' selected disabled>-- Pilih Kecamatan Terlebih Dahulu --</option>"
        );

        fetch(`http://127.0.0.1:8000/api/v1/kecamatans?code=` + kota_code)
            .then(response => response.json())
            .then(
                districts => districts.forEach(element => {
                    $("#kec_code").append("<option value='" + element.kec_code + "'>" + element.kecamatan +
                        "</option>");
                })
            );
    });

    $('#kec_code').change(function() {
        var kecamatan_code = $(this).val();

        $('#kel_code').empty();
        $('#kel_code').prop('disabled', false);

        $("#kel_code").append(
            "<option class='text-center' selected disabled>-- Pilih Kelurahan --</option>"
        );

        fetch(`http://127.0.0.1:8000/api/v1/kelurahans?code=` + kecamatan_code)
            .then(response => response.json())
            .then(
                districts => districts.forEach(element => {
                    $("#kel_code").append("<option value='" + element.kel_code + "'>" + element.kelurahan +
                        "</option>");
                })
            );
    });
</script>
@endsection