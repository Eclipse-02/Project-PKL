@extends('landing.master')

@section('title', 'Paket')

@section('content')
    <!--begin::Packages-->
    <div class="mb-n10 mb-lg-n20 index-2">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Heading-->
            <div class="text-center mb-15 mt-10">
                <!--begin::Title-->
                <h3 class="fs-2hx text-dark mb-5" id="how-it-works">Paket</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold">Berbagai jenis paket yang tersedia
                <br />untuk keperluan kamu</div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row justify-content-center w-100 gy-10 mb-md-20">
                @foreach ($data as $i)
                <!--begin::Col-->
                <div class="col-lg-4 col-sm-12 px-5 py-3">
                    <!--begin::Card-->
                    <div class="card card-flush shadow-lg w-100">
                        <img src="{{ asset('storage/pkg/pkg-img/' . $i->pkg_image) }}" class="card-img-top" style="height: 200px">
                        <!--begin::Card header-->
                        <div class="card-header flex-column justify-content-center my-3">
                            <!--begin::Card title-->
                            <div class="card-title justify-content-center">
                                <h2>{{ $i->pkg_name }}</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Description-->
                            <div class="text-gray-400 fw-bold text-center mb-5">{{ $i->pkg_desc }}</div>
                            <!--end::Description-->
                            <!--begin::Price-->
                            <div class="text-center">
                                <span class="mb-2 text-primary">Rp.</span>
                                <span class="fs-1 fw-bolder text-primary">{{ number_format($i->pkg_price, 0, ',', '.') }}</span>
                            </div>
                            <!--end::Price-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-1">
                            <!--begin::Descriptions-->
                            <div class="d-flex flex-column text-gray-600">
                                @foreach ($i->details->take(3) as $j)
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>
                                        {{ $j->dtl_desc }}
                                    </div>
                                @endforeach
                                @if (count($i->details) > 3)
                                    <div class="d-flex align-items-center justify-content-center py-2">
                                        Dan <span class="text-primary">{{ count($i->details) - 3 }}</span> detail lagi
                                    </div>
                                @endif
                                @if (count($i->details) < 1)
                                    <div class="d-flex align-items-center justify-content-center py-2">
                                        Belum ada detail yang di buat
                                    </div>
                                @endif
                            </div>
                            <!--end::Descriptions-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                @endforeach
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Packages-->
@endsection