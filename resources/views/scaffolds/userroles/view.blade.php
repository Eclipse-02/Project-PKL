@extends('dashboard.master')

@section('title', 'View User Role')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('userroles.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $data->user_id }}</dd>

                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">User Name</dt>
                <dd class="col-sm-9">{{ $data->name }}</dd>

                <dt class="col-sm-3">User Role</dt>
                <dd class="col-sm-9">{{ $data->display_name }}</dd>
            </dl>
        </div>
    </div>
@endsection
