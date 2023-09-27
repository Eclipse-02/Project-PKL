@extends('dashboard.master')

@section('title', 'Coy')

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
            <a href="{{ route('coys.create') }}" class="btn btn-success">Create</a>
    </div>
    <div class="col-lg-12 mb-3">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Coy ID</th>
                    <th>Coy Name</th>
                    <th>Coy Address</th>
                    <th>Employee Telephone Area</th>
                    <th>Employee Telephone</th>
                    <th>Employee Handphone 1</th>
                    <th>Employee Handphone 2</th>
                    <th>Provinsi Code</th>
                    <th>Kota Code</th>
                    <th>Kecamatan Code</th>
                    <th>Kelurahan Code</th>
                    <th>Zip Code</th>
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
                "url": "{{ route('coys.index') }}",
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
                    data: "coy_name",
                    name: "coy_name"
                },
                {
                    data: "coy_addr",
                    name: "coy_addr"
                },
                {
                    data: "empl_tlp_area",
                    name: "empl_tlp_area"
                },
                {
                    data: "empl_tlp",
                    name: "empl_tlp"
                },
                {
                    data: "empl_hp01",
                    name: "empl_hp01"
                },
                {
                    data: "empl_hp02",
                    name: "empl_hp02"
                },
                {
                    data: "prov_code",
                    name: "prov_code"
                },
                {
                    data: "kota_code",
                    name: "kota_code"
                },
                {
                    data: "kec_code",
                    name: "kec_code"
                },
                {
                    data: "kel_code",
                    name: "kel_code"
                },
                {
                    data: "zip_code",
                    name: "zip_code"
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