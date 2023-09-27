@extends('dashboard.master')

@section('title', 'View Role')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('roles.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $data->role_id }}</dd>

                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Role Name</dt>
                <dd class="col-sm-9">{{ $data->role_name }}</dd>

                <dt class="col-sm-3">Description</dt>
                <dd class="col-sm-9">{{ $data->description }}</dd>

                <dt class="col-sm-3">Is Active</dt>
                <dd class="col-sm-9">{{ $data->is_active }}</dd>

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
