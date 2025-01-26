@extends('dashboard.master')

@section('title', 'Transaction Header')

@section('content')
<!--begin::Col-->
<div class="col-xxl-12">
    <!--begin::Widget-->
    <div class="card card-xxl-stretch mb-5 mb-xl-8" style="height:80vh;">
        <!--begin::Body-->
        <div class="card-body d-flex flex-column px-4 py-6">
            <div class="row mt-8">
                <div class="table-responsive">
                    <table class="table gy-3 gs-3">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200 text-center">
                                <th class="min-w-100px">Kode</th>
                                <th class="min-w-200px">Keterangan</th>
                                <th class="min-w-100px">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i)
                                <tr id="{{ $i->param_code }}">
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="param_code" name="param_code" placeholder="Kode" value="{{ $i->param_code }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="param_desc" name="param_desc" placeholder="Keterangan" value="{{ $i->param_desc }}">
                                    </td>
                                    <td>
                                        <select class="form-select form-select-solid" id="param_status" name="param_status">
                                            <option value="">-- Pilih Status --</option>
                                            <option value="Y" {{ $i->param_status == 'Y' ? 'selected' : '' }}>Aktif</option>
                                            <option value="N" {{ $i->param_status == 'N' ? 'selected' : '' }}>Non Aktif</option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <form action="{{ route('finances.transactions.parameters.headers.store') }}" method="POST">
                                @csrf

                                <tr>
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="param_code" name="param_code" placeholder="Kode">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="param_desc" name="param_desc" placeholder="Keterangan">
                                    </td>
                                    <td>
                                        <select class="form-select form-select-solid" id="param_status" name="param_status">
                                            <option value="">-- Pilih Status --</option>
                                            <option value="Y">Aktif</option>
                                            <option value="N">Non Aktif</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button type="submit" class="btn btn-primary text-center w-100">Create</button>
                                    </td>
                                </tr>
                            </form>
                        </tfoot>
                    </table>
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
        // Update param_code
        $('input[name="param_code"]').on('keyup', function() {
            if (id === undefined) return;
            clearTimeout(keyupTimer);
            let code = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/parameters/headers/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "param_code": code
                    } ,
                    success: function (response) {
                        console.log(response);
                        $(`#${id}`).attr('id', code);
                        id = code;
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Update param_desc
        $('input[name="param_desc"]').on('keyup', function() {
            if (id === undefined) return;
            clearTimeout(keyupTimer);
            let desc = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/parameters/headers/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "param_desc": desc
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
        // Update param_status
        $('select[name="param_status"]').on('change', function() {
            if (id === undefined) return;
            clearTimeout(keyupTimer);
            let status = $(this).val();
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/parameters/headers/${id}`,
                type: "POST",
                data: {
                    "_method": "PUT",
                    "_token": "{{ csrf_token() }}",
                    "param_status": status
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
    });
</script>
@endsection