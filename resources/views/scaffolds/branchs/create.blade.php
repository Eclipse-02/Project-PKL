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
                        <label class="form-label">Branch Code</label>
                        <input type="text" class="form-control @error('branch_code')is-invalid @enderror" id="branch_code" name="branch_code" placeholder="Branch Code" value="{{ old('branch_code') }}">
                        @error('branch_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Name</label>
                        <input type="text" class="form-control @error('branch_name')is-invalid @enderror" id="branch_name" name="branch_name" placeholder="Branch Name" value="{{ old('branch_name') }}">
                        @error('branch_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Address</label>
                        <textarea class="form-control @error('branch_addr')is-invalid @enderror" rows="3" id="branch_addr" name="branch_addr" placeholder="Branch Address">{{ old('branch_addr') }}</textarea>
                        @error('branch_addr')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Telephone Area</label>
                        <input type="text" class="form-control @error('branch_tlp_area')is-invalid @enderror" id="branch_tlp_area" name="branch_tlp_area" placeholder="Branch Telephone Area" value="{{ old('branch_tlp_area') }}">
                        @error('branch_tlp_area')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Telephone</label>
                        <input type="text" class="form-control @error('branch_tlp')is-invalid @enderror" id="branch_tlp" name="branch_tlp" placeholder="Branch Telephone" value="{{ old('branch_tlp') }}">
                        @error('branch_tlp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Handphone 1</label>
                        <input type="text" class="form-control @error('branch_hp01')is-invalid @enderror" id="branch_hp01" name="branch_hp01" placeholder="Branch Hanphone 1" value="{{ old('branch_hp01') }}">
                        @error('branch_hp01')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Handphone 2</label>
                        <input type="text" class="form-control @error('branch_hp02')is-invalid @enderror" id="branch_hp02" name="branch_hp02" placeholder="Branch Hanphone 2" value="{{ old('branch_hp02') }}">
                        @error('branch_hp02')
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
                            <option class="text-center" selected disabled>-- Pilih Zip --</option>
                            @foreach ($zips as $k)
                                <option value="{{ $k->zip_code }}" {{ old('zip_code') == $k->zip_code ? 'selected' : '' }}>{{ $k->zip_code }} - {{ $k->zip_desc }}</option>
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
                        <label class="form-label">Kota Code</label>
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
                        <label class="form-label">Kecamatan Code</label>
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
                        <label class="form-label" class="text-center">Kelurahan Code</label>
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
                <div class="col-lg-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Branch Type</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="branch_type" value="HO" name="branch_type" type="radio" {{ old('branch_type') == "HO" ? 'checked' : '' }}>
                            <label class="custom-control-label" for="Head Office">Head Office</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="branch_type" value="B" name="branch_type" type="radio" {{ old('branch_type') == "B" ? 'checked' : '' }}>
                            <label class="custom-control-label" for="Branch">Branch</label>
                        </div>
                        @error('branch_type')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Area Code</label>
                        <select class="form-select @error('area_code')is-invalid @enderror" id="area_code" name="area_code">
                            <option class="text-center" selected disabled>-- Pilih Area --</option>
                            @foreach ($areas as $k)
                                <option value="{{ $k->area_code }}" {{ old('area_code') == $k->area_code ? 'selected' : '' }}>{{ $k->area_name }}</option>
                            @endforeach
                        </select>
                        @error('area_code')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="Y" name="is_active" type="radio" {{ old('is_active') == "Y" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="N" name="is_active" type="radio" {{ old('is_active') == "N" ? 'checked' : '' }}>
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