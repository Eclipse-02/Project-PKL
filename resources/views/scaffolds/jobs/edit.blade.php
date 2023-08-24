@extends('dashboard.master')

@section('title', 'Update Job')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('jobs.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('jobs.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Coy ID</label>
                        <select class="form-select @error('coy_id')is-invalid @enderror" id="coy_id" name="coy_id">
                            <option class="text-center" disabled>-- Pilih Coy ID --</option>
                            @foreach ($coys as $k)
                                <option value="{{ $k->coy_id }}" {{ old('coy_id') ? (old('coy_id') == $k->coy_id ? 'selected' : '') : ($data->coy_id == $k->coy_id ? 'selected' : '') }}>{{ $k->coy_name }}</option>
                            @endforeach
                        </select>
                        @error('coy_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Job Code</label>
                        <input type="text" class="form-control @error('job_code')is-invalid @enderror" id="job_code" name="job_code" placeholder="Job Code" value="{{ old('job_code') ? old('job_code') : $data->job_code }}">
                    </div>
                    @error('job_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Job Name</label>
                        <input type="text" class="form-control @error('job_name')is-invalid @enderror" id="job_name" name="job_name" placeholder="Job Name" value="{{ old('job_name') ? old('job_name') : $data->job_name }}">
                    </div>
                    @error('job_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="1" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == 1 ? 'checked' : '') : ($data->is_active == 1 ? 'checked' : '') }}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="0" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == 1 ? 'checked' : '') : ($data->is_active == 1 ? 'checked' : '') }}>
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