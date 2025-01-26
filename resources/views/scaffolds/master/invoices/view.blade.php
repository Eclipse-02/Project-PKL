@extends('dashboard.master')

@section('title', 'Invoice Paket')

@section('content')
    <!--begin::Invoice 2 main-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-20">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                    <!--begin::Invoice 2 content-->
                    <div class="mt-n1">
                        <!--begin::Top-->
                        <div class="d-flex flex-stack pb-10">
                            <!--begin::Logo-->
                            <a href="#">
                                <img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/logos/adam-indonesia.png') }}" class="w-150px w-lg-200px" />
                            </a>
                            <!--end::Logo-->
                            <!--end::Col-->
                            <div class="col-sm-6">
                                <!--end::Label-->
                                <div class="fw-bold fs-7 text-gray-600 mb-1">Issue For:</div>
                                <!--end::Label-->
                                <!--end::Text-->
                                <div class="fw-bolder fs-6 text-gray-800">NAMA PERUSAHAAN</div>
                                <!--end::Text-->
                                <!--end::Description-->
                                <div class="fw-bold fs-7 text-gray-600">ALAMAT PERUSAHAAN</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Top-->
                        <!--begin::Wrapper-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <div class="fw-bolder fs-3 text-gray-800 mb-8">Invoice #{{ $data->evn_code }}</div>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row g-5 mb-11">
                                <!--end::Col-->
                                <div class="col-sm-6">
                                    <!--end::Label-->
                                    <div class="mb-2">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Issue Date:</div>
                                        <!--end::Label-->
                                        <!--end::Col-->
                                        <div class="fw-bolder fs-6 text-gray-800">{{ Carbon\Carbon::parse($data->evn_date)->isoFormat('dddd, D MMMM Y') }}</div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Label-->
                                    <!--end::Label-->
                                    <div class="mb-2">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Package Name:</div>
                                        <!--end::Label-->
                                        <!--end::Col-->
                                        <div class="fw-bolder fs-6 text-gray-800">{{ $data->package->pkg_name }}</div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Col-->
                                <!--end::Col-->
                                <div class="col-sm-6">
                                    <!--end::Label-->
                                    <div class="mb-2">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Issued By:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div class="fw-bolder fs-6 text-gray-800">{{ $data->evn_name }}</div>
                                        <!--end::Text-->
                                        <!--end::Description-->
                                        <div class="fw-bold fs-7 text-gray-600">{{ $data->evn_addr }}</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Label-->
                                    <!--end::Label-->
                                    <div class="mb-2">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Contact Person:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div class="fw-bolder fs-6 text-gray-800">{{ $data->evn_contact }}</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Label-->
                                    <!--end::Label-->
                                    <div class="mb-2">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Phone:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div class="fw-bolder fs-6 text-gray-800">62+ {{ $data->evn_tlp_no }}</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Content-->
                            <div class="flex-grow-1">
                                <!--begin::Table-->
                                <div class="table-responsive border-bottom mb-9">
                                    <table class="table mb-3">
                                        <thead>
                                            <tr class="border-bottom fs-6 fw-bolder text-muted">
                                                <th class="min-w-50px pb-2">No.</th>
                                                <th class="min-w-175px pb-2">Description</th>
                                                <th class="min-w-70px text-end pb-2">Unit Price</th>
                                                <th class="min-w-80px text-end pb-2">Qty</th>
                                                <th class="min-w-100px text-end pb-2">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($details_get as $i)
                                                <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                    <td class="text-start pt-6">{{ $i->dtl_sq_no }}.</td>
                                                    <td class="d-flex align-items-center pt-6">{{ $i->dtl_desc }}</td>
                                                    <td class="pt-6">Rp. {{ number_format($i->dtl_unit_price, 2, ',', '.') }}</td>
                                                    <td class="pt-6">{{ number_format($i->dtl_qty, 0, '', '.') }}</td>
                                                    <td class="pt-6 text-dark fw-boldest">Rp. {{ number_format($i->dtl_price, 2, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                                <!--begin::Container-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Section-->
                                    <div class="mw-300px">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Code-->
                                            <div class="fw-bold pe-10 text-gray-600 fs-7">Total</div>
                                            <!--end::Code-->
                                            <!--begin::Label-->
                                            <div class="text-end fw-bolder fs-6 text-gray-800">Rp. {{ number_format($details_sum, 2, ',', '.') }}</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Invoice 2 content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Invoice 2 main-->
@endsection
