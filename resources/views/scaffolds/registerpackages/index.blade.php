@extends('dashboard.master')

@section('title', 'Register Package')

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
            <a href="{{ route('registerpackages.create') }}" class="btn btn-success">Create</a>
    </div>
    <div class="col-lg-12 mb-3">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Coy ID</th>
                    <th>Applicant No</th>
                    <th>Package Code</th>
                    <th>Applicant St</th>
                    <th>Applicant Date</th>
                    <th>Applicant Name</th>
                    <th>Applicant Gender</th>
                    <th>Applicant Title</th>
                    <th>Applicant ID Type</th>
                    <th>Applicant ID No</th>
                    <th>Applicant Birth Place</th>
                    <th>Applicant Birth Date</th>
                    <th>Provinsi Code</th>
                    <th>Kota Code</th>
                    <th>Kecamatan Code</th>
                    <th>Kelurahan Code</th>
                    <th>Zip Code</th>
                    <th>Applicant Status</th>
                    <th>Country Code</th>
                    <th>Edu Code</th>
                    <th>Job Code</th>
                    <th>Branch Code</th>
                    <th>Relation Code</th>
                    <th>Supplier Code</th>
                    <th>Applicant Father Name</th>
                    <th>Applicant Mahram</th>
                    <th>Applicant Pass No</th>
                    <th>Applicant Pass Name</th>
                    <th>Applicant Pass ISS Date</th>
                    <th>Applicant Pass Expired Date</th>
                    <th>Applicant Pass ISS Palace</th>
                    <th>Applicant Vaccine Name ID</th>
                    <th>Vaccine Code 01</th>
                    <th>Vaccine ID Date 01</th>
                    <th>Vaccine Code 02</th>
                    <th>Vaccine ID Date 02</th>
                    <th>Vaccine Code 03</th>
                    <th>Vaccine ID Date 03</th>
                    <th>Vaccine Code 04</th>
                    <th>Vaccine ID Date 04</th>
                    <th>Applicant Telephone</th>
                    <th>Applicant Email</th>
                    <th>Applicant Is Image Full</th>
                    <th>Applicant Is Image Half</th>
                    <th>Applicant Is Pass</th>
                    <th>Applicant Is YB</th>
                    <th>Applicant Is Copy ID</th>
                    <th>Applicant Is Copy KK</th>
                    <th>Applicant Is Copy Pass</th>
                    <th>Applicant Is Copy Akta N</th>
                    <th>Applicant Is Copy Akta L</th>
                    <th>Applicant Is Image Full Name</th>
                    <th>Applicant Is Image Half Name</th>
                    <th>Applicant Is Pass Name</th>
                    <th>Applicant Is YB Name</th>
                    <th>Applicant Is ID Name</th>
                    <th>Applicant Is KK Name</th>
                    <th>Applicant Is Akta N Name</th>
                    <th>Applicant Is Akta L Name</th>
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
                "url": "{{ route('registerpackages.index') }}",
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
                    data: "appl_no",
                    name: "appl_no"
                },
                {
                    data: "pkg_code",
                    name: "pkg_code"
                },
                {
                    data: "appl_st",
                    name: "appl_st"
                },
                {
                    data: "appl_date",
                    name: "appl_date"
                },
                {
                    data: "appl_name",
                    name: "appl_name"
                },
                {
                    data: "appl_gender",
                    name: "appl_gender"
                },
                {
                    data: "appl_title",
                    name: "appl_title"
                },
                {
                    data: "appl_id_type",
                    name: "appl_id_type"
                },
                {
                    data: "appl_id_no",
                    name: "appl_id_no"
                },
                {
                    data: "appl_birth_place",
                    name: "appl_birth_place"
                },
                {
                    data: "appl_birth_date",
                    name: "appl_birth_date"
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
                    data: "appl_status",
                    name: "appl_status"
                },
                {
                    data: "con_code",
                    name: "con_code"
                },
                {
                    data: "edu_code",
                    name: "edu_code"
                },
                {
                    data: "job_code",
                    name: "job_code"
                },
                {
                    data: "branch_code",
                    name: "branch_code"
                },
                {
                    data: "rel_code",
                    name: "rel_code"
                },
                {
                    data: "supl_code",
                    name: "supl_code"
                },
                {
                    data: "appl_fth_name",
                    name: "appl_fth_name"
                },
                {
                    data: "appl_mahram",
                    name: "appl_mahram"
                },
                {
                    data: "appl_pass_no",
                    name: "appl_pass_no"
                },
                {
                    data: "appl_pass_name",
                    name: "appl_pass_name"
                },
                {
                    data: "appl_pass_iss_date",
                    name: "appl_pass_iss_date"
                },
                {
                    data: "appl_pass_exp_date",
                    name: "appl_pass_exp_date"
                },
                {
                    data: "appl_pass_iss_palace",
                    name: "appl_pass_iss_palace"
                },
                {
                    data: "appl_vac_name_id",
                    name: "appl_vac_name_id"
                },
                {
                    data: "vc_code_01",
                    name: "vc_code_01"
                },
                {
                    data: "appl_vac_id_date_01",
                    name: "appl_vac_id_date_01"
                },
                {
                    data: "vc_code_02",
                    name: "vc_code_02"
                },
                {
                    data: "appl_vac_id_date_02",
                    name: "appl_vac_id_date_02"
                },
                {
                    data: "vc_code_03",
                    name: "vc_code_03"
                },
                {
                    data: "appl_vac_id_date_03",
                    name: "appl_vac_id_date_03"
                },
                {
                    data: "vc_code_04",
                    name: "vc_code_04"
                },
                {
                    data: "appl_vac_id_date_04",
                    name: "appl_vac_id_date_04"
                },
                {
                    data: "appl_tlp",
                    name: "appl_tlp"
                },
                {
                    data: "appl_email",
                    name: "appl_email"
                },
                {
                    data: "appl_is_img_full",
                    name: "appl_is_img_full"
                },
                {
                    data: "appl_is_img_half",
                    name: "appl_is_img_half"
                },
                {
                    data: "appl_is_pass",
                    name: "appl_is_pass"
                },
                {
                    data: "appl_is_yb",
                    name: "appl_is_yb"
                },
                {
                    data: "appl_is_copy_id",
                    name: "appl_is_copy_id"
                },
                {
                    data: "appl_is_copy_kk",
                    name: "appl_is_copy_kk"
                },
                {
                    data: "appl_is_copy_pass",
                    name: "appl_is_copy_pass"
                },
                {
                    data: "appl_is_copy_akta_n",
                    name: "appl_is_copy_akta_n"
                },
                {
                    data: "appl_is_copy_akta_l",
                    name: "appl_is_copy_akta_l"
                },
                {
                    data: "appl_is_img_full_name",
                    name: "appl_is_img_full_name"
                },
                {
                    data: "appl_is_img_half_name",
                    name: "appl_is_img_half_name"
                },
                {
                    data: "appl_is_pass_name",
                    name: "appl_is_pass_name"
                },
                {
                    data: "appl_is_yb_name",
                    name: "appl_is_yb_name"
                },
                {
                    data: "appl_is_id_name",
                    name: "appl_is_id_name"
                },
                {
                    data: "appl_is_kk_name",
                    name: "appl_is_kk_name"
                },
                {
                    data: "appl_is_akta_n_name",
                    name: "appl_is_akta_n_name"
                },
                {
                    data: "appl_is_akta_l_name",
                    name: "appl_is_akta_l_name"
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