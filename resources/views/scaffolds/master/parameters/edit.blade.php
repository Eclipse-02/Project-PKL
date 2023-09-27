@extends('dashboard.master')

@section('title', 'Update Parameter')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('parameters.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('parameters.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Coy ID</label>
                        <select class="form-select @error('coy_id')is-invalid @enderror" id="coy_id" name="coy_id">
                            <option class="text-center" disabled>-- Pilih Coy ID --</option>
                            @foreach ($coys as $k)
                                <option value="{{ $k->coy_id }}" {{ old('coy_id') ? (old('coy_id') == $k->coy_id ? 'selected' : '') : ($data->coy_id == $k->coy_id ? 'selected' : '') }}>{{ $k->coy_name }}</option>
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
                        <label class="form-label">Key</label>
                        <input type="text" class="form-control @error('key')is-invalid @enderror" id="key" name="key" placeholder="Key" value="{{ old('key') ? old('key') : $data->key }}">
                    </div>
                    @error('key')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Value</label>
                        <input type="text" class="form-control @error('value')is-invalid @enderror" id="value" name="value" placeholder="Value" value="{{ old('value') ? old('value') : $data->value }}">
                    </div>
                    @error('value')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Notes</label>
                        <input type="text" class="form-control @error('notes')is-invalid @enderror" id="notes" name="notes" placeholder="Notes" value="{{ old('notes') ? old('notes') : $data->notes }}">
                    </div>
                    @error('notes')
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