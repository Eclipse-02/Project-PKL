@extends('dashboard.master')

@section('title', 'Update Transaction Header')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('transactionheaders.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('transactionheaders.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kode</label>
                        <input type="text" class="form-control @error('param_code')is-invalid @enderror" id="param_code" name="param_code" placeholder="Max 30" value="{{ $data->param_code }}">
                        @error('param_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('param_desc')is-invalid @enderror" id="param_desc" name="param_desc" placeholder="deskripsi..." rows="3">{{ $data->param_desc }}</textarea>
                        @error('param_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="param_status" name="param_status">
                        <option selected disabled>-- Pilih Status --</option>
                        <option value="Y" {{ $data->param_status == 'Y' ? 'selected' : '' }}>AKTIF</option>
                        <option value="N" {{ $data->param_status == 'N' ? 'selected' : '' }}>NON AKTIF</option>
                    </select>
                    @error('param_status')
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