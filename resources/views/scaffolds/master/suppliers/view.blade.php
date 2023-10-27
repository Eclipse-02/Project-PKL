@extends('dashboard.master')

@section('title', 'Pemasok')

@section('content')
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer my-2">
            <!--begin::Card title-->
            <div class="card-title m-0 flex-column">
                <h3 class="fw-bolder m-0">Supplier Details</h3>
                <div class="text-muted fs-7 fw-bold">Detail Pemasok</div>
            </div>
            <!--end::Card title-->
            <!--start::Button-->
            <!--start::Action-->
            <a href="{{ route('suppliers.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr002.svg-->
                <span class="svg-icon svg-icon-muted svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="black"/>
                        <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="black"/>
                    </svg>
                </span>
                <!--end::Svg Icon-->Return</a>
            <!--end::Button-->
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
            <div class="border rounded p-5">
                <!--begin::Accordion-->
                <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                    <!--begin::Item-->
                    <div class="mb-5">
                        <!--begin::Header-->
                        <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_1">
                            <span class="accordion-icon">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-muted svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"/>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <h3 class="fs-4 fw-bold mb-0 ms-4">Main</h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div id="kt_accordion_2_item_1" class="fs-6 collapse show ps-10" data-bs-parent="#kt_accordion_2">
                            <!--begin::Input group-->
                            <div class="row mb-7 mt-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">UID</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $data->id }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Kode</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->supl_code }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Cabang</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->branch->branch_name }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Nama</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->supl_name }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Tipe</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->supl_type == '0' ? 'Individu' : 'Company' }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="mb-5">
                        <!--begin::Header-->
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_2">
                            <span class="accordion-icon">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-muted svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"/>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <h3 class="fs-4 fw-bold mb-0 ms-4">Contacts</h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div id="kt_accordion_2_item_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                            <!--begin::Input group-->
                            <div class="row mb-7 mt-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Sub Tipe</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->sub->sub_name }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Foto Pemasok</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <div class="card  overlay overflow-hidden">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper">
                                                <img src="{{ url('storage/supl/supl-img/' . $data->supl_pic_name) }}" alt="img_full" class="w-100 rounded"/>
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-25">
                                                <a href="{{ url('storage/supl/supl-img/' . $data->supl_pic_name) }}" download="{{ $data->supl_pic_name }}" class="btn btn-light-primary btn-shadow ms-2">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Posisi</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->position->poss_name }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">No ID</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->supl_id_no }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Alamat</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->supl_addr }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">No Area</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->supl_tlp_area }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">No Telp</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->supl_tlp }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">No HP 1</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->supl_hp01 }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">No HP 2</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold text-gray-800 fs-6">{{ $data->supl_hp02 }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="mb-5">
                        <!--begin::Header-->
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_3">
                            <span class="accordion-icon">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-muted svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"/>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <h3 class="fs-4 fw-bold mb-0 ms-4">Region</h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div id="kt_accordion_2_item_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                            <!--begin::Input group-->
                            <div class="row mb-7 mt-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Nama Provinsi</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $data->provinsi->provinsi }}</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Nama Kota</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $data->kota->kota }}</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Nama Kelurahan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $data->kelurahan->kelurahan }}</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Nama Kecamatan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $data->kecamatan->kecamatan }}</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Nama Kode Pos</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $data->zip->zip_desc }}</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="mb-5">
                        <!--begin::Header-->
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_4">
                            <span class="accordion-icon">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-muted svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"/>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <h3 class="fs-4 fw-bold mb-0 ms-4">NPWP</h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div id="kt_accordion_2_item_4" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                            <!--begin::Input group-->
                            <div class="row mb-7 mt-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">No NPWP</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $data->supl_npwp_no }}</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Name NPWP</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $data->supl_npwp_name }}</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Address NPWP</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $data->supl_npwp_addr }}</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="mb-5">
                        <!--begin::Header-->
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_5">
                            <span class="accordion-icon">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-muted svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"/>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <h3 class="fs-4 fw-bold mb-0 ms-4">File</h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div id="kt_accordion_2_item_5" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                            <!--begin::Input group-->
                            <div class="row mb-7 mt-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">File MOU</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <div class="card  overlay overflow-hidden">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper">
                                                <img src="{{ url('storage/supl/mous/' . $data->file_name_mou) }}" alt="img_full" class="w-100 rounded"/>
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-25">
                                                <a href="{{ url('storage/supl/mous/' . $data->file_name_mou) }}" download="{{ $data->file_name_mou }}" class="btn btn-light-primary btn-shadow ms-2">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">File KTP</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <div class="card  overlay overflow-hidden">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper">
                                                <img src="{{ url('storage/supl/ktps/' . $data->file_name_ktp) }}" alt="img_full" class="w-100 rounded"/>
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-25">
                                                <a href="{{ url('storage/supl/ktps/' . $data->file_name_ktp) }}" download="{{ $data->file_name_ktp }}" class="btn btn-light-primary btn-shadow ms-2">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">File NPWP</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <div class="card  overlay overflow-hidden">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper">
                                                <img src="{{ url('storage/supl/npwps/' . $data->file_name_npwp) }}" alt="img_full" class="w-100 rounded"/>
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-25">
                                                <a href="{{ url('storage/supl/npwps/' . $data->file_name_npwp) }}" download="{{ $data->file_name_npwp }}" class="btn btn-light-primary btn-shadow ms-2">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="mb-5">
                        <!--begin::Header-->
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_6">
                            <span class="accordion-icon">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-muted svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"/>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <h3 class="fs-4 fw-bold mb-0 ms-4">Status</h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div id="kt_accordion_2_item_6" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                            <!--begin::Input group-->
                            <div class="row mb-7 mt-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Status</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">
                                        @if ($data->supl_status == 'NW')
                                            Baru Disimpan
                                        @elseif($data->supl_status == 'NA')
                                            Need Approval
                                        @elseif($data->supl_status == 'AP')
                                            Approved
                                        @elseif($data->supl_status == 'CL')
                                            Closed
                                        @else
                                            Reject
                                        @endif
                                    </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Aktif</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $data->is_active == 'Y' ? 'Ya' : 'Tidak' }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Deskripsi</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $data->supl_desc }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Accordion-->
            </div>
            <!--begin::Input group-->
            <div class="row mb-10 mt-10">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Created By</label>
                <!--begin::Label-->
                <!--begin::Label-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ $data->created_by }}</span>
                </div>
                <!--begin::Label-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-10">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Created At</label>
                <!--begin::Label-->
                <!--begin::Label-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ $data->created_at }}</span>
                </div>
                <!--begin::Label-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-10">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Updated By</label>
                <!--begin::Label-->
                <!--begin::Label-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ $data->updated_by }}</span>
                </div>
                <!--begin::Label-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-10">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Updated At</label>
                <!--begin::Label-->
                <!--begin::Label-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ $data->updated_at }}</span>
                </div>
                <!--begin::Label-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::details View-->
@endsection
