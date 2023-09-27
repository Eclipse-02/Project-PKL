@extends('dashboard.master')

@section('title', 'Create User Role')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('userroles.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('userroles.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">User Name</label>
                        <select class="form-select" id="user" name="user">
                            <option selected class="text-center">-- Pilih User --</option>
                            @foreach ($data as $i)
                                <option class="text-center" value="{{ $i->user_id }}">{{ $i->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">User Role</label>
                        <select class="form-select" id="role" name="role">
                            <option selected class="text-center">-- Pilih Role --</option>
                            @foreach ($roles as $i)
                                <option class="text-center" value="{{ $i->id }}">{{ $i->display_name }}</option>
                            @endforeach
                        </select>
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