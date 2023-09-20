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

                <dt class="col-sm-3">No. Aplikasi</dt>
                <dd class="col-sm-9">{{ $data->coy->coy_name }} / {{ $data->coy->coy_id }}</dd>

                <dt class="col-sm-3">Aplikasi Status</dt>
                <dd class="col-sm-9">@if($data->appl_st == 'NW')New @elseif($data->appl_st == 'AC')Accept @else Cancel @endif</dd>

                <dt class="col-sm-3">Paket Produk</dt>
                <dd class="col-sm-9">{{ $data->pkg_code }}</dd>

                <dt class="col-sm-3">Tanggal Aplikasi</dt>
                <dd class="col-sm-9">{{ $data->appl_date }}</dd>

                <dt class="col-sm-3">Nama Konsumen</dt>
                <dd class="col-sm-9">{{ $data->appl_name }}</dd>

                <dt class="col-sm-3">Title</dt>
                <dd class="col-sm-9">@if($data->appl_title == 'MR')Mr @elseif($data->appl_title == 'MRS')Mrs @else Ms @endif</dd>

                <div class="accordion border border-dark rounded my-3" id="accordionRegisterPackage">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <div class="d-flex justify-content-between">
                                <button class="accordion-button collapsed pribadi" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    <strong>Data Pribadi</strong>
                                </button>
                                <i class="fas fa-chevron-down fa-xs prbd d-flex align-items-center me-4"></i>
                            </div>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionRegisterPackage">
                            <div class="accordion-body row text-dark">
                                <dt class="col-sm-3">Jenis Kelamin</dt>
                                <dd class="col-sm-9">{{ $data->appl_gender == 1 ? 'Laki-laki' : 'Perempuan' }}</dd>

                                <dt class="col-sm-3">Status</dt>
                                <dd class="col-sm-9">@if($data->appl_status == 1)Kawin @elseif($data->appl_status == 2)Belum Kawin @else Cerai @endif</dd>

                                <dt class="col-sm-3">Tipe ID</dt>
                                <dd class="col-sm-9">{{ $data->appl_id_type == 1 ? 'KTP' : 'SIM' }}</dd>

                                <dt class="col-sm-3">No ID</dt>
                                <dd class="col-sm-9">{{ $data->appl_id_no }}</dd>

                                <dt class="col-sm-3">Tempat Lahir</dt>
                                <dd class="col-sm-9">{{ $data->appl_birth_place }}</dd>

                                <dt class="col-sm-3">Tgl. Lahir</dt>
                                <dd class="col-sm-9">{{ $data->appl_birth_date }}</dd>

                                <dt class="col-sm-3">Alamat</dt>
                                <dd class="col-sm-9">{{ $data->appl_addr }}</dd>

                                <dt class="col-sm-3">Provinsi</dt>
                                <dd class="col-sm-9">{{ $data->provinsi->provinsi }} / {{ $data->provinsi->prov_code }}</dd>

                                <dt class="col-sm-3">Kota</dt>
                                <dd class="col-sm-9">{{ $data->kota->kota }} / {{ $data->kota->kota_code }}</dd>

                                <dt class="col-sm-3">Kecamatan</dt>
                                <dd class="col-sm-9">{{ $data->kecamatan->kecamatan }} / {{ $data->kecamatan->kec_code }}</dd>

                                <dt class="col-sm-3">Kelurahan</dt>
                                <dd class="col-sm-9">{{ $data->kelurahan->kelurahan }} / {{ $data->kelurahan->kel_code }}</dd>

                                <dt class="col-sm-3">Warga Negara</dt>
                                <dd class="col-sm-9">{{ $data->country->con_name }} / {{ $data->country->con_code }}</dd>

                                <dt class="col-sm-3">Pendidikan</dt>
                                <dd class="col-sm-9">{{ $data->edu->edu_name }} / {{ $data->edu->edu_code }}</dd>

                                <dt class="col-sm-3">Jabatan</dt>
                                <dd class="col-sm-9">{{ $data->job->job_name }} / {{ $data->job->job_code }}</dd>

                                <dt class="col-sm-3">Nama Orang Tua</dt>
                                <dd class="col-sm-9">{{ $data->appl_fth_name }}</dd>

                                <dt class="col-sm-3">Relasi</dt>
                                <dd class="col-sm-9">{{ $data->relation->rel_name }} / {{ $data->relation->rel_code }}</dd>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <div class="d-flex justify-content-between">
                                <button class="accordion-button collapsed pass" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <strong>Passport</strong>
                                </button>
                                <i class="fas fa-chevron-down fa-xs pss d-flex align-items-center me-4"></i>
                            </div>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionRegisterPackage">
                            <div class="accordion-body row text-dark">
                                <dt class="col-sm-3">Mahram</dt>
                                <dd class="col-sm-9">{{ $data->appl_mahram }}</dd>

                                <dt class="col-sm-3">No. Passport</dt>
                                <dd class="col-sm-9">{{ $data->appl_pass_no }}</dd>

                                <dt class="col-sm-3">Nama Passport</dt>
                                <dd class="col-sm-9">{{ $data->appl_pass_name }}</dd>

                                <dt class="col-sm-3">Issue Date</dt>
                                <dd class="col-sm-9">{{ $data->appl_pass_iss_date }}</dd>

                                <dt class="col-sm-3">Expired Date</dt>
                                <dd class="col-sm-9">{{ $data->appl_pass_exp_date }}</dd>

                                <dt class="col-sm-3">Issued Place</dt>
                                <dd class="col-sm-9">{{ $data->appl_pass_iss_palace }}</dd>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <div class="d-flex justify-content-between">
                                <button class="accordion-button collapsed vac" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <strong>Data Vaksin</strong>
                                </button>
                                <i class="fas fa-chevron-down fa-xs vc d-flex align-items-center me-4"></i>
                            </div>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionRegisterPackage">
                            <div class="accordion-body row text-dark">

                                <dt class="col-sm-3">Nama di Kartu</dt>
                                <dd class="col-sm-9">{{ $data->appl_vac_name_id }}</dd>

                                <div class="my-2">
                                    <p class="mb-1 text-primary">Vaksin 1</p>
                                    <div style="border: 1px solid black; width: 100%" class="my-1"></div>
                                </div>

                                <dt class="col-sm-3">Nama Vaksin</dt>
                                <dd class="col-sm-9">{{ $data->vc_code_01 }}</dd>

                                <dt class="col-sm-3">Tanggal Vaksin</dt>
                                <dd class="col-sm-9">{{ $data->appl_vac_id_date_01 }}</dd>

                                <div class="my-2">
                                    <p class="mb-1 text-primary">Vaksin 2</p>
                                    <div style="border: 1px solid black; width: 100%" class="my-1"></div>
                                </div>

                                <dt class="col-sm-3">Nama Vaksin</dt>
                                <dd class="col-sm-9">{{ $data->vc_code_02 }}</dd>

                                <dt class="col-sm-3">Tanggal Vaksin</dt>
                                <dd class="col-sm-9">{{ $data->appl_vac_id_date_02 }}</dd>

                                <div class="my-2">
                                    <p class="mb-1 text-primary">Vaksin 3</p>
                                    <div style="border: 1px solid black; width: 100%" class="my-1"></div>
                                </div>

                                <dt class="col-sm-3">VNama Vaksin</dt>
                                <dd class="col-sm-9">{{ $data->vc_code_03 }}</dd>

                                <dt class="col-sm-3">Tanggal Vaksin</dt>
                                <dd class="col-sm-9">{{ $data->appl_vac_id_date_03 }}</dd>

                                <div class="my-2">
                                    <p class="mb-1 text-primary">Vaksin 4</p>
                                    <div style="border: 1px solid black; width: 100%" class="my-1"></div>
                                </div>

                                <dt class="col-sm-3">Nama Vaksin</dt>
                                <dd class="col-sm-9">{{ $data->vc_code_04 }}</dd>

                                <dt class="col-sm-3">Tanggal Vaksin</dt>
                                <dd class="col-sm-9">{{ $data->appl_vac_id_date_04 }}</dd>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <div class="d-flex justify-content-between">
                                <button class="accordion-button collapsed data" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <strong>Kelengkapan Data</strong>
                                </button>
                                <i class="fas fa-chevron-down fa-xs dt d-flex align-items-center me-4"></i>
                            </div>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionRegisterPackage">
                            <div class="accordion-body row text-dark">

                                <dt class="col-sm-3">Jemaah Dari</dt>
                                <dd class="col-sm-9">{{ $data->supplier->supl_name }} / {{ $data->supplier->supl_code }}</dd>

                                <dt class="col-sm-3">No. Telp</dt>
                                <dd class="col-sm-9">{{ $data->appl_tlp }}</dd>

                                <dt class="col-sm-3">Email</dt>
                                <dd class="col-sm-9">{{ $data->appl_email }}</dd>

                                <dt class="col-sm-3">Foto Full</dt>
                                <dd class="col-sm-9">{{ $data->appl_is_img_full == 'Y' ? 'Ya' : 'Tidak' }}</dd>

                                <dt class="col-sm-3">File</dt>
                                <dd class="col-sm-9">
                                    <a class="btn btn-primary m-0" href="{{ url('/storage/reg/full-name/'.$data->appl_is_img_full_name) }}" download="{{ $data->appl_is_img_full_name }}">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </a>
                                </dd>

                                <dt class="col-sm-3">Foto Setengah</dt>
                                <dd class="col-sm-9">{{ $data->appl_is_img_half == 'Y' ? 'Ya' : 'Tidak' }}</dd>

                                <dt class="col-sm-3">File</dt>
                                <dd class="col-sm-9">
                                    <a class="btn btn-primary m-0" href="{{ url('/storage/reg/half-name/'.$data->appl_is_img_half_name) }}" download="{{ $data->appl_is_img_half_name }}">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </a>
                                </dd>

                                <dt class="col-sm-3">Fisik Passport</dt>
                                <dd class="col-sm-9">{{ $data->appl_is_pass == 'Y' ? 'Ya' : 'Tidak' }}</dd>

                                <dt class="col-sm-3">File</dt>
                                <dd class="col-sm-9">
                                    <a class="btn btn-primary m-0" href="{{ url('/storage/reg/pass-name/'.$data->appl_is_pass_name) }}" download="{{ $data->appl_is_pass_name }}">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </a>
                                </dd>

                                <dt class="col-sm-3">Buku Kuning</dt>
                                <dd class="col-sm-9">{{ $data->appl_is_yb == 'Y' ? 'Ya' : 'Tidak' }}</dd>

                                <dt class="col-sm-3">file</dt>
                                <dd class="col-sm-9">
                                    <a class="btn btn-primary m-0" href="{{ url('/storage/reg/yb-name/'.$data->appl_is_yb_name) }}" download="{{ $data->appl_is_yb_name }}">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </a>
                                </dd>

                                <dt class="col-sm-3">Foto KTP</dt>
                                <dd class="col-sm-9">{{ $data->appl_is_copy_id == 'Y' ? 'Ya' : 'Tidak' }}</dd>

                                <dt class="col-sm-3">File</dt>
                                <dd class="col-sm-9">
                                    <a class="btn btn-primary m-0" href="{{ url('/storage/reg/id-name/'.$data->appl_is_id_name) }}" download="{{ $data->appl_is_id_name }}">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </a>
                                </dd>

                                <dt class="col-sm-3">Copy KK</dt>
                                <dd class="col-sm-9">{{ $data->appl_is_copy_kk == 'Y' ? 'Ya' : 'Tidak' }}</dd>

                                <dt class="col-sm-3">File</dt>
                                <dd class="col-sm-9">
                                    <a class="btn btn-primary m-0" href="{{ url('/storage/reg/kk-name/'.$data->appl_is_kk_name) }}" download="{{ $data->appl_is_kk_name }}">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </a>
                                </dd>

                                <dt class="col-sm-3">Copy Passport</dt>
                                <dd class="col-sm-9">{{ $data->appl_is_copy_pass == 'Y' ? 'Ya' : 'Tidak' }}</dd>

                                <dt class="col-sm-3">File</dt>
                                <dd class="col-sm-9">
                                    <a class="btn btn-primary m-0" href="{{ url('/storage/reg/copy-pass-name/'.$data->appl_is_akta_n_name) }}" download="{{ $data->appl_is_akta_n_name }}">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </a>
                                </dd>

                                <dt class="col-sm-3">Copy Akta N</dt>
                                <dd class="col-sm-9">{{ $data->appl_is_copy_akta_n == 'Y' ? 'Ya' : 'Tidak' }}</dd>

                                <dt class="col-sm-3">File</dt>
                                <dd class="col-sm-9">
                                    <a class="btn btn-primary m-0" href="{{ url('/storage/reg/akta-n-name/'.$data->appl_is_akta_n_name) }}" download="{{ $data->appl_is_akta_n_name }}">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </a>
                                </dd>

                                <dt class="col-sm-3">Copy Akta L</dt>
                                <dd class="col-sm-9">{{ $data->appl_is_copy_akta_l == 'Y' ? 'Ya' : 'Tidak' }}</dd>

                                <dt class="col-sm-3">File</dt>
                                <dd class="col-sm-9">
                                    <a class="btn btn-primary m-0" href="{{ url('/storage/reg/akta-l-name/'.$data->appl_is_akta_l_name) }}" download="{{ $data->appl_is_akta_l_name }}">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </a>
                                </dd>
                            </div>
                        </div>
                    </div>
                </div>

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
