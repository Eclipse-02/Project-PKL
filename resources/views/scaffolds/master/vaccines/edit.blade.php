@extends('dashboard.master')

@section('title', 'Update Vaccine')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('vaccines.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('vaccines.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Vaccine Code</label>
                        <input type="text" class="form-control @error('vc_code')is-invalid @enderror" id="vc_code" name="vc_code" placeholder="Vaccine Code" value="{{ old('vc_code') ? old('vc_code') : $data->vc_code }}">
                        @error('vc_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Vaccine Name</label>
                        <input type="text" class="form-control @error('vc_name')is-invalid @enderror" id="vc_name" name="vc_name" placeholder="Vaccine Name" value="{{ old('vc_name') ? old('vc_name') : $data->vc_name }}">
                        @error('vc_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="Y" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == "Y" ? 'checked' : '') : ($data->is_active == "Y" ? 'checked' : '') }}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input class="custom-control-input" id="is_active" value="N" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == "N" ? 'checked' : '') : ($data->is_active == "N" ? 'checked' : '') }}>
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