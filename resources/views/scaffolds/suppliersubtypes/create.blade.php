{{-- 1st method --}}

@extends('dashboard.master')

@section('title', 'Create Supplier Sub Type')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('suppliersubtype.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('suppliersubtype.store') }}" method="post">
        @csrf

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Sub Code</label>
                        <input type="text" class="form-control form-control-alternative" id="sub_code" name="sub_code" placeholder="Sub Code">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Sub Name</label>
                        <input type="text" class="form-control form-control-alternative" id="sub_name" name="sub_name" placeholder="Sub Name">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="1" name="is_active" type="radio">
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input class="custom-control-input" id="is_active" value="0" name="is_active" type="radio">
                        <label class="custom-control-label" for="No">No</label>
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