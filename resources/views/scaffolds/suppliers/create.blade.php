@extends('dashboard.master')

@section('title', 'Create Supplier')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('suppliers.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('suppliers.store') }}" method="post" enctype="multipart/form-data">
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
                        <label class="form-label">Supplier Code</label>
                        <input type="text" class="form-control form-control-alternative" id="supl_code" name="supl_code" placeholder="Supplier Code">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Branch Code</label>
                        <select class="form-select" id="branch_code" name="branch_code">
                            <option selected class="text-center">-- Pilih Branch Code --</option>
                            @foreach ($branchs as $k)
                                <option value="{{ $k->branch_code }}">{{ $k->branch_code }}</option>
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
                    <div class="form-group">
                        <label class="form-label">Supplier Name</label>
                        <input type="text" class="form-control form-control-alternative" id="supl_name" name="supl_name" placeholder="Supplier Name">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Type</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="supl_type" value="1" name="supl_type" type="radio">
                            <label class="custom-control-label">Company</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input" id="supl_type" value="0" name="supl_type" type="radio">
                            <label class="custom-control-label">Individual</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Sub Type</label>
                        <select class="form-select" id="supl_sub_type" name="supl_sub_type">
                            <option selected class="text-center">-- Pilih Supplier Sub Type --</option>
                            @foreach ($supplierSubTypes as $k)
                                <option value="{{ $k->sub_code }}">{{ $k->sub_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Pic</label>
                        <img class="supplier-preview img-fluid mb-3">
                        <input type="file" class="form-control form-control-alternative" id="supl_pic_name" name="supl_pic_name" placeholder="Supplier Pic">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Position Code</label>
                        <select class="form-select" id="poss_code" name="poss_code">
                            <option selected class="text-center">-- Pilih Position Code --</option>
                            @foreach ($poss as $k)
                                <option value="{{ $k->poss_code }}">{{ $k->poss_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier ID No</label>
                        <input type="text" class="form-control form-control-alternative" id="supl_id_no" name="supl_id_no" placeholder="Supplier ID No">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Address</label>
                        <textarea class="form-control form-control-alternative" rows="3" id="supl_addr" name="supl_addr" placeholder="Supplier Address"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Telephone Area</label>
                        <input type="text" class="form-control form-control-alternative" id="supl_tlp_area" name="supl_tlp_area" placeholder="Supplier Telephone Area">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Telephone</label>
                        <input type="text" class="form-control form-control-alternative" id="supl_tlp" name="supl_tlp" placeholder="Supplier Telephone">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Handphone 1</label>
                        <input type="text" class="form-control form-control-alternative" id="supl_hp01" name="supl_hp01" placeholder="Supplier Hanphone 1">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Handphone 2</label>
                        <input type="text" class="form-control form-control-alternative" id="supl_hp02" name="supl_hp02" placeholder="Supplier Hanphone 2">
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
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier NPWP No</label>
                        <input type="text" class="form-control form-control-alternative" id="supl_npwp_no" name="supl_npwp_no" placeholder="Supplier NPWP No">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier NPWP Name</label>
                        <input type="text" class="form-control form-control-alternative" id="supl_npwp_name" name="supl_npwp_name" placeholder="Supplier NPWP Name">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier NPWP Address</label>
                        <textarea class="form-control form-control-alternative" rows="3" id="supl_npwp_addr" name="supl_npwp_addr" placeholder="Supplier NPWP Address"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Desc</label>
                        <textarea class="form-control form-control-alternative" rows="3" id="supl_desc" name="supl_desc" placeholder="Supplier Desc"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">File Name MOU</label>
                        <img class="mou-preview img-fluid mb-3">
                        <input type="file" class="form-control form-control-alternative" id="file_name_mou" name="file_name_mou" placeholder="File Name MOU">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">File Name KTP</label>
                        <img class="ktp-preview img-fluid mb-3">
                        <input type="file" class="form-control form-control-alternative" id="file_name_ktp" name="file_name_ktp" placeholder="File Name KTP">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">File Name NPWP</label>
                        <img class="npwp-preview img-fluid mb-3">
                        <input type="file" class="form-control form-control-alternative" id="file_name_npwp" name="file_name_npwp" placeholder="File Name NPWP">
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

    $('#supl_pic_name').change(function() {
        const supl_pic_name = document.querySelector('#supl_pic_name');
        const supl_pic_namePreview = document.querySelector('.supplier-preview');

        supl_pic_namePreview.style.display = 'block';
        supl_pic_namePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(supl_pic_name.files[0]);

        oFReader.onload = function(oFREvent) {
            supl_pic_namePreview.src = oFREvent.target.result;
        }
    });

    $('#file_name_mou').change(function() {
        const file_name_mou = document.querySelector('#file_name_mou');
        const file_name_mouPreview = document.querySelector('.mou-preview');

        file_name_mouPreview.style.display = 'block';
        file_name_mouPreview.style.height = '200px';

        console.log(file_name_mou.files[0]);
        const oFReader = new FileReader();
        oFReader.readAsDataURL(file_name_mou.files[0]);

        oFReader.onload = function(oFREvent) {
            file_name_mouPreview.src = oFREvent.target.result;
        }
    });

    $('#file_name_ktp').change(function() {
        const file_name_ktp = document.querySelector('#file_name_ktp');
        const file_name_ktpPreview = document.querySelector('.ktp-preview');

        file_name_ktpPreview.style.display = 'block';
        file_name_ktpPreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(file_name_ktp.files[0]);

        oFReader.onload = function(oFREvent) {
            file_name_ktpPreview.src = oFREvent.target.result;
        }
    });

    $('#file_name_npwp').change(function() {
        const file_name_npwp = document.querySelector('#file_name_npwp');
        const file_name_npwpPreview = document.querySelector('.npwp-preview');

        file_name_npwpPreview.style.display = 'block';
        file_name_npwpPreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(file_name_npwp.files[0]);

        oFReader.onload = function(oFREvent) {
            file_name_npwpPreview.src = oFREvent.target.result;
        }
    });
</script>
@endsection