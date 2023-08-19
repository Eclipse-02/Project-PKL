@extends('dashboard.master')

@section('title', 'View Branch')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('branchs.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $data->coy_id }}</dd>

                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Supplier Code</dt>
                <dd class="col-sm-9">{{ $data->supl_code }}</dd>

                <dt class="col-sm-3">Branch Code</dt>
                <dd class="col-sm-9">{{ $data->branch_code }}</dd>

                <dt class="col-sm-3">Supplier Status</dt>
                <dd class="col-sm-9">
                    {{ 
                        if ($data->supl_status == "NW") {
                            Baru Disimpan
                        } else if ($data->supl_status == "NA") {
                            Need Approval
                        } else if ($data->supl_status == "AP") {
                            Approved
                        } else if ($data->supl_status == "CL") {
                            Close
                        } else {
                            Reject
                        }
                    }}
                </dd>

                <dt class="col-sm-3">Supplier Type</dt>
                <dd class="col-sm-9">{{ $data->supl_type == 1 ? 'Company' : 'Individual' }}</dd>

                <dt class="col-sm-3">Supplier Sub Type</dt>
                <dd class="col-sm-9">{{ $data->supl_sub_type }}</dd>

                <dt class="col-sm-3">Supplier Pic</dt>
                <dd class="col-sm-9">{{ $data->supl_pic_name }}</dd>

                <dt class="col-sm-3">Position Code</dt>
                <dd class="col-sm-9">{{ $data->position->poss_code }} / {{ $data->position->poss_name }}</dd>

                <dt class="col-sm-3">Supplier ID No</dt>
                <dd class="col-sm-9">{{ $data->supl_id_no }}</dd>

                <dt class="col-sm-3">Supplier Address</dt>
                <dd class="col-sm-9">{{ $data->supl_addr }}</dd>

                <dt class="col-sm-3">Supplier Telephone Area</dt>
                <dd class="col-sm-9">{{ $data->supl_tlp_area }}</dd>

                <dt class="col-sm-3">Supplier Telephone</dt>
                <dd class="col-sm-9">{{ $data->supl_tlp }}</dd>

                <dt class="col-sm-3">Supplier Handphone 1</dt>
                <dd class="col-sm-9">{{ $data->supl_hp01 }}</dd>

                <dt class="col-sm-3">Supplier Handphone 2</dt>
                <dd class="col-sm-9">{{ $data->supl_hp02 }}</dd>

                <dt class="col-sm-3">Provinsi Code</dt>
                <dd class="col-sm-9">{{ $data->provinsi->provinsi }} / {{ $data->prov_code }}</dd>

                <dt class="col-sm-3">Kota Code</dt>
                <dd class="col-sm-9">{{ $data->kota->kota }} / {{ $data->kota_code }}</dd>

                <dt class="col-sm-3">Kecamatan Code</dt>
                <dd class="col-sm-9">{{ $data->kecamatan->kecamatan }} / {{ $data->kec_code }}</dd>

                <dt class="col-sm-3">Kelurahan Code</dt>
                <dd class="col-sm-9">{{ $data->kelurahan->kelurahan }} / {{ $data->kel_code }}</dd>

                <dt class="col-sm-3">Supplier NPWP No</dt>
                <dd class="col-sm-9">{{ $data->supl_npwp_no }}</dd>

                <dt class="col-sm-3">Supplier NPWP Name</dt>
                <dd class="col-sm-9">{{ $data->supl_npwp_name }}</dd>

                <dt class="col-sm-3">Supplier NPWP Address</dt>
                <dd class="col-sm-9">{{ $data->supl_npwp_addr }}</dd>

                <dt class="col-sm-3">Supplier Description</dt>
                <dd class="col-sm-9">{{ $data->supl_desc }}</dd>

                <dt class="col-sm-3">File Name MOU</dt>
                <dd class="col-sm-9">{{ $data->file_name_mou }}</dd>

                <dt class="col-sm-3">File Name KTP</dt>
                <dd class="col-sm-9">{{ $data->file_name_ktp }}</dd>

                <dt class="col-sm-3">File Name NPWP</dt>
                <dd class="col-sm-9">{{ $data->file_name_npwp }}</dd>

                <dt class="col-sm-3">Is Active</dt>
                <dd class="col-sm-9">{{ $data->is_active == 1 ? "Yes" : "No" }}</dd>

                <dt class="col-sm-3">Created By</dt>
                <dd class="col-sm-9">{{ $data->created_by }}</dd>

                <dt class="col-sm-3">Created At</dt>
                <dd class="col-sm-9">{{ $data->created_at }}</dd>

                <dt class="col-sm-3">Updated By</dt>
                <dd class="col-sm-9">{{ $data->updated_by }}</dd>

                <dt class="col-sm-3">Updated At</dt>
                <dd class="col-sm-9">{{ $data->updated_at }}</dd>
            </dl>
        </div>
    </div>
@endsection
