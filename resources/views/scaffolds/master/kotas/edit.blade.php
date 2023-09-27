@extends('dashboard.master')

@section('title', 'Update Kota')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('kotas.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('kotas.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota Code</label>
                        <input type="text" class="form-control @error('kota_code')is-invalid @enderror" id="kota_code" name="kota_code" placeholder="kota Code" value="{{ old('kota_code') ? old('kota_code') : $data->kota_code }}">
                        @error('kota_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota</label>
                        <input type="text" class="form-control @error('kota')is-invalid @enderror" id="kota" name="kota" placeholder="Kota" value="{{ old('kota') ? old('kota') : $data->kota }}">
                        @error('kota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Provinsi</label>
                        <select class="form-select @error('prov_code')is-invalid @enderror" id="prov_code" name="prov_code">
                            <option class="text-center" disabled>-- Pilih Provinsi --</option>
                            @foreach ($provinsis as $p)
                                <option value="{{ $p->prov_code }}" {{ old('prov_code') ? (old('prov_code') == $p->prov_code ? 'selected' : '') : ($data->prov_code == $p->prov_code ? 'selected' : '') }}>{{ $p->provinsi }}</option>
                            @endforeach
                        </select>
                        @error('prov_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                        @error('is_active')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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