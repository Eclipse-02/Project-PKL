@extends('dashboard.master')

@section('title', 'Invoices')

@section('content')
<!--begin::Col-->
<div class="col-xxl-12">
    <!--begin::Widget-->
    <div class="card card-xxl-stretch mb-5 mb-xl-8">
        <!--begin::Body-->
        <div class="card-body d-flex flex-column px-4 py-6">
            <div class="row mx-4 my-8">
                <div class="col">
                    <div class="row align-items-center justify-content-center mb-2">
                        <label for="invmst_code" class="col form-label text-end">Tipe Trx</label>
                        <select class="col form-select" name="invmst_code" id="invmst_code">
                            <option value="" hidden>-- Pilih Tipe Transaksi --</option>
                            @foreach ($trx_types as $i)
                                <option value="{{ $i->trx_code }}">{{ $i->trx_code }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row align-items-center justify-content-center mb-2">
                        <label for="invmst_display_code" class="col form-label text-end">Display</label>
                        <input id="invmst_display_code" name="invmst_display_code" type="text" class="col form-control" disabled>
                    </div>
                    <div class="row align-items-center justify-content-center mb-2">
                        <label for="invmst_desc" class="col form-label text-end">Keterangan</label>
                        <input id="invmst_desc" name="invmst_desc" type="text" class="col form-control" disabled>
                    </div>
                    <div class="row align-items-center justify-content-center mb-2">
                        <label for="invmst_jurnal_on_paid" class="col form-label text-end">Jurnal</label>
                        <select class="col form-select" name="invmst_jurnal_on_paid" id="invmst_jurnal_on_paid" disabled>
                            <option value="" hidden>-- Pilih Jurnal --</option>
                            <option value="Y">Ya</option>
                            <option value="N">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="row align-items-center justify-content-center mb-2">
                        <label for="invmst_gl_category" class="col form-label text-end">GL Category</label>
                        <input id="invmst_gl_category" name="invmst_gl_category" type="text" class="col form-control" disabled>
                    </div>
                    <div class="row align-items-center justify-content-center mb-2">
                        <label for="invmst_auto" class="col form-label text-end">Auto ?</label>
                        <select class="col form-select" name="invmst_auto" id="invmst_auto" disabled>
                            <option value="" hidden>-- Pilih Auto --</option>
                            <option value="Y">Ya</option>
                            <option value="N">Tidak</option>
                        </select>
                    </div>
                    <div class="row align-items-center justify-content-center mb-2">
                        <label for="invmst_status" class="col form-label text-end">Status</label>
                        <select class="col form-select" name="invmst_status" id="invmst_status" disabled>
                            <option value="" hidden>-- Pilih Status --</option>
                            <option value="Y">Aktif</option>
                            <option value="N">Non Aktif</option>
                        </select>
                    </div>
                </div>
                <button id="send" class="btn btn-light-info text-center w-100 my-3" disabled>LINK</button>
            </div>
            <div class="row">
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
                            @foreach ($trxdtl_data as $i)
                                <tr id="{{ $i->trxdtl_code }}" class="code">
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="trxdtl_code" name="trxdtl_code" placeholder="Kode" value="{{ $i->trxdtl_code }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="trxdtl_desc" name="trxdtl_desc" placeholder="Keterangan" value="{{ $i->trxdtl_desc }}" disabled>
                                    </td>
                                    @if ($i->invdtl)
                                        <td>
                                            <select class="form-select form-select-solid" id="status" name="status">
                                                <option value="">-- Pilih Status --</option>
                                                <option value="Y" {{ $i->invdtl->status == 'Y' ? 'selected' : '' }}>Aktif</option>
                                                <option value="N" {{ $i->invdtl->status == 'N' ? 'selected' : '' }}>Non Aktif</option>
                                            </select>
                                        </td>
                                    @else
                                        <td>
                                            <select class="form-select form-select-solid" id="status" name="status">
                                                <option value="">-- Pilih Status --</option>
                                                <option value="Y">Aktif</option>
                                                <option value="N">Non Aktif</option>
                                            </select>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
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
        let dtl_id, dtl_status;
        let hdr_id, disply_code, desc, type, gl_category, auto, jurnal, hdr_status;
        // Enable link button if ids is filled
        $(document).on('change click', function() {
            if (hdr_id && dtl_id) {
                $('#send').prop('disabled', false);
            } else {
                $('#send').prop('disabled', true);
            }
        });
        // Link data
        $('#send').on('click', function() {
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/invoices/link`,
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "invmst_code": hdr_id,
                    "trxdtl_code": dtl_id,
                    "status": dtl_status
                } ,
                success: function (response) {
                    console.log("Success POST");
                    console.log(response);
                },
                error: function(error) {
                    console.log("Error POST");
                    console.log(error);
                }
            });
        });
        // Update trxdtl_code
        $('#trxdtl_code').on('keyup', function() {
            clearTimeout(keyupTimer);
            let code = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/details/${dtl_id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "trxdtl_code": code
                    } ,
                    success: function (response) {
                        console.log(response);
                        $(`tr[id="${dtl_id}"]`).prop('id', response.data.trxdtl_code);
                        dtl_id = response.data.trxdtl_code;
                        console.log("Success");
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }, 1000);
        });
        // Set invdtl status
        $('select[name="status"]').on('change', function() {
            dtl_status = $(this).val();
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/invoices/update`,
                type: "POST",
                data: {
                    "_method": "PUT",
                    "_token": "{{ csrf_token() }}",
                    "req_type": "detail",
                    "trxdtl_code": dtl_id,
                    "status": dtl_status
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
        // change table row color
        $('tr[id]').on('click', function() {
            if (dtl_id) $(`tr[id="${dtl_id}"]`).attr('bgcolor', '');
            $(this).closest('tr');
            $(this).attr('bgcolor', 'gray');
            dtl_id = $(this).attr('id');

            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/invoices/request`,
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "trxdtl_code": dtl_id,
                    "req_type": "detail"
                },
                success: function (response) {
                    if (response.header) {
                        $('#invmst_code').prop('disabled', true);
                        $('#invmst_display_code').prop('disabled', false);
                        $('#invmst_desc').prop('disabled', false);
                        $('#invmst_jurnal_on_paid').prop('disabled', false);
                        $('#invmst_gl_category').prop('disabled', false);
                        $('#invmst_auto').prop('disabled', false);
                        $('#invmst_status').prop('disabled', false);
                        $('#invmst_code').val(response.header.invmst_code);
                        $('#invmst_display_code').val(response.header.invmst_display_code);
                        $('#invmst_desc').val(response.header.invmst_desc);
                        $('#invmst_jurnal_on_paid').val(response.header.invmst_jurnal_on_paid);
                        $('#invmst_gl_category').val(response.header.invmst_gl_category);
                        $('#invmst_auto').val(response.header.invmst_auto);
                        $('#invmst_status').val(response.header.invmst_status);
                        hdr_id = response.header.rvmst_code;
                    }
                    console.log("Success");
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
        // get trx_type_data
        $('#invmst_code').on('change', function() {
            hdr_id = $(this).val();
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/invoices/request`,
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "invmst_code": hdr_id,
                    "req_type": "header"
                },
                success: function (response) {
                    $('#invmst_display_code').prop('disabled', false);
                    $('#invmst_desc').prop('disabled', false);
                    $('#invmst_jurnal_on_paid').prop('disabled', false);
                    $('#invmst_gl_category').prop('disabled', false);
                    $('#invmst_auto').prop('disabled', false);
                    $('#invmst_status').prop('disabled', false);
                    $('#invmst_display_code').val(response.header.invmst_display_code);
                    $('#invmst_desc').val(response.header.invmst_desc);
                    $('#invmst_jurnal_on_paid').val(response.header.invmst_jurnal_on_paid);
                    $('#invmst_gl_category').val(response.header.invmst_gl_category);
                    $('#invmst_auto').val(response.header.invmst_auto);
                    $('#invmst_status').val(response.header.invmst_status);
                    console.log("Success");
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        $('#invmst_display_code').on('keyup', function() {
            clearTimeout(keyupTimer);
            let display_code = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/invoices/update`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "req_type": "header",
                        "invmst_code": hdr_id,
                        "invmst_display_code": display_code
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

        $('#invmst_desc').on('keyup', function() {
            clearTimeout(keyupTimer);
            let desc = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/invoices/update`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "req_type": "header",
                        "invmst_code": hdr_id,
                        "invmst_desc": desc
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

        $('#invmst_jurnal_on_paid').on('change', function() {
            let jurnal = $(this).val();
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/invoices/update`,
                type: "POST",
                data: {
                    "_method": "PUT",
                    "_token": "{{ csrf_token() }}",
                    "req_type": "header",
                    "invmst_code": hdr_id,
                    "invmst_jurnal_on_paid": jurnal
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

        $('#invmst_gl_category').on('keyup', function() {
            clearTimeout(keyupTimer);
            let gl_category = $(this).val();
            keyupTimer = setTimeout(() => {
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/invoices/update`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "req_type": "header",
                        "invmst_code": hdr_id,
                        "invmst_gl_category": gl_category
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

        $('#invmst_auto').on('change', function() {
            let auto = $(this).val();
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/invoices/update`,
                type: "POST",
                data: {
                    "_method": "PUT",
                    "_token": "{{ csrf_token() }}",
                    "req_type": "header",
                    "invmst_code": hdr_id,
                    "invmst_auto": auto
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

        $('#invmst_status').on('change', function() {
            let hdr_status = $(this).val();
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/invoices/update`,
                type: "POST",
                data: {
                    "_method": "PUT",
                    "_token": "{{ csrf_token() }}",
                    "req_type": "header",
                    "invmst_code": hdr_id,
                    "invmst_status": hdr_status
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