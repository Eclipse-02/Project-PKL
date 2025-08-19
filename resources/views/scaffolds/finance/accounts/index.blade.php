@extends('dashboard.master')

@section('title', 'GL Chart of Account')

@section('content')
    @include('dashboard.toolbar')
    <!--begin::Col-->
    <div class="col-xxl-12 mt-0">
        <!--begin::Widget-->
        <div class="card card-xxl-stretch mb-5">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column px-3 py-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-3 border border-secondary rounded h-100" style="overflow: scroll">
                            <div id="tree"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label class="form-label">Search</label>
                                <input type="text" class="form-control" id="srch"
                                    name="srch" placeholder="Search" value="">
                                <span class="invalid-feedback d-none" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label class="form-label">Kode</label>
                                <input type="text" class="form-control" id="glacct_code"
                                    name="glacct_code" placeholder="8 Digits" value="">
                                <span class="invalid-feedback d-none" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="glacct_description"
                                    name="glacct_description" placeholder="Area Code" value="">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label class="form-label">Tipe</label>
                                <select class="form-select" id="glacct_acct_type" name="glacct_acct_type">
                                        <option value="" class="text-center" selected disabled>-- Pilih Branch --</option>
                                        <option value="A">ASSET</option>
                                        <option value="L">LIABILITIES</option>
                                        <option value="O">OWNER EQUITY</option>
                                        <option value="R">REVENUE</option>
                                        <option value="E">EXPENSES</option>
                                </select>
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <label class="form-label">Summary</label>
                                <select class="form-select" id="glacct_acct_summ" name="glacct_acct_summ">
                                        <option value="" class="text-center" selected disabled>-- Pilih Summary --</option>
                                        <option value="Y">YA</option>
                                        <option value="N">TIDAK</option>
                                </select>
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <label class="form-label">Flag Akun</label>
                                <select class="form-select" id="glacct_acct_flag" name="glacct_acct_flag">
                                        <option value="" class="text-center" selected disabled>-- Pilih Branch --</option>
                                        <option value="D">TITIPAN</option>
                                        <option value="P">PREPAYMENT</option>
                                        <option value="T">PAJAK</option>
                                        <option value="C">KAS</option>
                                        <option value="B">BANK</option>
                                </select>
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <label class="form-label">Enable</label>
                                <select class="form-select" id="glacct_acct_enable" name="glacct_acct_enable">
                                        <option value="" class="text-center" selected disabled>-- Pilih Enable --</option>
                                        <option value="Y">YA</option>
                                        <option value="N">TIDAK</option>
                                </select>
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <label class="form-label">Flag Report</label>
                                <select class="form-select" id="glacct_rpt_flag" name="glacct_rpt_flag">
                                        <option value="" class="text-center" selected disabled>-- Pilih Flag Report --</option>
                                        <option value="N">TIDAK MUNCUL</option>
                                        <option value="H">HEADER ONLY</option>
                                        <option value="A">AMOUNT</option>
                                </select>
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <label class="form-label">Parent</label>
                                <input type="text" class="form-control" id="glacct_acct_parent"
                                    name="glacct_acct_parent" placeholder="8 Digits" value="">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <label class="form-label">Outlet</label>
                                <select class="form-select" id="glacct_segment1_allow" name="glacct_segment1_allow">
                                        <option value="" class="text-center" selected disabled>-- Pilih Outlet --</option>
                                        <option value="ALL">ALL</option>
                                        @foreach ($branches as $i)
                                            <option value="{{ $i->branch_code }}">{{ $i->branch_name }}</option>
                                        @endforeach
                                </select>
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
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
    <script src="{{ asset('master/html/theme/src/js/layout/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#tree').jstree({
            "plugins": ["search"],
            "core": {
                "themes": { "icons": false },
                'data' : {
                    'url' : function (node) {
                    return 'http://127.0.0.1:8000/finances/accounts/tree'
                    },
                    'data' : function (node) {
                    return { 'id' : node.id };
                    }
                }
            }
        });

        var to = false;
        $('#srch').keyup(function () {
            if(to) { clearTimeout(to); }
            to = setTimeout(function () {
                var v = $('#srch').val();
                $('#tree').jstree(true).search(v);
            }, 250);
        });

        // $('#tree').on("changed.jstree", function (e, data) {
        //     console.log(data.selected);
        // });

        $('#tree').on('changed.jstree', function(e, data) {
            var url = "http://127.0.0.1:8000/api/v1/accounts?glacct_code=" + data.selected;
            $.get(url, function(data) {
                var account = data.data;
                $('#glacct_code').val(account.glacct_code);
                $('#glacct_description').val(account.glacct_description);
                $('#glacct_acct_type').val(account.glacct_acct_type);
                $('#glacct_acct_summ').val(account.glacct_acct_summ);
                $('#glacct_acct_enable').val(account.glacct_acct_enable);
                $('#glacct_acct_flag').val(account.glacct_acct_flag);
                $('#glacct_acct_default').val(account.glacct_acct_default);
                $('#glacct_acct_parent').val(account.glacct_acct_parent);
                $('#glacct_rpt_flag').val(account.glacct_rpt_flag);
                $('#glacct_segment1_allow').val(account.glacct_segment1_allow);
            });
        });

        /* Toolbar functions */
        // add
        $('#add').on('click', function() {
            $('#glacct_code').val('');
            $('#glacct_description').val('');
            $('#glacct_acct_type').val('');
            $('#glacct_acct_summ').val('');
            $('#glacct_acct_enable').val('');
            $('#glacct_acct_flag').val('');
            $('#glacct_acct_default').val('');
            $('#glacct_acct_parent').val('');
            $('#glacct_rpt_flag').val('');
            $('#glacct_segment1_allow').val('');
        });
        // save
        function isError(source, element) {
            source ? (
                $(`#${element}`).addClass('is-invalid'),
                $(`#${element}`).closest('div').find('span').removeClass('d-none'),
                $(`#${element}`).closest('div').find('strong').text(source[0])
            ) : (
                $(`#${element}`).removeClass('is-invalid'),
                $(`#${element}`).closest('div').find('span').addClass('d-none')
            );
        };
        $('#save').on('click', function() {
            $.ajax({
                url: `http://127.0.0.1:8000/finances/accounts`,
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "glacct_code": $('#glacct_code').val(),
                    "glacct_description": $('#glacct_description').val(),
                    "glacct_acct_type": $('#glacct_acct_type').val(),
                    "glacct_acct_summ": $('#glacct_acct_summ').val(),
                    "glacct_acct_enable": $('#glacct_acct_enable').val(),
                    "glacct_acct_flag": $('#glacct_acct_flag').val(),
                    "glacct_acct_default": $('#glacct_acct_default').val(),
                    "glacct_acct_parent": $('#glacct_acct_parent').val(),
                    "glacct_rpt_flag": $('#glacct_rpt_flag').val(),
                    "glacct_segment1_allow": $('#glacct_segment1_allow').val(),
                },
                success: function (response) {
                    console.log("Success");
                    $('#glacct_code').val('');
                    $('#glacct_description').val('');
                    $('#glacct_acct_type').val('');
                    $('#glacct_acct_summ').val('');
                    $('#glacct_acct_enable').val('');
                    $('#glacct_acct_flag').val('');
                    $('#glacct_acct_default').val('');
                    $('#glacct_acct_parent').val('');
                    $('#glacct_rpt_flag').val('');
                    $('#glacct_segment1_allow').val('');
                    $(document).find('.invalid-feedback').addClass('d-none');
                    $(document).find('.is-invalid').removeClass('is-invalid');

                    $('#tree').jstree().refresh();

                    console.log(response.request);
                    $('#tree').jstree(true).select_node(response.request.glacct_code);
                    $('#tree').jstree('select_node', response.request.glacct_code);
                    $.jstree.reference('#tree').select_node(response.request.glacct_code);

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
                    let root = error.responseJSON.validator;
                    console.log("Fail");
                    isError(root.glacct_code, 'glacct_code');
                    isError(root.glacct_description, 'glacct_description');
                    isError(root.glacct_acct_type, 'glacct_acct_type');
                    isError(root.glacct_acct_summ, 'glacct_acct_summ');
                    isError(root.glacct_acct_enable, 'glacct_acct_enable');
                    isError(root.glacct_acct_flag, 'glacct_acct_flag');

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
            });
        });
    });
    </script>
@endsection
