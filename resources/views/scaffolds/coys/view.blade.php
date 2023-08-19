@extends('dashboard.master')

@section('title', 'View Role')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('coys.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $data->coy_id }}</dd>

                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Coy Name</dt>
                <dd class="col-sm-9">{{ $data->coy_name }}</dd>

                <dt class="col-sm-3">Coy Address</dt>
                <dd class="col-sm-9">{{ $data->coy_addr }}</dd>

                <dt class="col-sm-3">Employee Telephone Area</dt>
                <dd class="col-sm-9">{{ $data->empl_tlp_area }}</dd>

                <dt class="col-sm-3">Employee Telephone</dt>
                <dd class="col-sm-9">{{ $data->empl_tlp }}</dd>

                <dt class="col-sm-3">Employee Handphone 1</dt>
                <dd class="col-sm-9">{{ $data->empl_hp01 }}</dd>

                <dt class="col-sm-3">Employee Handphone 2</dt>
                <dd class="col-sm-9">{{ $data->empl_hp02 }}</dd>

                <dt class="col-sm-3">Provinsi Code</dt>
                <dd class="col-sm-9">{{ $data->provinsi->provinsi }} / {{ $data->prov_code }}</dd>

                <dt class="col-sm-3">Kota Code</dt>
                <dd class="col-sm-9">{{ $data->kota->kota }} / {{ $data->kota_code }}</dd>

                <dt class="col-sm-3">Kecamatan Code</dt>
                <dd class="col-sm-9">{{ $data->kecamatan->kecamatan }} / {{ $data->kec_code }}</dd>

                <dt class="col-sm-3">Kelurahan Code</dt>
                <dd class="col-sm-9">{{ $data->kelurahan->kelurahan }} / {{ $data->kel_code }}</dd>

                <dt class="col-sm-3">Zip Code</dt>
                <dd class="col-sm-9">{{ $data->zip_code }}</dd>

                <dt class="col-sm-3">Created By</dt>
                <dd class="col-sm-9">{{ $data->created_by }}</dd>

                <dt class="col-sm-3">Created At</dt>
                <dd class="col-sm-9">{{ $data->created_at }}</dd>

                <dt class="col-sm-3">Updated By</dt>
                <dd class="col-sm-9">{{ $data->updated_by }}</dd>

                <dt class="col-sm-3">Updated At</dt>
                <dd class="col-sm-9">{{ $data->updated_at }}</dd>
            </dl>
        </div>
    </div>
@endsection
