@extends('dashboard.master')

@section('title', 'View Package')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('packages.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Coy ID</dt>
                <dd class="col-sm-9">{{ $data->coy->coy_name }} / {{ $data->coy->coy_id }}</dd>

                <dt class="col-sm-3">Package Code</dt>
                <dd class="col-sm-9">{{ $data->pkg_code }}</dd>

                <dt class="col-sm-3">Package Name</dt>
                <dd class="col-sm-9">{{ $data->pkg_name }}</dd>

                <dt class="col-sm-3">Package Description</dt>
                <dd class="col-sm-9">{{ $data->pkg_desc }}</dd>

                <dt class="col-sm-3">Package Price</dt>
                <dd class="col-sm-9">{{ $data->pkg_price }}</dd>

                <dt class="col-sm-3">Package Price Limit</dt>
                <dd class="col-sm-9">{{ $data->pkg_price_limit }}</dd>

                <dt class="col-sm-3">Package Price Agent</dt>
                <dd class="col-sm-9">{{ $data->pkg_price_agent }}</dd>

                <dt class="col-sm-3">Package Start</dt>
                <dd class="col-sm-9">{{ $data->pkg_start }}</dd>

                <dt class="col-sm-3">Package Closed</dt>
                <dd class="col-sm-9">{{ $data->pkg_closed }}</dd>

                <dt class="col-sm-3">Package Image</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/pkg-imgs/' . $data->pkg_image) }}" alt="supplier picture">
                </dd>

                <dt class="col-sm-3">Package Is Display</dt>
                <dd class="col-sm-9">{{ $data->pkg_is_display == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Detail Sequence No</dt>
                <dd class="col-sm-9">{{ $data->dtl_sq_no }}</dd>

                <dt class="col-sm-3">Detail Description</dt>
                <dd class="col-sm-9">{{ $data->dtl_desc }}</dd>

                <dt class="col-sm-3">Detail Price</dt>
                <dd class="col-sm-9">{{ $data->dtl_price }}</dd>

                <dt class="col-sm-3">Package Status</dt>
                <dd class="col-sm-9">@if($data->pkg_status == "NW")New @elseif($data->pkg_status == "AC")Accepted @elseif($data->pkg_status == "CN")Cancel @else Close @endif</dd>

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
