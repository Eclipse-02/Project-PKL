@extends('dashboard.master')

@section('title', 'Update Supplier Acc')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('supplieraccs.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('supplieraccs.update', $data->id) }}" method="post">
        @csrf

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
                        <label class="form-label">Supplier Code</label>
                        <select class="form-select @error('supl_code')is-invalid @enderror" id="supl_code" name="supl_code">
                            <option class="text-center" disabled>-- Pilih Supplier Code --</option>
                            @foreach ($suppliers as $k)
                                <option value="{{ $k->supl_code }}" {{ old('supl_code') ? (old('supl_code') == $k->supl_code ? 'selected' : '') : ($data->supl_code == $k->supl_code ? 'selected' : '') }}>{{ $k->supl_name }}</option>
                            @endforeach
                        </select>
                        @error('supl_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Bank Code</label>
                        <select class="form-select @error('bank_code')is-invalid @enderror" id="bank_code" name="bank_code">
                            <option class="text-center" disabled>-- Pilih Bank Code --</option>
                            @foreach ($banks as $k)
                                <option value="{{ $k->bank_code }}" {{ old('bank_code') ? (old('bank_code') == $k->bank_code ? 'selected' : '') : ($data->bank_code == $k->bank_code ? 'selected' : '') }}>{{ $k->bank_name }}</option>
                            @endforeach
                        </select>
                        @error('bank_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Acc No</label>
                        <input type="text" class="form-control @error('acc_no')is-invalid @enderror" id="acc_no" name="acc_no" placeholder="Acc No" value="{{ old('acc_no') ? old('acc_no') : $data->acc_no }}">
                        @error('acc_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Acc Name</label>
                        <input type="text" class="form-control @error('acc_name')is-invalid @enderror" id="acc_name" name="acc_name" placeholder="Acc Name" value="{{ old('acc_name') ? old('acc_name') : $data->acc_name }}">
                        @error('acc_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Acc Description</label>
                        <textarea class="form-control @error('acc_desc')is-invalid @enderror" rows="3" id="acc_desc" name="acc_desc" placeholder="Acc Description">{{ old('acc_desc') ? old('acc_desc') : $data->acc_desc }}</textarea>
                        @error('acc_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Acc Currency</label>
                        <input class="form-control @error('acc_curr')is-invalid @enderror" list="datalistOptions" id="acc_curr" name="acc_curr" placeholder="Type to search..." value="{{ old('acc_curr') ? old('acc_curr') : $data->acc_curr }}">
                        <datalist id="datalistOptions">
                            <option value="IDR">
                            <option value="USD">
                            <option value="DLL">
                        </datalist>
                        @error('acc_curr')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Acc Status</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="acc_status" value="NW" name="acc_status" type="radio" disabled>
                        <label class="custom-control-label">Baru Disimpan</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="acc_status" value="NA" name="acc_status" type="radio" disabled>
                        <label class="custom-control-label">Need Approval</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="acc_status" value="AP" name="acc_status" type="radio" {{ $data->acc_status == 'AP' ? 'disabled' : '' }} {{ old('acc_status') ? (old('acc_status') == "AP" ? 'checked' : '') : ($data->acc_status == "AP" ? 'checked' : '') }}>
                        <label class="custom-control-label">Approved</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="acc_status" value="CL" name="acc_status" type="radio" {{ $data->acc_status =! 'AP' ? 'disabled' : '' }} {{ old('acc_status') ? (old('acc_status') == "CL" ? 'checked' : '') : ($data->acc_status == "CL" ? 'checked' : '') }}>
                        <label class="custom-control-label">Close</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="acc_status" value="RJ" name="acc_status" type="radio" {{ $data->acc_status == 'AP' ? 'disabled' : '' }} {{ old('acc_status') ? (old('acc_status') == "RJ" ? 'checked' : '') : ($data->acc_status == "RJ" ? 'checked' : '') }}>
                        <label class="custom-control-label">Reject</label>
                    </div>
                    @error('acc_status')
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