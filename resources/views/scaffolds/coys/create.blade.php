@extends('dashboard.master')

@section('title', 'Create Coy')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('coys.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('coys.store') }}" method="post">
        @csrf

            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Coy Name</label>
                    <input type="text" class="form-control form-control-alternative" id="coy_name" name="coy_name" placeholder="Coy Name">
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Coy Address</label>
                    <textarea class="form-control" id="coy_addr" name="coy_addr" placeholder="Type your company address..." rows="3"></textarea>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Employee Telephone Area</label>
                    <input type="text" class="form-control form-control-alternative" id="empl_tlp_area" name="empl_tlp_area" placeholder="Employee Telephone Area">
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Employee Telephone</label>
                    <input type="text" class="form-control form-control-alternative" id="empl_tlp" name="empl_tlp" placeholder="Employee Telephone">
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Employee Handphone 1</label>
                    <input type="text" class="form-control form-control-alternative" id="empl_hp01" name="empl_hp01" placeholder="Employee Phone 1">
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Employee Handphone 2</label>
                    <input type="text" class="form-control form-control-alternative" id="empl_hp02" name="empl_hp02" placeholder="Employee Phone 2">
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Zip Code</label>
                    <select class="form-select" id="zip_code" name="zip_code">
                        <option selected class="text-center">-- Pilih Zip --</option>
                        @foreach ($zips as $k)
                            <option value="{{ $k->sub_zip_code }}">{{ $k->sub_zip_code }} - {{ $k->zip_desc }}</option>
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