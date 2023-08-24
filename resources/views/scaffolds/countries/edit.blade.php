@extends('dashboard.master')

@section('title', 'Update Country')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('countries.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('countries.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Country Code</label>
                        <input type="text" class="form-control @error('con_code')is-invalid @enderror" id="con_code" name="con_code" placeholder="Country Code" value="{{ old('con_code') ? old('con_code') : $data->con_code }}">
                    </div>
                    @error('con_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Country Name</label>
                        <input type="text" class="form-control @error('con_name')is-invalid @enderror" id="con_name" name="con_name" placeholder="Country Name" value="{{ old('con_name') ? old('con_name') : $data->con_name }}">
                    </div>
                    @error('con_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="1" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == 1 ? 'checked' : '') : ($data->is_active == 1 ? 'checked' : '') }}}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="0" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == 0 ? 'checked' : '') : ($data->is_active == 0 ? 'checked' : '') }}>
                        <label class="custom-control-label" for="No">No</label>
                    </div>
                    @error('is_active')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection