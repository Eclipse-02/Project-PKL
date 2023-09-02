@extends('dashboard.master')

@section('title', 'Package')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <div class="dropdown" style="display: inline-block">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Export
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Excel</a></li>
            <li><a class="dropdown-item" href="#">PDF</a></li>
            </ul>
        </div>
            <a href="{{ route('packages.create') }}" class="btn btn-success">Create</a>
    </div>
    <div class="col-lg-12 mb-3">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Coy ID</th>
                    <th>Package Code</th>
                    <th>Package Name</th>
                    <th>Package Description</th>
                    <th>Package Price</th>
                    <th>Package Price Limit</th>
                    <th>Package Price Agent</th>
                    <th>Package Start</th>
                    <th>Package Closed</th>
                    <th>Package Image</th>
                    <th>Package Status</th>
                    <th>Package Is Display</th>
                    <th>Detail Sequence No</th>
                    <th>Detail Description</th>
                    <th>Detail Price</th>
                    <th>Package Status</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Updated By</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(function() {
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: {
                "url": "{{ route('packages.index') }}",
				"type": "GET"
            },
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "coy_id",
                    name: "coy_id"
                },
                {
                    data: "pkg_code",
                    name: "pkg_code"
                },
                {
                    data: "pkg_name",
                    name: "pkg_name"
                },
                {
                    data: "pkg_desc",
                    name: "pkg_desc"
                },
                {
                    data: "pkg_price",
                    name: "pkg_price"
                },
                {
                    data: "pkg_price_limit",
                    name: "pkg_price_limit"
                },
                {
                    data: "pkg_price_agent",
                    name: "pkg_price_agent"
                },
                {
                    data: "pkg_start",
                    name: "pkg_start"
                },
                {
                    data: "pkg_closed",
                    name: "pkg_closed"
                },
                {
                    data: "pkg_image",
                    name: "pkg_image"
                },
                {
                    data: "pkg_status",
                    name: "pkg_status"
                },
                {
                    data: "pkg_is_display",
                    name: "pkg_is_display"
                },
                {
                    data: "dtl_sq_no",
                    name: "dtl_sq_no"
                },
                {
                    data: "dtl_desc",
                    name: "dtl_desc"
                },
                {
                    data: "dtl_price",
                    name: "dtl_price"
                },
                {
                    data: "pkg_status",
                    name: "pkg_status"
                },
                {
                    data: "created_by",
                    name: "created_by"
                },
                {
                    data: "created_at",
                    name: "created_at"
                },
                {
                    data: "updated_by",
                    name: "updated_by"
                },
                {
                    data: "updated_at",
                    name: "updated_at"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#example').on('click', '.delete[data-remote]', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = $(this).data('remote');
            // confirm then
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    method: '_DELETE',
                    submit: true
                }
            }).always(function(data) {
                $('#example').DataTable().draw(false);
            });
        });

        $('.filter-select').change(function() {
            table.column( $(this).data('column') )
                .search( $(this).val() )
                .draw();
        });
    });
</script>
@endsection