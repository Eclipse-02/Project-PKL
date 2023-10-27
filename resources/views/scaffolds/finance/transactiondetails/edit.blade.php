@extends('dashboard.master')

@section('title', 'Update Transaction')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('transactions.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('transactions.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kode</label>
                        <input type="text" class="form-control @error('trx_code')is-invalid @enderror" id="trx_code" name="trx_code" placeholder="Max 30" value="{{ $data->trx_code }}">
                        @error('trx_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('trx_desc')is-invalid @enderror" id="trx_desc" name="trx_desc" placeholder="deskripsi..." rows="3">{{ $data->trx_desc }}</textarea>
                        @error('trx_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Tipe</label>
                    <select class="form-select" id="trx_type" name="trx_type">
                        <option selected disabled>-- Pilih Tipe --</option>
                        <option value="RV" {{ $data->trx_type == 'RV' ? 'selected' : '' }}>PENERIMAAN</option>
                        <option value="INV" {{ $data->trx_type == 'INV' ? 'selected' : '' }}>PENGELUARAN</option>
                    </select>
                    @error('trx_type')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="trx_status" name="trx_status">
                        <option selected disabled>-- Pilih Status --</option>
                        <option value="Y" {{ $data->trx_status == 'Y' ? 'selected' : '' }}>AKTIF</option>
                        <option value="N" {{ $data->trx_status == 'N' ? 'selected' : '' }}>NON AKTIF</option>
                    </select>
                    @error('trx_status')
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