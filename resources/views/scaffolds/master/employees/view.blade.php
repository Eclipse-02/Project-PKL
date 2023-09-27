@extends('dashboard.master')

@section('title', 'View Employee')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('employees.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Coy ID</dt>
                <dd class="col-sm-9">{{ $data->coy->coy_name }} / {{ $data->coy->coy_id }}</dd>

                <dt class="col-sm-3">Employee ID</dt>
                <dd class="col-sm-9">{{ $data->empl_id }}</dd>

                <dt class="col-sm-3">Employee Branch</dt>
                <dd class="col-sm-9">{{ $data->branch->branch_name }} / {{ $data->branch->branch_code }}</dd>

                <dt class="col-sm-3">Employee Name</dt>
                <dd class="col-sm-9">{{ $data->empl_name }}</dd>

                <dt class="col-sm-3">Position Code</dt>
                <dd class="col-sm-9">{{ $data->position->poss_name }} / {{ $data->position->poss_code }}</dd>

                <dt class="col-sm-3">Employee Up Level</dt>
                <dd class="col-sm-9">{{ $data->empl_up_level }}</dd>

                <dt class="col-sm-3">Employee Status</dt>
                <dd class="col-sm-9">@if($data->supl_status == "PB")Probation @elseif($data->supl_status == "PM")Permanent @elseif($data->supl_status == "KT")Kontrak @elseif($data->supl_status == "RS")Resign @else PHK @endif</dd>

                <dt class="col-sm-3">Employee Effect Date</dt>
                <dd class="col-sm-9">{{ $data->empl_eff_date }}</dd>

                <dt class="col-sm-3">Employee Email</dt>
                <dd class="col-sm-9">{{ $data->empl_email }}</dd>

                <dt class="col-sm-3">Employee Address</dt>
                <dd class="col-sm-9">{{ $data->empl_addr }}</dd>

                <dt class="col-sm-3">Employee Telephone Area</dt>
                <dd class="col-sm-9">{{ $data->empl_tlp_area }}</dd>

                <dt class="col-sm-3">Employee Telephone</dt>
                <dd class="col-sm-9">{{ $data->empl_tlp }}</dd>

                <dt class="col-sm-3">Employee Handphone 1</dt>
                <dd class="col-sm-9">{{ $data->empl_hp01 }}</dd>

                <dt class="col-sm-3">Employee Handphone 2</dt>
                <dd class="col-sm-9">{{ $data->empl_hp02 }}</dd>

                <dt class="col-sm-3">Provinsi Code</dt>
                <dd class="col-sm-9">{{ $data->provinsi->provinsi }} / {{ $data->provinsi->prov_code }}</dd>

                <dt class="col-sm-3">Kota Code</dt>
                <dd class="col-sm-9">{{ $data->kota->kota }} / {{ $data->kota->kota_code }}</dd>

                <dt class="col-sm-3">Kecamatan Code</dt>
                <dd class="col-sm-9">{{ $data->kecamatan->kecamatan }} / {{ $data->kecamatan->kec_code }}</dd>

                <dt class="col-sm-3">Kelurahan Code</dt>
                <dd class="col-sm-9">{{ $data->kelurahan->kelurahan }} / {{ $data->kelurahan->kel_code }}</dd>

                <dt class="col-sm-3">Zip Code</dt>
                <dd class="col-sm-9">{{ $data->zip->zip_desc }} / {{ $data->zip->zip_code }}</dd>

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
