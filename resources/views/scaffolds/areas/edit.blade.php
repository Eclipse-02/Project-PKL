@extends('dashboard.master')

@section('title', 'Update Area')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('areas.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('areas.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Area Code</label>
                        <input type="text" class="form-control @error('area_code')is-invalid @enderror" id="area_code" name="area_code" placeholder="Area Code" value="{{ $data->area_code }}">
                        @error('area_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Area Name</label>
                        <input type="text" class="form-control @error('area_name')is-invalid @enderror" id="area_name" name="area_name" placeholder="Area Name" value="{{ $data->area_name }}">
                        @error('area_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="1" name="is_active" type="radio" {{ $data->is_active == 1 ? 'checked' : '' }}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input class="custom-control-input" id="is_active" value="0" name="is_active" type="radio" {{ $data->is_active == 0 ? 'checked' : '' }}>
                        <label class="custom-control-label" for="No">No</label>
                    </div>
                    @error('is_active')
                        <span class="invalid-feedback" role="alert">
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