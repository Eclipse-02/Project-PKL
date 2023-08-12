@extends('dashboard.master')

@section('title', 'Update Parameter')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('parameters.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('parameters.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Key</label>
                        <input type="text" class="form-control form-control-alternative" id="key" name="key" placeholder="Key" value="{{ $data->key }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Value</label>
                        <input type="text" class="form-control form-control-alternative" id="value" name="value" placeholder="Value" value="{{ $data->value }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Notes</label>
                        <input type="text" class="form-control form-control-alternative" id="notes" name="notes" placeholder="Notes" value="{{ $data->notes }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection