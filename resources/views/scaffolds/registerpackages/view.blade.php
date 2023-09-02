@extends('dashboard.master')

@section('title', 'View Register Package')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <a href="{{ route('registerpackages.index') }}" class="btn btn-secondary mx-2">Return</a>
        </div>
        <div class="col-lg-12 mb-3">
            <dl class="row mx-2">
                <dt class="col-sm-3">UID</dt>
                <dd class="col-sm-9">{{ $data->id }}</dd>

                <dt class="col-sm-3">Coy ID</dt>
                <dd class="col-sm-9">{{ $data->coy->coy_name }} / {{ $data->coy->coy_id }}</dd>

                <dt class="col-sm-3">Package Code</dt>
                <dd class="col-sm-9">{{ $data->pkg_code }}</dd>

                <dt class="col-sm-3">Applicant St</dt>
                <dd class="col-sm-9">@if($data->appl_st == 'NW')New @elseif($data->appl_st == 'AC')Accept @else Cancel @endif</dd>

                <dt class="col-sm-3">Applicant Date</dt>
                <dd class="col-sm-9">{{ $data->appl_date }}</dd>

                <dt class="col-sm-3">Applicant Name</dt>
                <dd class="col-sm-9">{{ $data->appl_name }}</dd>

                <dt class="col-sm-3">Applicant Gender</dt>
                <dd class="col-sm-9">{{ $data->appl_gender == 1 ? 'Laki-laki' : 'Perempuan' }}</dd>

                <dt class="col-sm-3">Applicant Title</dt>
                <dd class="col-sm-9">@if($data->appl_title == 'MR')Mr @elseif($data->appl_title == 'MRS')Mrs @else Ms @endif</dd>

                <dt class="col-sm-3">Applicant ID Type</dt>
                <dd class="col-sm-9">{{ $data->appl_id_type == 1 ? 'KTP' : 'SIM' }}</dd>

                <dt class="col-sm-3">Applicant ID No</dt>
                <dd class="col-sm-9">{{ $data->appl_id_no }}</dd>

                <dt class="col-sm-3">Applicant Birth Place</dt>
                <dd class="col-sm-9">{{ $data->appl_birth_place }}</dd>

                <dt class="col-sm-3">Applicant Birth Date</dt>
                <dd class="col-sm-9">{{ $data->appl_birth_date }}</dd>

                <dt class="col-sm-3">Provinsi Code</dt>
                <dd class="col-sm-9">{{ $data->provinsi->provinsi }} / {{ $data->provinsi->prov_code }}</dd>

                <dt class="col-sm-3">Kota Code</dt>
                <dd class="col-sm-9">{{ $data->kota->kota }} / {{ $data->kota->kota_code }}</dd>

                <dt class="col-sm-3">Kecamatan Code</dt>
                <dd class="col-sm-9">{{ $data->kecamatan->kecamatan }} / {{ $data->kecamatan->kec_code }}</dd>

                <dt class="col-sm-3">Kelurahan Code</dt>
                <dd class="col-sm-9">{{ $data->kelurahan->kelurahan }} / {{ $data->kelurahan->kel_code }}</dd>

                <dt class="col-sm-3">Zip Code</dt>
                <dd class="col-sm-9">{{ $data->zip->zip_desc }} / {{ $data->zip->zip_code }}</dd>

                <dt class="col-sm-3">Applicant Status</dt>
                <dd class="col-sm-9">@if($data->appl_status == 1)Kawin @elseif($data->appl_status == 2)Belum Kawin @else Cerai @endif</dd>

                <dt class="col-sm-3">Country Code</dt>
                <dd class="col-sm-9">{{ $data->country->con_name }} / {{ $data->country->con_code }}</dd>

                <dt class="col-sm-3">Edu Code</dt>
                <dd class="col-sm-9">{{ $data->edu->edu_name }} / {{ $data->edu->edu_code }}</dd>

                <dt class="col-sm-3">Job Code</dt>
                <dd class="col-sm-9">{{ $data->job->job_name }} / {{ $data->job->job_code }}</dd>

                <dt class="col-sm-3">Branch Code</dt>
                <dd class="col-sm-9">{{ $data->branch->branch_name }} / {{ $data->branch->branch_code }}</dd>

                <dt class="col-sm-3">Relation Code</dt>
                <dd class="col-sm-9">{{ $data->relation->rel_name }} / {{ $data->relation->rel_code }}</dd>

                <dt class="col-sm-3">Supplier Code</dt>
                <dd class="col-sm-9">{{ $data->supplier->supl_name }} / {{ $data->supplier->supl_code }}</dd>

                <dt class="col-sm-3">Applicant Father Name</dt>
                <dd class="col-sm-9">{{ $data->appl_fth_name }}</dd>

                <dt class="col-sm-3">Applicant Mahram</dt>
                <dd class="col-sm-9">{{ $data->appl_mahram }}</dd>

                <dt class="col-sm-3">Applicant Pass No</dt>
                <dd class="col-sm-9">{{ $data->appl_pass_no }}</dd>

                <dt class="col-sm-3">Applicant Pass Name</dt>
                <dd class="col-sm-9">{{ $data->appl_pass_name }}</dd>

                <dt class="col-sm-3">Applicant Pass ISS Date</dt>
                <dd class="col-sm-9">{{ $data->appl_pass_iss_date }}</dd>

                <dt class="col-sm-3">Applicant Pass Expired Date</dt>
                <dd class="col-sm-9">{{ $data->appl_pass_exp_date }}</dd>

                <dt class="col-sm-3">Applicant Pass ISS Palace</dt>
                <dd class="col-sm-9">{{ $data->appl_pass_iss_palace }}</dd>

                <dt class="col-sm-3">Applicant Vaccine Name ID</dt>
                <dd class="col-sm-9">{{ $data->appl_vac_name_id }}</dd>

                <dt class="col-sm-3">Vaccine Code 01</dt>
                <dd class="col-sm-9">{{ $data->vc_code_01 }}</dd>

                <dt class="col-sm-3">Vaccine ID Date 01</dt>
                <dd class="col-sm-9">{{ $data->appl_vac_id_date_01 }}</dd>

                <dt class="col-sm-3">Vaccine Code 02</dt>
                <dd class="col-sm-9">{{ $data->vc_code_02 }}</dd>

                <dt class="col-sm-3">Vaccine ID Date 02</dt>
                <dd class="col-sm-9">{{ $data->appl_vac_id_date_02 }}</dd>

                <dt class="col-sm-3">Vaccine Code 03</dt>
                <dd class="col-sm-9">{{ $data->vc_code_03 }}</dd>

                <dt class="col-sm-3">Vaccine ID Date 03</dt>
                <dd class="col-sm-9">{{ $data->appl_vac_id_date_03 }}</dd>

                <dt class="col-sm-3">Vaccine Code 04</dt>
                <dd class="col-sm-9">{{ $data->vc_code_04 }}</dd>

                <dt class="col-sm-3">Vaccine ID Date 04</dt>
                <dd class="col-sm-9">{{ $data->appl_vac_id_date_04 }}</dd>

                <dt class="col-sm-3">Applicant Telephone</dt>
                <dd class="col-sm-9">{{ $data->appl_tlp }}</dd>

                <dt class="col-sm-3">Applicant Email</dt>
                <dd class="col-sm-9">{{ $data->appl_email }}</dd>

                <dt class="col-sm-3">Applicant Is Image Full</dt>
                <dd class="col-sm-9">{{ $data->appl_is_img_full == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Applicant Is Image Full Name</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/reg/full-name/' . $data->appl_is_img_full_name) }}" alt="supplier picture">
                </dd>

                <dt class="col-sm-3">Applicant Applicant Is Image Half</dt>
                <dd class="col-sm-9">{{ $data->appl_is_img_half == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Applicant Is Image Half Name</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/reg/half-name/' . $data->appl_is_img_half_name) }}" alt="supplier picture">
                </dd>

                <dt class="col-sm-3">Applicant Is Pass</dt>
                <dd class="col-sm-9">{{ $data->appl_is_pass == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Applicant Is Pass Name</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/reg/pass-name/' . $data->appl_is_pass_name) }}" alt="supplier picture">
                </dd>

                <dt class="col-sm-3">Applicant Is YB</dt>
                <dd class="col-sm-9">{{ $data->appl_is_yb == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Applicant Is YB Name</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/reg/yb-name/' . $data->appl_is_yb_name) }}" alt="supplier picture">
                </dd>

                <dt class="col-sm-3">Applicant Is Copy ID</dt>
                <dd class="col-sm-9">{{ $data->appl_is_copy_id == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Applicant Is ID Name</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/reg/id-name/' . $data->appl_is_id_name) }}" alt="supplier picture">
                </dd>

                <dt class="col-sm-3">Applicant Is Copy KK</dt>
                <dd class="col-sm-9">{{ $data->appl_is_copy_kk == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Applicant Is KK Name</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/reg/kk-name/' . $data->appl_is_kk_name) }}" alt="supplier picture">
                </dd>

                <dt class="col-sm-3">Applicant Is Copy Pass</dt>
                <dd class="col-sm-9">{{ $data->appl_is_copy_pass == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Applicant Is Pass Name</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/reg/pass-name/' . $data->appl_is_akta_n_name) }}" alt="supplier picture">
                </dd>

                <dt class="col-sm-3">Applicant Copy Akta N</dt>
                <dd class="col-sm-9">{{ $data->appl_is_copy_akta_n == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Applicant Is Akta N Name</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/reg/akta-n-name/' . $data->appl_is_akta_n_name) }}" alt="supplier picture">
                </dd>

                <dt class="col-sm-3">Applicant Copy Akta L</dt>
                <dd class="col-sm-9">{{ $data->appl_is_copy_akta_l == 'Y' ? 'Yes' : 'No' }}</dd>

                <dt class="col-sm-3">Applicant Is Akta L Name</dt>
                <dd class="col-sm-9">
                    <img class="img-thumbnail rounded mx-auto" style="height: 200px" src="{{ asset('storage/reg/akta-l-name/' . $data->appl_is_akta_l_name) }}" alt="supplier picture">
                </dd>

                

                

                

                

                

                

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
