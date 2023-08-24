@extends('dashboard.master')

@section('title', 'Create Bank')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('banks.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('banks.store') }}" method="post">
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
                        <label class="form-label">Bank Code</label>
                        <input type="text" maxlength="5" class="form-control @error('bank_code')is-invalid @enderror" id="bank_code" name="bank_code" placeholder="Max 5 Numbers" value="{{ old('bank_code') }}">
                    </div>
                    @error('bank_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Bank Name</label>
                        <input type="text" maxlength="5" class="form-control @error('bank_name')is-invalid @enderror" id="bank_name" name="bank_name" placeholder="Bank Name" value="{{ old('bank_name') }}">
                    </div>
                    @error('bank_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Bank Branch</label>
                        <input type="text" class="form-control @error('bank_branch')is-invalid @enderror" id="bank_branch" name="bank_branch" placeholder="Bank Branch" value="{{ old('bank_branch') }}">
                    </div>
                    @error('bank_branch')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Zip Code</label>
                        <select class="form-select @error('zip_code')is-invalid @enderror" id="zip_code" name="zip_code">
                            <option class="text-center" selected disabled>-- Pilih Provinsi --</option>
                            @foreach ($zips as $i)
                                <option value="{{ $i->zip_code }}" {{ old('zip_code') == $i->zip_code ? 'selected' : '' }}>{{ $i->zip_code }} - {{ $i->zip_desc }}</option>
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
                        <select class="form-select @error('kota_code')is-invalid @enderror" id="kota_code" name="kota_code" disabled>
                            <option class="text-center" selected disabled>-- Pilih Provinsi Terlebih Dahulu --</option>
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
                        <select class="form-select @error('kec_code')is-invalid @enderror" id="kec_code" name="kec_code" disabled>
                            <option class="text-center" selected disabled>-- Pilih Kota Terlebih Dahulu --</option>
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
                        <select class="form-select @error('kel_code')is-invalid @enderror" id="kel_code" name="kel_code" disabled>
                            <option class="text-center" selected disabled>-- Pilih Kecamatan Terlebih Dahulu --</option>
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
                        <input class="custom-control-input" id="is_active" value="1" name="is_active" type="radio" {{ old('is_active') == 1 ? 'checked' : '' }}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="0" name="is_active" type="radio" {{ old('is_active') == 0 ? 'checked' : '' }}>
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