@extends('dashboard.master')

@section('title', 'Create Supplier Acc')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('supplieraccs.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('supplieraccs.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Supplier Code</label>
                        <select class="form-select" id="supl_code" name="supl_code">
                            <option selected class="text-center">-- Pilih Supplier Code --</option>
                            @foreach ($suppliers as $k)
                                <option value="{{ $k->supl_code }}">{{ $k->supl_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Bank Code</label>
                        <select class="form-select" id="bank_code" name="bank_code">
                            <option selected class="text-center">-- Pilih Bank Code --</option>
                            @foreach ($banks as $k)
                                <option value="{{ $k->bank_code }}">{{ $k->bank_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Acc No</label>
                        <input type="text" class="form-control" id="acc_no" name="acc_no" placeholder="Acc No" value="{{ old('acc_no') }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Acc Name</label>
                        <input type="text" class="form-control" id="acc_name" name="acc_name" placeholder="Acc Name" value="{{ old('acc_name') }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Acc Description</label>
                        <textarea class="form-control form-control-alternative" rows="3" id="acc_desc" name="acc_desc" placeholder="Acc Description">{{ old('acc_desc') }}</textarea>
                    </div>
                </div>
                {{-- <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Acc Currency</label>
                        <input type="text" class="form-control" id="acc_no" name="acc_no" placeholder="Acc No" value="{{ old('acc_no') }}">
                    </div>
                </div> --}}
                <div class="col-lg-12 col-md-6 mb-3">
                    <label class="form-label">Acc Status</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="supl_status" value="NW" name="acc_status" type="radio" {{ old('acc_status') == 'NW' ? 'checked' : '' }}>
                        <label class="custom-control-label">Baru Disimpan</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="acc_status" value="NA" name="acc_status" type="radio" {{ old('acc_status') == 'NA' ? 'checked' : '' }}>
                        <label class="custom-control-label">Need Approval</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="acc_status" value="AP" name="acc_status" type="radio" {{ old('acc_status') == 'AP' ? 'checked' : '' }} disabled>
                        <label class="custom-control-label">Approved</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="acc_status" value="CL" name="acc_status" type="radio" {{ old('acc_status') == 'CL' ? 'checked' : '' }} disabled>
                        <label class="custom-control-label">Close</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input class="custom-control-input" id="acc_status" value="RJ" name="acc_status" type="radio" {{ old('acc_status') == 'RJ' ? 'checked' : '' }} disabled>
                        <label class="custom-control-label">Reject</label>
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