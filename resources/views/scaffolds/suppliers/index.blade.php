@extends('dashboard.master')

@section('title', 'Supplier')

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
            <a href="{{ route('suppliers.create') }}" class="btn btn-success">Create</a>
    </div>
    <div class="col-lg-12 mb-3">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Coy ID</th>
                    <th>Supplier Code</th>
                    <th>Branch Code</th>
                    <th>Is Active</th>
                    <th>Supplier Status</th>
                    <th>Supplier Name</th>
                    <th>Supplier Type</th>
                    <th>Supplier Sub Type</th>
                    <th>Supplier Pic Name</th>
                    <th>Position Code</th>
                    <th>Supplier ID No</th>
                    <th>Supplier Address</th>
                    <th>Supplier Telephone Area</th>
                    <th>Supplier Telephone</th>
                    <th>Supplier Handphone 1</th>
                    <th>Supplier Handphone 2</th>
                    <th>Provinsi Code</th>
                    <th>Kota Code</th>
                    <th>kecamatan Code</th>
                    <th>kelurahan Code</th>
                    <th>Zip Code</th>
                    <th>Supplier NPWP No</th>
                    <th>Supplier NPWP Name</th>
                    <th>Supplier NPWP Address</th>
                    <th>Supplier Description</th>
                    <th>File Name MOU</th>
                    <th>File Name KTP</th>
                    <th>File Name NPWP</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Updated By</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <select data-column="5" class="form-control filter-select">
                            <option value="">All</option>
                            <option value="Y">Yes</option>
                            <option value="N">No</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
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
                "url": "{{ route('suppliers.index') }}",
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
                    data: "supl_code",
                    name: "supl_code"
                },
                {
                    data: "branch_code",
                    name: "branch_code"
                },
                {
                    data: "is_active",
                    name: "is_active"
                },
                {
                    data: "supl_status",
                    name: "supl_status"
                },
                {
                    data: "supl_name",
                    name: "supl_name"
                },
                {
                    data: "supl_type",
                    name: "supl_type"
                },
                {
                    data: "supl_sub_type",
                    name: "supl_sub_type"
                },
                {
                    data: "supl_pic_name",
                    name: "supl_pic_name"
                },
                {
                    data: "poss_code",
                    name: "poss_code"
                },
                {
                    data: "supl_id_no",
                    name: "supl_id_no"
                },
                {
                    data: "supl_addr",
                    name: "supl_addr"
                },
                {
                    data: "supl_tlp_area",
                    name: "supl_tlp_area"
                },
                {
                    data: "supl_tlp",
                    name: "supl_tlp"
                },
                {
                    data: "supl_hp01",
                    name: "supl_hp01"
                },
                {
                    data: "supl_hp02",
                    name: "supl_hp02"
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
                    data: "supl_npwp_no",
                    name: "supl_npwp_no"
                },
                {
                    data: "supl_npwp_name",
                    name: "supl_npwp_name"
                },
                {
                    data: "supl_npwp_addr",
                    name: "supl_npwp_addr"
                },
                {
                    data: "supl_desc",
                    name: "supl_desc"
                },
                {
                    data: "file_name_mou",
                    name: "file_name_mou"
                },
                {
                    data: "file_name_ktp",
                    name: "file_name_ktp"
                },
                {
                    data: "file_name_npwp",
                    name: "file_name_npwp"
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