{{-- 1st method --}}

@extends('dashboard.master')

@section('title', 'Create Branch')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('branchs.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('branchs.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Coy ID</label>
                        <select class="form-select" id="coy_id" name="coy_id">
                            <option selected class="text-center">-- Pilih Coy ID --</option>
                            @foreach ($coys as $k)
                                <option value="{{ $k->coy_id }}">{{ $k->coy_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Code</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_code" name="branch_code" placeholder="Branch Code">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Name</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_name" name="branch_name" placeholder="Branch Name">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Address</label>
                        <textarea class="form-control form-control-alternative" rows="3" id="branch_addr" name="branch_addr" placeholder="Branch Address"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Telephone Area</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_tlp_area" name="branch_tlp_area" placeholder="Branch Telephone Area">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Telephone</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_tlp" name="branch_tlp" placeholder="Branch Telephone">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Handphone 1</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_hp01" name="branch_hp01" placeholder="Branch Hanphone 1">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Handphone 2</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_hp02" name="branch_hp02" placeholder="Branch Hanphone 2">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip Code</label>
                        <select class="form-select" id="zip_code" name="zip_code">
                            <option selected class="text-center">-- Pilih Zip --</option>
                            @foreach ($zips as $k)
                                <option value="{{ $k->zip_code }}">{{ $k->sub_zip_code }} - {{ $k->zip_desc }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Provinsi Code</label>
                        <select class="form-select" id="prov_code" name="prov_code">
                            <option selected class="text-center">-- Pilih Provinsi --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota Code</label>
                        <select class="form-select" id="kota_code" name="kota_code">
                            <option selected class="text-center">-- Pilih Kota --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan Code</label>
                        <select class="form-select" id="kec_code" name="kec_code">
                            <option selected class="text-center">-- Pilih Kecamatan --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label" class="text-center">Kelurahan Code</label>
                        <select class="form-select" id="kel_code" name="kel_code">
                            <option selected class="text-center">-- Pilih Kelurahan --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Type</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="branch_type" value="HO" name="branch_type" type="radio">
                            <label class="custom-control-label" for="Head Office">Head Office</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input" id="branch_type" value="B" name="branch_type" type="radio">
                            <label class="custom-control-label" for="Branch">Branch</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Area Code</label>
                        <select class="form-select" id="area_code" name="area_code">
                            <option selected>-- Pilih Area --</option>
                            @foreach ($areas as $k)
                                <option value="{{ $k->area_code }}" class="text-center">{{ $k->area_name }}</option>
                            @endforeach
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
    $('#prov_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kota_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kec_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kel_code').attr("style", "pointer-events: none; background-color: lightgray;");
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
</script>
@endsection

{{-- 2nd method --}}

{{-- @extends('dashboard.master')

@section('title', 'Create Branch')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('branchs.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('branchs.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Code</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_code" name="branch_code" placeholder="Branch Code">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Name</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_name" name="branch_name" placeholder="Branch Name">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Address</label>
                        <textarea class="form-control form-control-alternative" rows="3" id="branch_addr" name="branch_addr" placeholder="Branch Address"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Telephone Area</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_tlp_area" name="branch_tlp_area" placeholder="Branch Telephone Area">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Telephone</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_tlp" name="branch_tlp" placeholder="Branch Telephone">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Handphone 1</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_hp01" name="branch_hp01" placeholder="Branch Hanphone 1">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Handphone 2</label>
                        <input type="text" class="form-control form-control-alternative" id="branch_hp02" name="branch_hp02" placeholder="Branch Hanphone 2">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip Code</label>
                        <select class="form-select" id="kel_code" name="kel_code">
                            <option selected class="text-center">-- Pilih Zip --</option>
                            @foreach ($zips as $k)
                                <option value="{{ $k->sub_zip_code }}">{{ $k->zip_desc }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Provinsi Code</label>
                        <select class="form-select" id="prov_code" name="prov_code">
                            <option selected class="text-center">-- Pilih Provinsi --</option>
                            @foreach ($provinsis as $p)
                                <option value="{{ $p->prov_code }}">{{ $p->provinsi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota Code</label>
                        <select class="form-select" id="kota_code" name="kota_code">
                            <option selected class="text-center">-- Pilih Kota --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan Code</label>
                        <select class="form-select" id="kec_code" name="kec_code">
                            <option selected class="text-center">-- Pilih Kecamatan --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label" class="text-center">Kelurahan Code</label>
                        <select class="form-select" id="kel_code" name="kel_code">
                            <option selected class="text-center">-- Pilih Kelurahan --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Type</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="branch_type" value="HO" name="branch_type" type="radio">
                            <label class="custom-control-label" for="Head Office">Head Office</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input" id="branch_type" value="B" name="branch_type" type="radio">
                            <label class="custom-control-label" for="Branch">Branch</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Area Code</label>
                        <select class="form-select" id="area_code" name="area_code">
                            <option selected>-- Pilih Area --</option>
                            @foreach ($areas as $k)
                                <option value="{{ $k->area_code }}" class="text-center">{{ $k->area_name }}</option>
                            @endforeach
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
@endsection --}}