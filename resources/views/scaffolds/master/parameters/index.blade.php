@extends('dashboard.master')

@section('title', 'Parameter')

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
            <a href="{{ route('parameters.create') }}" class="btn btn-success">Create</a>
    </div>
    <div class="col-lg-12 mb-3">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Coy ID</th>
                    <th>Key</th>
                    <th>Value</th>
                    <th>Notes</th>
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
                "url": "{{ route('parameters.index') }}",
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
                    data: "key",
                    name: "key"
                },
                {
                    data: "value",
                    name: "value"
                },
                {
                    data: "notes",
                    name: "notes"
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
    });
</script>
@endsection