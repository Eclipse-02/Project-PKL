@extends('dashboard.master')

@section('title', 'Update Provinsi')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('provinsis.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('provinsis.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Prov Code</label>
                        <input type="text" class="form-control @error('prov_code')is-invalid @enderror" id="prov_code" name="prov_code" placeholder="Prov Code" value="{{ old('prov_code') ? old('prov_code') : $data->prov_code }}">
                        @error('prov_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Provinsi</label>
                        <input type="text" class="form-control @error('provinsi')is-invalid @enderror" id="provinsi" name="provinsi" placeholder="Provinsi" value="{{ old('provinsi') ? old('provinsi') : $data->provinsi }}">
                        @error('provinsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="1" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == 1 ? 'checked' : '') : ($data->is_active == 1 ? 'checked' : '') }}>
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