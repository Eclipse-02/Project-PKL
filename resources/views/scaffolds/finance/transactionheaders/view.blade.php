@extends('dashboard.master')

@section('title', 'View Transaksi Header')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('transactionheaders.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Kode</dt>
                <dd class="col-sm-9">{{ $data->param_code }}</dd>

                <dt class="col-sm-3">Deskripsi</dt>
                <dd class="col-sm-9">{{ $data->param_desc }}</dd>

                <dt class="col-sm-3">Status</dt>
                <dd class="col-sm-9">{{ $data->param_status == "Y" ? "AKTIF" : "NON AKTIF" }}</dd>

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
