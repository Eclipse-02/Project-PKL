@extends('dashboard.master')

@section('title', 'Create Edu')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('edus.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('edus.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Coy ID</label>
                        <select class="form-select @error('coy_id')is-invalid @enderror" id="coy_id" name="coy_id">
                            <option class="text-center" selected disabled>-- Pilih Coy ID --</option>
                            @foreach ($coys as $k)
                                <option value="{{ $k->coy_id }}" {{ old('coy_id') == $k->coy_id ? 'selected' : '' }}>{{ $k->coy_name }}</option>
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
                        <label class="form-label">Edu Code</label>
                        <input type="text" class="form-control @error('edu_code')is-invalid @enderror" id="edu_code" name="edu_code" placeholder="Edu Code" value="{{ old('edu_code') }}">
                        @error('edu_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Edu Name</label>
                        <input type="text" class="form-control @error('edu_name')is-invalid @enderror" id="edu_name" name="edu_name" placeholder="Edu Name" value="{{ old('edu_name') }}">
                        @error('edu_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="Y" name="is_active" type="radio" {{ old('is_active') == "Y" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="N" name="is_active" type="radio" {{ old('is_active') == "N" ? 'checked' : '' }}>
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