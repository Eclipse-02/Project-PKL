@extends('dashboard.master')

@section('title', 'Create Relation')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('relations.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('relations.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Relation Code</label>
                        <input type="text" class="form-control @error('rel_code')is-invalid @enderror" id="rel_code" name="rel_code" placeholder="Relation Code" value="{{ old('rel_code') }}">
                        @error('rel_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Relation Name</label>
                        <input type="text" class="form-control @error('rel_name')is-invalid @enderror" id="rel_name" name="rel_name" placeholder="Relation Name" value="{{ old('rel_name') }}">
                        @error('rel_name')
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