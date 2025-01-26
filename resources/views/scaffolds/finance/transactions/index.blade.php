@extends('dashboard.master')

@section('title', 'Transaction')

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
                                <th class="min-w-100px">Tipe</th>
                                <th class="min-w-100px">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i)
                                <tr id="{{ $i->trx_code }}">
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="trx_code" name="trx_code" placeholder="Kode" value="{{ $i->trx_code }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="trx_desc" name="trx_desc" placeholder="Keterangan" value="{{ $i->trx_desc }}">
                                    </td>
                                    <td>
                                        <select class="form-select form-select-solid" id="trx_type" name="trx_type">
                                            <option value="">-- Pilih Tipe --</option>
                                            <option value="RV" {{ $i->trx_type == 'RV' ? 'selected' : '' }}>Penerimaan</option>
                                            <option value="INV" {{ $i->trx_type == 'INV' ? 'selected' : '' }}>Pengeluaran</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select form-select-solid" id="trx_status" name="trx_status">
                                            <option value="">-- Pilih Status --</option>
                                            <option value="Y" {{ $i->trx_status == 'Y' ? 'selected' : '' }}>Aktif</option>
                                            <option value="N" {{ $i->trx_status == 'N' ? 'selected' : '' }}>Non Aktif</option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <form action="{{ route('finances.transactions.parameters.transaction.store') }}" method="POST">
                                @csrf

                                <tr>
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="trx_code" name="trx_code" placeholder="Kode">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="trx_desc" name="trx_desc" placeholder="Keterangan">
                                    </td>
                                    <td>
                                        <select class="form-select form-select-solid" id="trx_type" name="trx_type">
                                            <option value="">-- Pilih Tipe --</option>
                                            <option value="RV">Penerimaan</option>
                                            <option value="INV">Pengeluaran</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select form-select-solid" id="trx_status" name="trx_status">
                                            <option value="">-- Pilih Status --</option>
                                            <option value="Y">Aktif</option>
                                            <option value="N">Non Aktif</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
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
        // Update trx_code
        $('input[name="trx_code"]').on('keyup', function() {
            if (id === undefined) return;
            clearTimeout(keyupTimer);
            let code = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/parameters/transaction/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trx_code": code
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
        // Update trx_desc
        $('input[name="trx_desc"]').on('keyup', function() {
            if (id === undefined) return;
            clearTimeout(keyupTimer);
            let desc = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/parameters/transaction/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trx_desc": desc
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
        // Update trx_type
        $('select[name="trx_type"]').on('change', function() {
            if (id === undefined) return;
            clearTimeout(keyupTimer);
            let type = $(this).val();
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/parameters/transaction/${id}`,
                type: "POST",
                data: {
                    "_method": "PUT",
                    "_token": "{{ csrf_token() }}",
                    "trx_type": type
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
        // Update trx_status
        $('select[name="trx_status"]').on('change', function() {
            if (id === undefined) return;
            clearTimeout(keyupTimer);
            let status = $(this).val();
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/parameters/transaction/${id}`,
                type: "POST",
                data: {
                    "_method": "PUT",
                    "_token": "{{ csrf_token() }}",
                    "trx_status": status
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