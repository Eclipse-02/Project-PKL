@extends('landing.master')

@section('title', 'Paket')

@section('content')
    <!--begin::Packages-->
    <div class="mb-n10 mb-lg-n20 index-2">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Heading-->
            <div class="text-center mb-5 mb-lg-10">
                <!--begin::Title-->
                <h3 class="fs-2hx text-dark mb-5" id="packages" data-kt-scroll-offset="{default: 100, lg: 150}">Paket Kami</h3>
                <!--end::Title-->
            </div>
            <!--end::Heading-->
            <!--begin::Tabs wrapper-->
            <div class="d-flex flex-center mb-5 mb-lg-15">
                <!--begin::Tabs-->
                <ul class="nav border-transparent flex-center fs-5 fw-bold">
                    <li class="nav-item mx-2">
                        <a class="nav-link btn btn-light btn-active-primary text-center min-w-100px w-lg-150px px-3 px-lg-6 active" href="#" data-bs-toggle="tab" data-bs-target="#paket_umroh">Paket Umroh</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn btn-light btn-active-primary text-center min-w-100px w-lg-150px px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#non_paket">Non-Paket</a>
                    </li>
                </ul>
                <!--end::Tabs-->
            </div>
            <!--end::Tabs wrapper-->
            <!--begin::Tabs content-->
            <div class="tab-content mb-15">
                <!--begin::Tab pane-->
                <div class="tab-pane fade active show" id="paket_umroh">
                    <!--begin::Slider-->
                    <div class="tns tns-default">
                        <!--begin::Wrapper-->
                        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#paket_umroh_prev" data-tns-next-button="#paket_umroh_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                            @foreach ($umroh as $i)
                            <!--begin::Item-->
                            <div class="text-center mx-3">
                                <!--begin::Card-->
                                <div class="card card-flush w-100">
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
                                    <!--start::Card Footer-->
                                    <div class="card-footer flex-wrap pt-0">
                                        <a href="{{ url('https://adamindonesia.id') }}" class="btn btn-primary w-100">Daftar Sekarang</a>
                                    </div>
                                    <!--end::Card Footer-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Item-->
                            @endforeach
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Button-->
                        <button class="btn btn-icon btn-active-color-primary" id="paket_umroh_prev">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button class="btn btn-icon btn-active-color-primary" id="paket_umroh_next">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Slider-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="non_paket">
                    <!--begin::Slider-->
                    <div class="tns tns-default">
                        <!--begin::Wrapper-->
                        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#non_paket_prev" data-tns-next-button="#non_paket_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                            @foreach ($event as $i)
                            <!--begin::Item-->
                            <div class="text-center mx-3">
                                <!--begin::Card-->
                                <div class="card card-flush w-100">
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
                                    <!--start::Card Footer-->
                                    <div class="card-footer flex-wrap pt-0">
                                        <a href="{{ url('https://adamindonesia.id') }}" class="btn btn-primary w-100">Daftar Sekarang</a>
                                    </div>
                                    <!--end::Card Footer-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Item-->
                            @endforeach
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Button-->
                        <button class="btn btn-icon btn-active-color-primary" id="non_paket_prev">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button class="btn btn-icon btn-active-color-primary" id="non_paket_next">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Slider-->
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tabs content-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Packages-->
@endsection