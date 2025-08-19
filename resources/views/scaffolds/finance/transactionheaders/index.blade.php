@extends('dashboard.master')

@section('title', 'Transaction Header')

@section('content')
@include('dashboard.toolbar')
<!--begin::Col-->
<div class="col-xxl-12 mt-0">
    <!--begin::Widget-->
    <div class="card card-xxl-stretch mb-5" style="height:80vh;">
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
                            @if (count($data) > 0)
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
                            @else
                                <tr id="no-data">
                                    <td class="text-center" colspan="3">
                                        Belum ada data, Silahkan isi terlebih dahulu!
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                        <tfoot>
                            <tr id="new" class="d-none">
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
<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <input type="text" class="form-control form-control-solid" id="s_param_code" name="s_param_code" placeholder="Kode">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#s_param_code').on('keyup', function() {
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/parameters/headers`,
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "s_param_code": $('#s_param_code').val(),
                },
                success: function (response) {
                    console.log(response);
                    var row = '';

                    $('tbody').html('');

                    $.each(response, function(index, value) {
                        row = (
                                '<tr id="' + value.param_code + '">' +
                                    '<td>' +
                                        '<input type="text" class="form-control form-control-solid" id="param_code" name="param_code" placeholder="Kode" value="' + value.param_code + '">' +
                                    '</td>' +
                                    '<td>' +
                                        '<input type="text" class="form-control form-control-solid" id="param_desc" name="param_desc" placeholder="Keterangan" value="' + value.param_desc + '">' +
                                    '</td>' +
                                    '<td>' +
                                        '<select class="form-select form-select-solid" id="param_status" name="param_status">' +
                                            '<option value="">-- Pilih Status --</option>' +
                                            '<option value="Y" ' + (value.param_status == "Y" ? "selected" : "") + '>Aktif</option>' +
                                        '<option value="N" ' + (value.param_status == "N" ? "selected" : "") + '>Non Aktif</option>' +
                                        '</select>' +
                                    '</td>' +
                                '</tr>'
                            );
                        $('tbody').append(row);
                    });
                    // Swal.fire({
                    //     title: 'Data Successfully Saved!',
                    //     icon: 'success',
                    //     toast: true,
                    //     position: 'top-right',
                    //     timer: 3000,
                    //     showConfirmButton: false,
                    //     showCloseButton: true
                    // });
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
        function target() {
            $('tr').on('click', function() {
                $(document).find('.table-primary').removeClass('table-primary');
                $(this).addClass('table-primary');
            });
        }
        target();
        $('#add').on('click', function() {
            if ($('#no-data').length) {
                $('#no-data').addClass('d-none');
            }
            if ($('tfoot').find('tr').hasClass('d-none')) {
                $(document).find('.table-primary').removeClass('table-primary');
                $('tfoot').find('tr').toggleClass('d-none');
                $('tfoot').find('tr').addClass('table-primary');
            } else {
                Swal.fire({
                    title: 'You Can Only Input One At a Time!',
                    icon: 'error',
                    toast: true,
                    position: 'top-right',
                    timer: 3000,
                    showConfirmButton: false,
                    showCloseButton: true
                });
            }
        });

        function isError(source, element) {
            source ?
                $(`.table-primary #${element}`).addClass('is-invalid')
            : 
                $(`.table-primary #${element}`).removeClass('is-invalid')
        };

        $('#save').on('click', function() {
            let action = $('.table-primary').attr('id') == "new" ? "create" : "update";
            console.log($('.table-primary').attr('id'));
            console.log(action);
            $.ajax({
                url: `http://127.0.0.1:8000/finances/transactions/parameters/headers`,
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "old_param_code": $('.table-primary #param_code').attr('id'),
                    "param_code": $('.table-primary #param_code').val(),
                    "param_desc": $('.table-primary #param_desc').val(),
                    "param_status": $('.table-primary #param_status').val(),
                    "action": action
                },
                success: function (response) {
                    console.log(response);
                    $('#no-data #param_code').val('');
                    $('#no-data #param_desc').val('');
                    $('#no-data #param_status').val('');
                    $(document).find('.invalid-feedback').addClass('d-none');
                    $(document).find('.is-invalid').removeClass('is-invalid');

                    if (response.created) {
                        $('tfoot').find('tr').toggleClass('d-none');
                        $('tbody').append(
                            '<tr id="' + response.request.param_code + '">' +
                                '<td>' +
                                    '<input type="text" class="form-control form-control-solid" id="param_code" name="param_code" placeholder="Kode" value="' + response.request.param_code + '">' +
                                '</td>' +
                                '<td>' +
                                    '<input type="text" class="form-control form-control-solid" id="param_desc" name="param_desc" placeholder="Keterangan" value="' + response.request.param_desc + '">' +
                                '</td>' +
                                '<td>' +
                                    '<select class="form-select form-select-solid" id="param_status" name="param_status">' +
                                        '<option value="">-- Pilih Status --</option>' +
                                        '<option value="Y" ' + (response.request.param_status == "Y" ? "selected" : "") + '>Aktif</option>' +
                                        '<option value="N" ' + (response.request.param_status == "N" ? "selected" : "") + '>Non Aktif</option>' +
                                    '</select>' +
                                '</td>' +
                            '</tr>'
                        );
                    } else {
                        $('.table-primary #param_code').attr('id', response.param_code);
                    }
                    target();

                    Swal.fire({
                        title: 'Data Successfully Saved!',
                        icon: 'success',
                        toast: true,
                        position: 'top-right',
                        timer: 3000,
                        showConfirmButton: false,
                        showCloseButton: true
                    });
                },
                error: function(error) {
                    console.log(error.responseJSON.id);
                    
                    if (error.responseJSON.id) {
                        $(`.table-primary #param_code`).addClass('is-invalid')
                        Swal.fire({
                            title: 'Code Already Exist!',
                            icon: 'error',
                            toast: true,
                            position: 'top-right',
                            timer: 3000,
                            showConfirmButton: false,
                            showCloseButton: true
                        });
                    } else {
                        let root = error.responseJSON.validator;
                        // isError(root.param_code, 'param_code');
                        isError(root.param_desc, 'param_desc');
                        isError(root.param_status, 'param_status');
    
                        Swal.fire({
                            title: 'Oops, Something Wrong Happened!',
                            icon: 'error',
                            toast: true,
                            position: 'top-right',
                            timer: 3000,
                            showConfirmButton: false,
                            showCloseButton: true
                        });
                    }
                }
            });
        });
    });
</script>
@endsection