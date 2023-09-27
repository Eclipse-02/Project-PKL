@extends('dashboard.master')

@section('title', 'Update Package')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('packages.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('packages.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="row mx-2">
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Coy ID</label>
                    <select class="form-select @error('coy_id')is-invalid @enderror" id="coy_id" name="coy_id">
                        <option class="text-center" selected disabled>-- Pilih Coy ID --</option>
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
                    <label class="form-label">Package Code</label>
                    <input type="text" class="form-control @error('pkg_code')is-invalid @enderror" id="pkg_code" name="pkg_code" placeholder="Package Code" value="{{ old('pkg_code') ? old('pkg_code') : $data->pkg_code }}">
                    @error('pkg_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Package Name</label>
                    <input type="text" class="form-control @error('pkg_name')is-invalid @enderror" id="pkg_name" name="pkg_name" placeholder="Package Name" value="{{ old('pkg_name') ? old('pkg_name') : $data->pkg_name }}">
                    @error('pkg_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Package Description</label>
                    <textarea class="form-control @error('pkg_desc')is-invalid @enderror" rows="3" id="pkg_desc" name="pkg_desc" placeholder="Description">{{ old('pkg_desc') ? old('pkg_desc') : $data->pkg_desc }}</textarea>
                    @error('pkg_desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Package Price</label>
                    <input type="text" class="form-control @error('pkg_price')is-invalid @enderror" id="pkg_price" name="pkg_price" placeholder="Package Price" value="{{ old('pkg_price') ? old('pkg_price') : $data->pkg_price }}">
                    @error('pkg_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Package Price Limit</label>
                    <input type="text" class="form-control @error('pkg_price_limit')is-invalid @enderror" id="pkg_price_limit" name="pkg_price_limit" placeholder="Package Price Limit" value="{{ old('pkg_price_limit') ? old('pkg_price_limit') : $data->pkg_price_limit }}">
                    @error('pkg_price_limit')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Package Price Agent</label>
                    <input type="text" class="form-control @error('pkg_price_agent')is-invalid @enderror" id="pkg_price_agent" name="pkg_price_agent" placeholder="Package Price Agent" value="{{ old('pkg_price_agent') ? old('pkg_price_agent') : $data->pkg_price_agent }}">
                    @error('pkg_price_agent')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Package Start</label>
                    <input type="date" class="form-control @error('pkg_start')is-invalid @enderror" id="pkg_start" name="pkg_start" placeholder="Package Start" value="{{ old('pkg_start') ? old('pkg_start') : $data->pkg_start }}">
                    @error('pkg_start')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Package Closed</label>
                    <input type="date" class="form-control @error('pkg_closed')is-invalid @enderror" id="pkg_closed" name="pkg_closed" placeholder="Package Closed" value="{{ old('pkg_closed') ? old('pkg_closed') : $data->pkg_closed }}">
                    @error('pkg_closed')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Package Image</label>
                    <input type="hidden" name="old_pkg_image" value="{{ $data->pkg_image }}">
                    <img class="img-preview img-fluid mb-3">
                    <input type="file" class="form-control @error('pkg_image')is-invalid @enderror" id="pkg_image" name="pkg_image" placeholder="File Name KTP" value="{{ old('pkg_image') ? old('pkg_image') : $data->pkg_image }}">
                    @error('pkg_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6 mb-3">
                <div class="form-group">
                    <label class="form-label">Package Is Display</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="pkg_is_display" value="Y" name="pkg_is_display" type="radio" {{ old('pkg_is_display') ? (old('pkg_is_display') == "Y" ? 'checked' : '') : ($data->pkg_is_display == "Y" ? 'checked' : '') }}>
                        <label class="custom-control-label">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" id="pkg_is_display" value="N" name="pkg_is_display" type="radio" {{ old('pkg_is_display') ? (old('pkg_is_display') == "N" ? 'checked' : '') : ($data->pkg_is_display == "N" ? 'checked' : '') }}>
                        <label class="custom-control-label">No</label>
                    </div>
                    @error('pkg_is_display')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Detail Sequence No</label>
                    <input type="text" class="form-control @error('dtl_sq_no')is-invalid @enderror" id="dtl_sq_no" name="dtl_sq_no" placeholder="Detail Sequence No" value="{{ old('dtl_sq_no') ? old('dtl_sq_no') : $data->dtl_sq_no }}">
                    @error('dtl_sq_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Detail Description</label>
                    <textarea class="form-control @error('dtl_desc')is-invalid @enderror" rows="3" id="dtl_desc" name="dtl_desc" placeholder="Description">{{ old('dtl_desc') ? old('dtl_desc') : $data->dtl_desc }}</textarea>
                    @error('dtl_desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label class="form-label">Detail Price</label>
                    <input type="text" class="form-control @error('dtl_price')is-invalid @enderror" id="dtl_price" name="dtl_price" placeholder="Detail Price" value="{{ old('dtl_price') ? old('dtl_price') : $data->dtl_price }}">
                    @error('dtl_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-6 mb-3">
                <label class="form-label">Package Status</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="pkg_status" value="NW" name="pkg_status" type="radio" {{ old('pkg_status') ? (old('pkg_status') == "NW" ? 'checked' : '') : ($data->pkg_status == "NW" ? 'checked' : '') }}>
                    <label class="custom-control-label">New</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="pkg_status" value="AC" name="pkg_status" type="radio" {{ old('pkg_status') ? (old('pkg_status') == "AC" ? 'checked' : '') : ($data->pkg_status == "AC" ? 'checked' : '') }}>
                    <label class="custom-control-label">Aktif</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="pkg_status" value="CN" name="pkg_status" type="radio" {{ old('pkg_status') ? (old('pkg_status') == "CN" ? 'checked' : '') : ($data->pkg_status == "CN" ? 'checked' : '') }}>
                    <label class="custom-control-label">Cancel</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="pkg_status" value="CL" name="pkg_status" type="radio" {{ old('pkg_status') ? (old('pkg_status') == "CL" ? 'checked' : '') : ($data->pkg_status == "CL" ? 'checked' : '') }}>
                    <label class="custom-control-label">Close</label>
                </div>
                @error('pkg_status')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-12 col-md-6">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    window.onload = function() {
        var price = document.getElementById('pkg_price');
        var price_limit = document.getElementById('pkg_price_limit');
        var price_agent = document.getElementById('pkg_price_agent');
        var dtl_price = document.getElementById('dtl_price');
        function formatRupiah(angka, prefix)
        {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split    = number_string.split(','),
                sisa     = split[0].length % 3,
                rupiah     = split[0].substr(0, sisa),
                ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
                
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
        price.value = formatRupiah(price.value);
        price_limit.value = formatRupiah(price_limit.value);
        price_agent.value = formatRupiah(price_agent.value);
        dtl_price.value = formatRupiah(dtl_price.value);
    }
    var price = document.getElementById('pkg_price');
    price.addEventListener('keyup', function(e)
    {
        price.value = formatRupiah(this.value);
    });

    var price_limit = document.getElementById('pkg_price_limit');
    price_limit.addEventListener('keyup', function(e)
    {
        price_limit.value = formatRupiah(this.value);
    });

    var price_agent = document.getElementById('pkg_price_agent');
    price_agent.addEventListener('keyup', function(e)
    {
        price_agent.value = formatRupiah(this.value);
    });

    var dtl_price = document.getElementById('dtl_price');
    dtl_price.addEventListener('keyup', function(e)
    {
        dtl_price.value = formatRupiah(this.value);
    });

    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    $('#pkg_image').change(function() {
        const pkg_image = document.querySelector('#pkg_image');
        const pkg_imagePreview = document.querySelector('.img-preview');

        pkg_imagePreview.style.display = 'block';
        pkg_imagePreview.style.height = '200px';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(pkg_image.files[0]);

        oFReader.onload = function(oFREvent) {
            pkg_imagePreview.src = oFREvent.target.result;
        }
    });
</script>
@endsection