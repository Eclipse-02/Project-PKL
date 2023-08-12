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
                        <label class="form-label">Kota</label>
                        <input type="text" class="form-control form-control-alternative" id="kota" name="kota" placeholder="Kota" value="{{ $data->kota }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Provinsi</label>
                        <select class="form-select" aria-label="Default select example" id="prov_code" name="prov_code">
                            <option>-- Pilih Provinsi --</option>
                            @foreach ($provinsis as $p)
                                <option value="{{ $p->prov_code }}" {{ $data->prov_code == $p->prov_code ? 'selected' : '' }}>{{ $p->provinsi }}</option>
                            @endforeach
                        </select>
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
                </div>
                <div class="col-lg-12 col-md-6">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection