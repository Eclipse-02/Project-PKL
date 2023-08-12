@extends('dashboard.master')

@section('title', 'Update Employee')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('employees.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('employees.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee ID</label>
                        <input type="text" class="form-control form-control-alternative" id="empl_id" name="empl_id" placeholder="Employee ID" value="{{ $data->empl_id }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee Branch</label>
                        <select class="form-select" id="empl_branch" name="empl_branch">
                            <option selected>-- Pilih Branch --</option>
                            @foreach ($branches as $i)
                                <option value="{{ $i->branch_code }}" {{ $data->empl_branch == $i->branch_code ? 'selected' : '' }}>{{ $i->branch_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee NIK</label>
                        <input type="text" class="form-control form-control-alternative" id="empl_nik" name="empl_nik" placeholder="Employee NIK" value="{{ $data->empl_nik }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee Name</label>
                        <input type="text" class="form-control form-control-alternative" id="empl_name" name="empl_name" placeholder="Employee Name" value="{{ $data->empl_name }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Position</label>
                        <select class="form-select" id="position_code" name="position_code">
                            <option selected>-- Pilih Position --</option>
                            @foreach ($positions as $i)
                                <option value="{{ $i->poss_code }}" {{ $data->position_code == $i->poss_code ? "selected" : '' }}>{{ $i->poss_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee Up Level</label>
                        <input type="text" class="form-control form-control-alternative" id="empl_up_level" name="empl_up_level" placeholder="Employee Up Level"  value="{{ $data->empl_up_level }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="empl_status" value="PB" name="empl_status" type="radio" {{ $data->empl_status == "PB" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="empl_status">Probation</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="empl_status" value="PM" name="empl_status" type="radio" {{ $data->empl_status == "PM" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="empl_status">Permanen</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="empl_status" value="KT" name="empl_status" type="radio" {{ $data->empl_status == "KT" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="empl_status">Kontrak</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="empl_status" value="RS" name="empl_status" type="radio" {{ $data->empl_status == "RS" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="empl_status">Resign</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input class="custom-control-input" id="empl_status" value="PK" name="empl_status" type="radio" {{ $data->empl_status == "PK" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="empl_status">PHK</label>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Effect Date</label>
                        <input type="date" class="form-control form-control-alternative" id="empl_eff_date" name="empl_eff_date" placeholder="Effect Date" value="{{ $data->empl_eff_date }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control form-control-alternative" id="empl_email" name="empl_email" placeholder="Email" value="{{ $data->empl_email }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea class="form-control form-control-alternative" rows="3" placeholder="Employee address..." id="empl_addr" name="empl_addr">{{ $data->empl_addr }}</textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Telephone Area</label>
                        <input type="text" class="form-control form-control-alternative" id="empl_tlp_area" name="empl_tlp_area" placeholder="Telephone Area" value="{{ $data->empl_tlp_area }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Telephone</label>
                        <input type="text" class="form-control form-control-alternative" id="empl_tlp" name="empl_tlp" placeholder="Telephone" value="{{ $data->empl_tlp }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Hanphone 1</label>
                        <input type="text" class="form-control form-control-alternative" id="empl_hp01" name="empl_hp01" placeholder="Hanphone 1" value="{{ $data->empl_hp01 }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Handphone 2</label>
                        <input type="text" class="form-control form-control-alternative" id="empl_hp02" name="empl_hp02" placeholder="Handphone 2" value="{{ $data->empl_hp02 }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip</label>
                        <select class="form-select" id="zip_code" name="zip_code">
                            <option selected>-- Pilih Zip --</option>
                            @foreach ($zips as $i)
                                <option value="{{ $i->sub_zip_code }}" {{ $data->zip_code == $i->sub_zip_code ? "selected" : '' }}>{{ $i->zip_desc }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Provinsi</label>
                        <select class="form-select" id="prov_code" name="prov_code">
                            <option selected>-- Pilih Provinsi --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota</label>
                        <select class="form-select" id="kota_code" name="kota_code">
                            <option selected>-- Pilih Kota --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan</label>
                        <select class="form-select" id="kec_code" name="kec_code">
                            <option selected>-- Pilih Kecamatan --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kelurahan</label>
                        <select class="form-select" id="kel_code" name="kel_code">
                            <option selected>-- Pilih Kelurahan --</option>
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
    $('#prov_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kota_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kec_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kel_code').attr("style", "pointer-events: none; background-color: lightgray;");

    // $('#zip_code').change(function() {
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
    // });
</script>
@endsection