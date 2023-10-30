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
                <h3 class="fs-2hx text-dark mb-5" id="how-it-works">Packages</h3>
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
                    <div class="card card-flush shadow-sm">
                        <img src="{{ url('storage/pkg/pkg-img/default.jpg') }}" class="card-img-top" style="height: 250px" alt="pkg_1">
                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-5 fw-boldest">{{ $i->pkg_name }}</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-gray-400 fw-bold mb-5">{{ $i->pkg_desc }}</div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="text-center">
                                        <span class="mb-2 text-primary">Rp.</span>
                                        <span class="fs-2x fw-bolder text-primary">{{ number_format($i->pkg_price, 0, ',', '.') }}</span>
                                        <span class="fs-7 fw-bold opacity-50">/ Person</span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->
                            </div>
                            <!--begin::Features-->
                            <div class="w-100 mb-10">
                                <!--begin::Item-->
                                <div class="row mb-10">
                                    <div class="col-xl-4 col-sm-12 d-flex align-items-center">
                                        <span class="fw-bold fs-5 text-gray-800 text-start pb-3">
                                            <i class="bi bi-airplane fs-5 text-primary"></i>
                                            Durasi
                                            <div class="separator border-dark fw-bold opacity-25 border-3 rounded" style="width: 110%"></div>
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center col-xl-8 col-sm-12">
                                        <span class="fs-8 text-gray-800 text-end ps-3">
                                            {{ Carbon\Carbon::parse($i->pkg_start)->isoFormat('D MMMM Y') }}
                                        <span class="fs-8 fw-bold opacity-50">-</span>
                                            {{ Carbon\Carbon::parse($i->pkg_closed)->isoFormat('D MMMM Y') }}
                                        </span>
                                    </div>
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Features-->
                        </div>
                        <div class="card-footer">
                            @if (request()->url() == 'http://travel')
                                <div class="row justify-content-center">
                                    <!--begin::Select-->
                                    <a href="{{ route('landing.main.welcome.register') }}" class="btn btn-primary col-lg-4 col-6-sm my-3 mx-3">Registrasi</a>
                                    <!--end::Select-->
                                    <!--begin::Detail-->
                                    <a href="{{ route('landing.main.welcome.show', $i->id) }}" class="btn btn-bg-white btn-color-gray-700 btn-active-primary col-lg-4 col-6-sm my-3 mx-3">Detail</a>
                                    <!--end::Detail-->
                                </div>
                            @else
                                <div class="row justify-content-center">
                                    <!--begin::Select-->
                                    <a href="{{ route('landing.test.welcome.register') }}" class="btn btn-primary col-lg-4 col-6-sm my-3 mx-3">Registrasi</a>
                                    <!--end::Select-->
                                    <!--begin::Detail-->
                                    <a href="{{ route('landing.test.welcome.show', $i->id) }}" class="btn btn-bg-white btn-color-gray-700 btn-active-primary col-lg-4 col-6-sm my-3 mx-3">Detail</a>
                                    <!--end::Detail-->
                                </div>
                            @endif
                        </div>
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