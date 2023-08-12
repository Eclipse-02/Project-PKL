@extends('dashboard.master')

@section('title', 'Branch')

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
            <a href="{{ route('branchs.create') }}" class="btn btn-success">Create</a>
    </div>
    <div class="col-lg-12 mb-3">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Branch Code</th>
                    <th>Branch Name</th>
                    <th>Branch Address</th>
                    <th>Branch Telephone Area</th>
                    <th>Branch Telephone</th>
                    <th>Branch Phone 1</th>
                    <th>Branch Phone 2</th>
                    <th>Provinsi Code</th>
                    <th>Kota Code</th>
                    <th>kecamatan Code</th>
                    <th>kelurahan Code</th>
                    <th>Zip Code</th>
                    <th>Branch Type</th>
                    <th>Area Code</th>
                    <th>Is Active</th>
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
                "url": "{{ route('branchs.index') }}",
				"type": "GET"
            },
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "branch_code",
                    name: "branch_code"
                },
                {
                    data: "branch_name",
                    name: "branch_name"
                },
                {
                    data: "branch_addr",
                    name: "branch_addr"
                },
                {
                    data: "branch_tlp_area",
                    name: "branch_tlp_area"
                },
                {
                    data: "branch_tlp",
                    name: "branch_tlp"
                },
                {
                    data: "branch_hp01",
                    name: "branch_hp01"
                },
                {
                    data: "branch_hp02",
                    name: "branch_hp02"
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
                    data: "branch_type",
                    name: "branch_type"
                },
                {
                    data: "area_code",
                    name: "area_code"
                },
                {
                    data: "is_active",
                    name: "is_active"
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