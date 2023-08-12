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
                        <label class="form-label">Kelurahan</label>
                        <input type="text" class="form-control form-control-alternative" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="{{ $data->kelurahan }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan</label>
                        <select class="form-select" aria-label="Default select example" id="kec_code" name="kec_code">
                            <option>-- Pilih Kecamatan --</option>
                            @foreach ($kecamatans as $k)
                                <option value="{{ $k->kec_code }}" {{ $k->kec_code == $data->kec_code ? 'selected' : '' }}>{{ $k->kecamatan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <label class="form-label">Is Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="is_active" value="1" name="is_active" type="radio" {{ $data->kec_code == 1 ? 'checked' : '' }}>
                        <label class="custom-control-label" for="Yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input class="custom-control-input" id="is_active" value="0" name="is_active" type="radio" {{ $data->kec_code == 0 ? 'checked' : '' }}>
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