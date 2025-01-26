@extends('dashboard.master')

@section('title', 'Correct')

@section('content')
<!--begin::Col-->
<div class="col-xxl-12">
    <!--begin::Widget-->
    <div class="card card-xxl-stretch mb-5 mb-xl-8" style="height:80vh;">
        <!--begin::Body-->
        <div class="card-body d-flex flex-column px-4 py-6">
            <div class="row">
                <div class="table-responsive">
                    <table class="table gy-3 gs-3">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200 text-center">
                                <th class="min-w-100px">Kode</th>
                                <th class="min-w-200px">Keterangan</th>
                                <th class="min-w-150px">Flag</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($correct_data as $i)
                                <tr id="{{ $i->trxdtl_code }}">
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="trxdtl_code" name="trxdtl_code" placeholder="Kode" value="{{ $i->trxdtl_code }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-solid" id="trxdtl_desc" name="trxdtl_desc" placeholder="Keterangan" value="{{ $i->trxdtl->trxdtl_desc }}" disabled>
                                    </td>
                                    <td>
                                        <select class="form-select form-select-solid" id="status" name="status">
                                            <option value="" hidden>-- Pilih Status --</option>
                                            <option value="Y" {{ $i->status == "Y" ? "selected" : ""  }}>AKTIF</option>
                                            <option value="N" {{ $i->status == "N" ? "selected" : ""  }}>NON AKTIF</option>
                                        </select>
                                    </td>
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
            let id, keyupTimer;

            // Get id for input & select
            $('input, select').on('click', function() {
                id = $(this).parent().parent().attr('id');
            });
            // Update trxdtl_code
            $('#trxdtl_code').on('keyup', function() {
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
            // Update status
            $('select[name="status"]').on('change', function() {
                let id = $(this).parent().parent().attr('id');
                let status = $(this).val();
                $.ajax({
                    url: `http://127.0.0.1:8000/finances/transactions/corrects/${id}`,
                    type: "POST",
                    data: {
                        "_method": "PUT",
                        "_token": "{{ csrf_token() }}",
                        "status": status
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