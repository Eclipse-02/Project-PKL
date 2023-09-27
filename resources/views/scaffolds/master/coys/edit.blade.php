@extends('dashboard.master')

@section('title', 'Update Coy')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('coys.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('coys.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Coy ID</label>
                    <input type="text" class="form-control @error('coy_id')is-invalid @enderror" id="coy_id" name="coy_id" placeholder="Coy ID" value="{{ old('coy_id') ? old('coy_id') : $data->coy_id }}">
                    @error('coy_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Coy Name</label>
                    <input type="text" class="form-control @error('coy_name')is-invalid @enderror" id="coy_name" name="coy_name" placeholder="Coy Name" value="{{ old('coy_name') ? old('coy_name') : $data->coy_name }}">
                    @error('coy_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Coy Address</label>
                    <textarea class="form-control @error('coy_addr')is-invalid @enderror" id="coy_addr" name="coy_addr" placeholder="Type your company address..." rows="3">{{ old('coy_addr') ? old('coy_addr') : $data->coy_addr }}</textarea>
                    @error('coy_addr')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Employee Telephone Area</label>
                    <input type="text" class="form-control @error('empl_tlp_area')is-invalid @enderror" id="empl_tlp_area" name="empl_tlp_area" placeholder="Employee Telephone Area" value="{{ old('empl_tlp_area') ? old('empl_tlp_area') : $data->empl_tlp_area }}">
                    @error('empl_tlp_area')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Employee Telephone</label>
                    <input type="text" class="form-control @error('empl_tlp')is-invalid @enderror" id="empl_tlp" name="empl_tlp" placeholder="Employee Telephone" value="{{ old('empl_tlp') ? old('empl_tlp') : $data->empl_tlp }}">
                    @error('empl_tlp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Employee Handphone 1</label>
                    <input type="text" class="form-control @error('empl_hp01')is-invalid @enderror" id="empl_hp01" name="empl_hp01" placeholder="Employee Phone 1" value="{{ old('empl_hp01') ? old('empl_hp01') : $data->empl_hp01 }}">
                    @error('empl_hp01')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Employee Handphone 2</label>
                    <input type="text" class="form-control @error('empl_hp02')is-invalid @enderror" id="empl_hp02" name="empl_hp02" placeholder="Employee Phone 2" value="{{ old('empl_hp02') ? old('empl_hp02') : $data->empl_hp02 }}">
                    @error('empl_hp02')
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
            </div class="col-lg-12 col-md-6">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
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