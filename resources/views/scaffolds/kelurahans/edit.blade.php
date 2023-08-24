@extends('dashboard.master')

@section('title', 'Update Kelurahan')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('kelurahans.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('kelurahans.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kel Code</label>
                        <input type="text" class="form-control @error('kel_code')is-invalid @enderror" id="kel_code" name="kel_code" placeholder="Kel Code" value="{{ old('kel_code') ? old('kel_code') : $data->kel_code }}">
                        @error('kel_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kelurahan</label>
                        <input type="text" class="form-control @error('kelurahan')is-invalid @enderror" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="{{ old('kelurahan') ? old('kelurahan') : $data->kelurahan }}">
                        @error('kelurahan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan</label>
                        <select class="form-select @error('kec_code')is-invalid @enderror" id="kec_code" name="kec_code">
                            <option class="text-center" disabled>-- Pilih Kecamatan --</option>
                            @foreach ($kecamatans as $k)
                                <option value="{{ $k->kec_code }}" {{ old('kec_code') ? (old('kec_code') == $k->kec_code ? 'selected' : '') : ($data->kec_code == $k->kec_code ? 'selected' : '') }}>{{ $k->kecamatan }}</option>
                            @endforeach
                        </select>
                        @error('kec_code')
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