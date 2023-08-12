@extends('dashboard.master')

@section('title', 'View Branch')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('branchs.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $data->coy_id }}</dd>

                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Branch Code</dt>
                <dd class="col-sm-9">{{ $data->branch_code }}</dd>

                <dt class="col-sm-3">Branch Name</dt>
                <dd class="col-sm-9">{{ $data->branch_name }}</dd>

                <dt class="col-sm-3">Branch Address</dt>
                <dd class="col-sm-9">{{ $data->branch_addr }}</dd>

                <dt class="col-sm-3">Branch Telephone Area</dt>
                <dd class="col-sm-9">{{ $data->branch_tlp_area }}</dd>

                <dt class="col-sm-3">Branch Telephone</dt>
                <dd class="col-sm-9">{{ $data->branch_tlp }}</dd>

                <dt class="col-sm-3">Branch Handphone 1</dt>
                <dd class="col-sm-9">{{ $data->branch_hp01 }}</dd>

                <dt class="col-sm-3">Branch Handphone 2</dt>
                <dd class="col-sm-9">{{ $data->branch_hp02 }}</dd>

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

                <dt class="col-sm-3">Branch Type</dt>
                <dd class="col-sm-9">{{ $data->branch_type == 'HO' ? 'Head Office' : 'Branch' }}</dd>

                <dt class="col-sm-3">Area Code</dt>
                <dd class="col-sm-9">{{ $data->area_code }}</dd>

                <dt class="col-sm-3">Is Active</dt>
                <dd class="col-sm-9">{{ $data->is_active == 1 ? "Yes" : "No" }}</dd>

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
