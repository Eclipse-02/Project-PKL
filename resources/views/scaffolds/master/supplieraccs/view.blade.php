@extends('dashboard.master')

@section('title', 'View Provinsi')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('provinsis.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Coy ID</dt>
                <dd class="col-sm-9">{{ $data->coy->coy_name }} / {{ $data->coy->coy_id }}</dd>

                <dt class="col-sm-3">Supplier Code</dt>
                <dd class="col-sm-9">{{ $data->supplier->supl_name }} / {{ $data->supplier->supl_code }}</dd>

                <dt class="col-sm-3">Bank Code</dt>
                <dd class="col-sm-9">{{ $data->bank->bank_name }} / {{ $data->bank->bank_code }}</dd>

                <dt class="col-sm-3">Acc No</dt>
                <dd class="col-sm-9">{{ $data->acc_no }}</dd>

                <dt class="col-sm-3">Acc Name</dt>
                <dd class="col-sm-9">{{ $data->acc_name }}</dd>

                <dt class="col-sm-3">Acc Description</dt>
                <dd class="col-sm-9">{{ $data->acc_desc }}</dd>

                <dt class="col-sm-3">Acc Currency</dt>
                <dd class="col-sm-9">{{ $data->acc_curr }}</dd>

                <dt class="col-sm-3">Acc Status</dt>
                <dd class="col-sm-9">@if($data->supl_status == "NW")Baru Disimpan @elseif($data->supl_status == "NA")Need Approval @elseif($data->supl_status == "AP")Approved @elseif($data->supl_status == "CL")Close @else Reject @endif</dd>

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
