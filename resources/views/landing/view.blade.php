@extends('landing.master')

@section('title', 'Registrasi Paket')

@section('content')
        <!--begin::Container-->
        <div class="container">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                    <!--begin::Form-->
                    <form class="form" action="#" id="kt_subscriptions_create_new">
                        <!--begin::Customer-->
                        <div class="card shadow-sm card-flush pt-3 mb-5 mb-lg-10 w-100">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Detail Paket</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 d-flex align-items-center">
                                                <span class="fw-bold fs-5 text-gray-800 text-start pb-3">
                                                    <i class="bi bi-airplane fs-5 text-primary"></i>
                                                    Detail 1
                                                    <div class="separator border-dark fw-bold opacity-25 border-3 rounded" style="width: 110%"></div>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center col-sm-12">
                                                <span class="fs-6 text-gray-800 text-start">
                                                    Placeholder
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="col-sm-12 d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-gray-800 text-start pb-3">
                                                <i class="bi bi-globe fs-5 text-primary"></i>
                                                Detail 2
                                                <div class="separator border-dark fw-bold opacity-25 border-3 rounded" style="width: 110%"></div>
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center col-sm-12">
                                            <span class="fs-6 text-gray-800 text-start">
                                                Placeholder
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="col-sm-12 d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-gray-800 text-start pb-3">
                                                <i class="bi bi-calendar-event fs-5 text-primary"></i>
                                                Detail 3
                                                <div class="separator border-dark fw-bold opacity-25 border-3 rounded" style="width: 110%"></div>
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center col-sm-12">
                                            <span class="fs-6 text-gray-800 text-start">
                                                Placeholder
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator border-3 my-5"></div>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-5 my-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Suspendisse ultrices gravida dictum fusce ut placerat orci. Scelerisque in dictum non consectetur a erat nam at. Amet dictum sit amet justo donec enim diam vulputate. Consectetur a erat nam at lectus urna duis convallis convallis. Porttitor rhoncus dolor purus non enim praesent. Ac turpis egestas integer eget aliquet nibh praesent tristique magna. At tempor commodo ullamcorper a. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Ut sem viverra aliquet eget sit amet tellus cras adipiscing. Consequat interdum varius sit amet mattis. Enim ut tellus elementum sagittis vitae et.  
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Customer-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                    <!--begin::Card-->
                    <div class="card shadow-sm card-flush flex-column-reverse pt-3 mb-0 h-100" style="background-image: url({{ asset('storage/pkg/pkg-img/default.jpg') }})">
                        <!--begin::Card header-->
                        <div class="card-header flex-column mb-4">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="text-white">{{ $data->pkg_name }}</h2>
                            </div>
                            <span class="fs-1 fw-bolder text-primary mb-3">Rp. {{ number_format($data->pkg_price, 0, ',', '.') }}</span>
                            <a href="{{ request()->root() == 'http://travel' ? (route('landing.main.welcome.register')) : (route('landing.test.welcome.register')) }}" class="btn btn-primary">Register</a>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Container-->
@endsection