@extends('dashboard.master')

@section('title', 'Create Zip')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('zips.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('zips.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip Code</label>
                        <input type="text" maxlength="5" class="form-control form-control-alternative" id="sub_zip_code" name="sub_zip_code" placeholder="Max 5 Numbers">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip Desc</label>
                        <textarea class="form-control form-control-alternative" rows="3" placeholder="Write some descriptions here..." name="zip_desc" id="zip_desc"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Provinsi</label>
                        <select class="form-select" id="prov_code" name="prov_code">
                            <option selected class="text-center">-- Pilih Provinsi --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota</label>
                        <select class="form-select" id="kota_code" name="kota_code" disabled>
                            <option selected class="text-center">-- Pilih Provinsi Terlebih Dahulu --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan</label>
                        <select class="form-select" id="kec_code" name="kec_code" disabled>
                            <option selected class="text-center">-- Pilih Kota Terlebih Dahulu --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kelurahan</label>
                        <select class="form-select" id="kel_code" name="kel_code" disabled>
                            <option selected class="text-center">-- Pilih Kecamatan Terlebih Dahulu --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="1" name="is_active" type="radio">
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input class="custom-control-input" id="is_active" value="0" name="is_active" type="radio">
                        <label class="custom-control-label" for="No">No</label>
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

    fetch(`http://127.0.0.1:8000/api/v1/provinsis`)
        .then(response => response.json())
        .then(
            districts => districts.forEach(element => {
                $("#prov_code").append("<option value='" + element.prov_code + "'>" + element.provinsi +
                    "</option>");
            })
        );

    $('#prov_code').change(function() {
        var prov_code = $(this).val();

        $('#kota_code').empty();
        $('#kec_code').empty();
        $('#kel_code').empty();
        $('#kota_code').prop('disabled', false);
        $('#kec_code').prop('disabled', true);
        $('#kel_code').prop('disabled', true);

        $("#kota_code").append("<option selected class='text-center'>-- Pilih Kecamatan --</option>");
        $("#kec_code").append("<option selected class='text-center'>-- Pilih Kota Terlebih Dahulu --</option>");
        $("#kel_code").append(
            "<option selected class='text-center'>-- Pilih Kecamatan Terlebih Dahulu --</option>"
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

        $("#kec_code").append("<option selected class='text-center'>-- Pilih Kecamatan --</option>");
        $("#kel_code").append(
            "<option selected class='text-center'>-- Pilih Kecamatan Terlebih Dahulu --</option>"
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
            "<option selected class='text-center'>-- Pilih Kelurahan --</option>"
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