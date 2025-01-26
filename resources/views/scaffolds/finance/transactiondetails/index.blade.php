@extends('dashboard.master')

@section('title', 'Transaction Details')

@section('content')
<!--begin::Col-->
<div class="col-xxl-12">
    <!--begin::Widget-->
    <div class="card card-xxl-stretch mb-5 mb-xl-8" style="height:80vh;">
        <!--begin::Body-->
        <div class="card-body d-flex flex-column px-4 py-6">
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table gy-3 gs-3">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200 text-center">
                                    <th class="min-w-100px">Kode</th>
                                    <th class="min-w-200px">Keterangan</th>
                                    <th class="min-w-150px">Flag</th>
                                    <th class="min-w-150px">Parameter</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i)
                                    <tr id="{{ $i->trxdtl_code }}">
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_code" name="trxdtl_code" placeholder="Kode" value="{{ $i->trxdtl_code }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_desc" name="trxdtl_desc" placeholder="Keterangan" value="{{ $i->trxdtl_desc }}">
                                        </td>
                                        <td>
                                            <select class="form-select form-select-solid" id="trxdtl_flag" name="trxdtl_flag">
                                                <option value="" hidden>-- Pilih Flag --</option>
                                                <option value="D" {{ $i->trxdtl_flag == 'D' ? 'selected' : '' }}>TITIPAN</option>
                                                <option value="P" {{ $i->trxdtl_flag == 'P' ? 'selected' : '' }}>UANG MUKA</option>
                                                <option value="T" {{ $i->trxdtl_flag == 'T' ? 'selected' : '' }}>PPH</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-select form-select-solid" id="trxdtl_param" name="trxdtl_param">
                                                <option value="">-- Pilih Parameter --</option>
                                                @foreach ($trxhdr_data as $t)
                                                    <option value="{{ $t->param_code }}" {{ $t->param_code == $i->trxdtl_param ? 'selected' : '' }}>{{ $t->param_desc }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="table-responsive">
                        <table class="table gy-3 gs-3">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200 text-center">
                                    <th class="min-w-150px">Segmen 2</th>
                                    <th class="min-w-150px">Segmen 3</th>
                                    <th class="min-w-150px">Segmen 4</th>
                                    <th class="min-w-150px">Segmen 5</th>
                                    <th class="min-w-150px">Segmen 6</th>
                                    <th class="min-w-150px">Segmen 7</th>
                                    <th class="min-w-150px">Segmen 8</th>
                                    <th class="min-w-150px">Segmen 9</th>
                                    <th class="min-w-150px">Segmen 10</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i)
                                    <tr id="{{ $i->trxdtl_code }}">
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_segment2" name="trxdtl_segment2" placeholder="Segment 2" value="{{ $i->trxdtl_segment2 }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_segment3" name="trxdtl_segment3" placeholder="Segment 3" value="{{ $i->trxdtl_segment3 }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_segment4" name="trxdtl_segment4" placeholder="Segment 4" value="{{ $i->trxdtl_segment4 }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_segment5" name="trxdtl_segment5" placeholder="Segment 5" value="{{ $i->trxdtl_segment5 }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_segment6" name="trxdtl_segment6" placeholder="Segment 6" value="{{ $i->trxdtl_segment6 }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_segment7" name="trxdtl_segment7" placeholder="Segment 7" value="{{ $i->trxdtl_segment7 }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_segment8" name="trxdtl_segment8" placeholder="Segment 8" value="{{ $i->trxdtl_segment8 }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_segment9" name="trxdtl_segment9" placeholder="Segment 9" value="{{ $i->trxdtl_segment9 }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid" id="trxdtl_segment10" name="trxdtl_segment10" placeholder="Segment 10" value="{{ $i->trxdtl_segment10 }}">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Widget-->
</div>
<!--end::Col-->
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        let keyupTimer;
        let id;

        // Get id for input & select
        $('input, select').on('click', function() {
            id = $(this).parent().parent().attr('id');
        });
        // Update trxdtl_code
        $('input[name="trxdtl_code"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let code = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_code": code
                    } ,
                    success: function (response) {
                        console.log(response);
                        $(`tr[id="${id}"]`).prop('id', response.data.trxdtl_code);
                        id = response.data.trxdtl_code;
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_desc
        $('input[name="trxdtl_desc"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let desc = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_desc": desc
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_flag
        $('select[name="trxdtl_flag"]').on('change', function() {
            clearTimeout(keyupTimer);
            let flag = $(this).val();

            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                type: "POST",
                data: {
                    "_method": "PUT",
                    "_token": "{{ csrf_token() }}",
                    "trxdtl_flag": flag
                } ,
                success: function (response) {
                    console.log(response);
                    console.log("Success");
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
        // Update trxdtl_param
        $('select[name="trxdtl_param"]').on('change', function() {
            clearTimeout(keyupTimer);
            let param = $(this).val();

            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                type: "POST",
                data: {
                    "_method": "PUT",
                    "_token": "{{ csrf_token() }}",
                    "trxdtl_param": param
                } ,
                success: function (response) {
                    console.log(response);
                    console.log("Success");
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
        // Update trxdtl_segment2
        $('input[name="trxdtl_segment2"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let segment2 = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_segment2": segment2
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_segment3
        $('input[name="trxdtl_segment3"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let segment3 = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_segment3": segment3
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_segment4
        $('input[name="trxdtl_segment4"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let segment4 = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_segment4": segment4
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_segment5
        $('input[name="trxdtl_segment5"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let segment5 = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_segment5": segment5
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_segment6
        $('input[name="trxdtl_segment6"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let segment6 = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_segment6": segment6
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_segment7
        $('input[name="trxdtl_segment7"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let segment7 = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_segment7": segment7
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_segment8
        $('input[name="trxdtl_segment8"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let segment8 = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_segment8": segment8
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_segment9
        $('input[name="trxdtl_segment9"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let segment9 = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_segment9": segment9
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update trxdtl_segment10
        $('input[name="trxdtl_segment10"]').on('keyup', function() {
            clearTimeout(keyupTimer);
            let segment10 = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_segment10": segment10
                    } ,
                    success: function (response) {
                        console.log(response);
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
    });
</script>
@endsection