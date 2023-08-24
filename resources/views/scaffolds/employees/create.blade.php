@extends('dashboard.master')

@section('title', 'Create Employee')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('employees.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('employees.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Coy ID</label>
                        <select class="form-select @error('coy_id')is-invalid @enderror" id="coy_id" name="coy_id">
                            <option class="text-center" selected disabled>-- Pilih Coy ID --</option>
                            @foreach ($coys as $k)
                                <option value="{{ $k->coy_id }}" {{ old('coy_id') == $k->coy_id ? 'selected' : '' }}>{{ $k->coy_name }}</option>
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
                        <label class="form-label">Employee ID</label>
                        <input type="text" class="form-control @error('empl_id')is-invalid @enderror" id="empl_id" name="empl_id" placeholder="Employee ID" value="{{ old('empl_id') }}">
                        @error('empl_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee Branch</label>
                        <select class="form-select @error('empl_branch')is-invalid @enderror" id="empl_branch" name="empl_branch">
                            <option class="text-center" selected disabled>-- Pilih Branch --</option>
                            @foreach ($branches as $i)
                                <option value="{{ $i->branch_code }}" {{ old('empl_branch') == $i->branch_code ? 'selected' : '' }}>{{ $i->branch_name }}</option>
                            @endforeach
                        </select>
                        @error('empl_branch')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee NIK</label>
                        <input type="text" class="form-control @error('empl_nik')is-invalid @enderror" id="empl_nik" name="empl_nik" placeholder="Employee NIK" value="{{ old('empl_nik') }}">
                        @error('empl_nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee Name</label>
                        <input type="text" class="form-control @error('empl_name')is-invalid @enderror" id="empl_name" name="empl_name" placeholder="Employee Name" value="{{ old('empl_name') }}">
                        @error('empl_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Position</label>
                        <select class="form-select @error('position_code')is-invalid @enderror" id="position_code" name="position_code">
                            <option selected>-- Pilih Position --</option>
                            @foreach ($positions as $i)
                                <option value="{{ $i->poss_code }}" {{ old('position_code') == $i->poss_code ? 'selected' : '' }}>{{ $i->poss_name }}</option>
                            @endforeach
                        </select>
                        @error('position_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee Up Level</label>
                        <input type="text" class="form-control @error('empl_up_level')is-invalid @enderror" id="empl_up_level" name="empl_up_level" placeholder="Employee Up Level" value="{{ old('empl_up_level') }}">
                        @error('empl_up_level')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="empl_status" value="PB" name="empl_status" type="radio" {{ old('empl_status') == "PB" ? 'checked' : '' }}>
                            <label class="custom-control-label" for="empl_status">Probation</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="empl_status" value="PM" name="empl_status" type="radio" {{ old('empl_status') == "PM" ? 'checked' : '' }}>
                            <label class="custom-control-label" for="empl_status">Permanen</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="empl_status" value="KT" name="empl_status" type="radio" {{ old('empl_status') == "KT" ? 'checked' : '' }}>
                            <label class="custom-control-label" for="empl_status">Kontrak</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="empl_status" value="RS" name="empl_status" type="radio" {{ old('empl_status') == "RS" ? 'checked' : '' }}>
                            <label class="custom-control-label" for="empl_status">Resign</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="empl_status" value="PK" name="empl_status" type="radio" {{ old('empl_status') == "PK" ? 'checked' : '' }}>
                            <label class="custom-control-label" for="empl_status">PHK</label>
                        </div>
                        @error('empl_status')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Effect Date</label>
                        <input type="date" class="form-control @error('empl_eff_date')is-invalid @enderror" id="empl_eff_date" name="empl_eff_date" placeholder="Effect Date" value="{{ old('empl_eff_date') }}">
                        @error('empl_eff_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control @error('empl_email')is-invalid @enderror" id="empl_email" name="empl_email" placeholder="Email" value="{{ old('empl_email') }}">
                        @error('empl_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea class="form-control @error('empl_addr')is-invalid @enderror" rows="3" placeholder="Employee address..." id="empl_addr" name="empl_addr">{{ old('empl_addr') }}</textarea>
                        @error('empl_addr')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Telephone Area</label>
                        <input type="text" class="form-control @error('empl_tlp_area')is-invalid @enderror" id="empl_tlp_area" name="empl_tlp_area" placeholder="Telephone Area" value="{{ old('empl_tlp_area') }}">
                        @error('empl_tlp_area')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Telephone</label>
                        <input type="text" class="form-control @error('empl_tlp')is-invalid @enderror" id="empl_tlp" name="empl_tlp" placeholder="Telephone" value="{{ old('empl_tlp') }}">
                        @error('empl_tlp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Hanphone 1</label>
                        <input type="text" class="form-control @error('empl_hp01')is-invalid @enderror" id="empl_hp01" name="empl_hp01" placeholder="Hanphone 1" value="{{ old('empl_hp01') }}">
                        @error('empl_hp01')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Handphone 2</label>
                        <input type="text" class="form-control @error('empl_hp02')is-invalid @enderror" id="empl_hp02" name="empl_hp02" placeholder="Handphone 2" value="{{ old('empl_hp02') }}">
                        @error('empl_hp02')
                            <span class="invalid-feedback" role="alert">
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
                                <option value="{{ $i->zip_code }}" {{ old('zip_code') == $i->zip_code ? 'selected' : '' }}>{{ $i->zip_desc }}</option>
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