@extends('dashboard.master')

@section('title', 'View User')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('users.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Coy ID</dt>
                <dd class="col-sm-9">{{ $data->coy->coy_name }} / {{ $data->coy->coy_id }}</dd>

                <dt class="col-sm-3">Employee ID</dt>
                <dd class="col-sm-9">{{ $data->employee->empl_name }} / {{ $data->employee->empl_id }}</dd>

                <dt class="col-sm-3">User Password</dt>
                <dd class="col-sm-9">{{ $data->password }}</dd>

                <dt class="col-sm-3">Employee Branch</dt>
                <dd class="col-sm-9">{{ $data->branch->branch_name }} / {{ $data->branch->branch_code }}</dd>

                <dt class="col-sm-3">Access Last</dt>
                <dd class="col-sm-9">{{ $data->access_last }}</dd>

                <dt class="col-sm-3">Max Session</dt>
                <dd class="col-sm-9">{{ $data->max_session }}</dd>

                <dt class="col-sm-3">Expired Password</dt>
                <dd class="col-sm-9">{{ $data->expired_pwd }}</dd>

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
