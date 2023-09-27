@extends('dashboard.master')

@section('title', 'View Parameter')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('parameters.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Coy ID</dt>
                <dd class="col-sm-9">{{ $data->coy->coy_name }} / {{ $data->coy->coy_id }}</dd>

                <dt class="col-sm-3">Key</dt>
                <dd class="col-sm-9">{{ $data->key }}</dd>

                <dt class="col-sm-3">Value</dt>
                <dd class="col-sm-9">{{ $data->value }}</dd>

                <dt class="col-sm-3">Notes</dt>
                <dd class="col-sm-9">{{ $data->notes }}</dd>

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
