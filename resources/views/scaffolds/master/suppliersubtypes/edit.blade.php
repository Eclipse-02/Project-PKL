@extends('dashboard.master')

@section('title', 'Update Supplier Sub Type')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('suppliersubtypes.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('suppliersubtypes.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Sub Code</label>
                        <input type="text" class="form-control @error('sub_code')is-invalid @enderror" id="sub_code" name="sub_code" placeholder="Sub Code" value="{{ old('sub_code') ? old('sub_code') : $data->sub_code }}">
                        @error('sub_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Sub Name</label>
                        <input type="text" class="form-control @error('sub_name')is-invalid @enderror" id="sub_name" name="sub_name" placeholder="Sub Name" value="{{ old('sub_name') ? old('sub_name') : $data->sub_name }}">
                        @error('sub_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="Y" name="is_active" type="radio" {{ old('is_active') ? (old('is_active') == "Y" ? 'checked' : '') : ($data->is_active == "Y" ? 'checked' : '') }}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
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