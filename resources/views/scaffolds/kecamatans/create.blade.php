@extends('dashboard.master')

@section('title', 'Create Kecamatan')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('kecamatans.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('kecamatans.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">kec Code</label>
                        <input type="text" class="form-control @error('kec_code')is-invalid @enderror" id="kec_code" name="kec_code" placeholder="Kec Code" value="{{ old('kec_code') }}">
                        @error('kec_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan</label>
                        <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="{{ old('kecamatan') }}">
                        @error('kecamatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota</label>
                        <select class="form-select @error('kota_code')is-invalid @enderror" id="kota_code" name="kota_code">
                            <option class="text-center" selected disabled>-- Pilih Kota --</option>
                            @foreach ($kotas as $k)
                                <option value="{{ $k->kota_code }}" {{ old('kota_code') == $k->kota_code ? 'selected' : '' }}>{{ $k->kota }}</option>
                            @endforeach
                        </select>
                        @error('kota_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Is Active</label>
                    <dtom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="0" niv class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="1" name="is_active" type="radio" {{ old('is_active') == 1 ? 'checked' : '' }}>
                        <label class="cusame="is_active" type="radio" {{ old('is_active') == 0 ? 'checked' : '' }}>
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