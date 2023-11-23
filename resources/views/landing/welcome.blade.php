<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Adam Indonesia</title>
		<meta name="description" content="Melayani Anda Adalah Kebanggaan Kami" />
		<meta name="keywords" content="Travel, Umroh, Haji" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:type" content="travel" />
		<meta property="og:title" content="Adam Indonesia" />
		<meta property="og:url" content="http://127.0.0.1" />
		<link rel="shortcut icon" href="{{ asset('master/html/theme/dist/assets/media/logos/favicon.ico') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('master/html/theme/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('master/html/theme/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-red-bg">
					<!--begin::Header-->
					<div class="landing-header h-100px" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="{{ request()->root() }}">
										<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/logos/adam-indonesia.png') }}" class="logo-default w-90px w-lg-95px" />
										<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/logos/adam-indonesia.png') }}" class="logo-sticky w-85px w-lg-90px" />
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link{{ request()->url() == 'http://127.0.0.1:8000' ? ' active' : '' }} py-3 px-4 px-xxl-6" href="{{ route('landing.main.welcome') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Halaman Utama</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link{{ request()->url() == 'http://127.0.0.1:8000/package' ? ' active' : '' }} py-3 px-4 px-xxl-6" href="{{ route('landing.main.welcome.packages') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Paket</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="https://api.whatsapp.com/send?phone=6285335410141&text=undefined&type=phone_number&app_absent=0" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Hubungi Kami</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
								@if (auth()->guest())
									<a href="{{ route('login') }}" class="btn btn-success">Sign In</a>
								@else
									<a href="{{ route('dashboard') }}" class="profile-hover">
										<!--begin::Menu item-->
										<div class="d-flex justify-content-end align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<div class="symbol-label fs-2 fw-bold text-success">{{ substr(auth()->user()->name, 0, 1) }}</div>
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bolder d-flex align-items-center fs-5 text-gray-500">{{ auth()->user()->name }}</div>
											</div>
											<!--end::Username-->
										</div>
										<!--end::Menu item-->
									</a>
								@endif
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						<!--begin::Row-->
						<div class="row align-items-center g-2 mb-12">
							<!--begin::Col-->
							<div class="d-flex align-items-center justify-content-center col-lg-6 col-sm-12 mb-5 mb-lg-10 py-10 py-lg-20">
								<!--begin::Heading-->
								<div class="text-center">
									<!--begin::Title-->
									<h1 class="text-white lh-base fw-bolder fs-2hx fs-lg-3hx mb-15">Selamat Datang
									<br />
									<span class="fs-1" style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
										<span id="kt_landing_hero_text">Melayani Anda Adalah Kebanggaan Kami</span>
									</span></h1>
									<!--end::Title-->
									<!--begin::Actions-->
									<a href="#" class="btn btn-flex btn-primary rounded-pill fw-bolder py-4 px-6 me-2">Pesan Sekarang</a>
									<a href="#packages" class="btn btn-flex btn-light btn-active-primary rounded-pill fw-bolder py-4 px-6 mt-sm-0 mt-4" data-kt-scroll-toggle>Paket Umroh</a>
									<!--end::Actions-->
								</div>
								<!--end::Heading-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 col-sm-12">
								<!--begin::Carousel-->
								<div id="bannerCarousel" class="w-100 carousel slide">
									<div class="carousel-inner rounded-3 shadow-lg">
										<div class="carousel-item active">
											<img src="{{ asset('carousel/one.jpg') }}" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
											<img src="{{ asset('carousel/two.jpg') }}" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
											<img src="{{ asset('carousel/three.jpg') }}" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
											<img src="{{ asset('carousel/four.jpg') }}" class="d-block w-100" alt="...">
										</div>
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
								<!--end::Carousel-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Clients-->
						<div class="d-flex flex-center flex-wrap position-relative px-5">
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="AIBA">
								<img src="{{ asset('brands/aiba.png') }}" class="mh-70px mh-lg-80px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Ekualindo">
								<img src="{{ asset('brands/ekualindo.png') }}" class="mh-70px mh-lg-80px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="SISKOPATUH">
								<img src="{{ asset('brands/siskopatuh.png') }}" class="mh-70px mh-lg-80px" alt="" />
							</div>
							<!--end::Client-->
						</div>
						<!--end::Clients-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-red-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--begin::Team Section-->
			<div class="py-10 py-lg-20">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-12">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Tentang Kami</h3>
						<!--end::Title-->
						<!--begin::Sub-title-->
						<div class="fs-3 text-muted fw-bold">
							PT Astri Duta Mandiri atau yang lebih dikenal dengan sebutan Adam Indonesia
							merupakan perusahaan travel umroh dan haji yang telah berdiri sejak tahun 2013.
							Sudah terdaftar sebagai penyelenggara resmi Umroh sesuai dengan SK Kemenag RI
							Nomor 770 tahun 2016, dan telah diperbaharui menjadi Nomor 104 tahun 2020.
							<br />
							<br />
							Sebagai Biro perjalanan umroh dan haji dengan dukungan pembimbing berpengalaman dan profesional, siap melayanai anda sebagai tamu Allah untuk pengalaman yang lebih dalam kekhusukan beribadah umroh serta ziarah ke tempat bersejarah. Insyallah atas kerjasama yang baik dan kepercayaan yang diamanatkan, kami siap memberikan pelayanan ibadah umroh secara optimal demi tercapainya umroh yang mabruroh dan haji yang mabrur yang dapat menambah kedekatan (taqarrub) kepada Allah SWT. Aamiin
						</div>
						<!--end::Sub-title=-->
					</div>
					<!--end::Heading-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Team Section-->
			<!--begin::Statistics Section-->
			<div class="mt-sm-n10">
				<!--begin::Curve top-->
				<div class="landing-curve landing-red-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="pb-15 pt-18 landing-red-bg">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Heading-->
						<div class="text-center mt-15 mb-18" id="packages" data-kt-scroll-offset="{default: 100, lg: 150}">
							<!--begin::Title-->
							<h3 class="fs-2hx text-white fw-bolder mb-5">Paket</h3>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="fs-5 text-gray-400 fw-bold">Paket yang tersedia pada tahun ini</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Slider-->
						<div class="tns tns-default">
							<!--begin::Wrapper-->
							<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
								@foreach ($data as $i)
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
									</div>
									<!--end::Card-->
								</div>
								<!--end::Item-->
								@endforeach
							</div>
							<!--end::Wrapper-->
							<!--begin::Button-->
							<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
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
							<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
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
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-red-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Statistics Section-->
			<!--end::Header Section-->
			<div class="mb-n10 mb-lg-n20 z-index-2">
				<!--begin::Container-->
				<div class="container">
					@if (auth()->guest())
						<!--begin::Heading-->
						<div class="text-center mb-15 mt-10">
							<!--begin::Title-->
							<h3 class="fs-2hx text-dark mb-5" id="how-it-works">Masuk</h3>
							<!--end::Title-->
						</div>
						<!--end::Heading-->
						<!--begin::Main-->
						<div class="d-flex flex-column flex-root">
							<!--begin::Authentication - Sign-in -->
							<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
								<!--begin::Content-->
								<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
									<!--begin::Wrapper-->
									<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
										<!--begin::Form-->
										<form class="form w-100" action="{{ route('login') }}" method="POST">
											@csrf

											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="form-label fs-6 fw-bolder text-dark">Username</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control form-control-lg form-control-solid @error('username')is-invalid @enderror" type="text" name="username" autocomplete="off" value="{{ old('username') }}" />
												<!--end::Input-->
												<!--begin::Error-->
												@error('username')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												<!--end::Error-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack mb-2">
													<!--begin::Label-->
													<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
													<!--end::Label-->
													<!--begin::Link-->
													<a href="#" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
													<!--end::Link-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Input-->
												<input class="form-control form-control-lg form-control-solid @error('password')is-invalid @enderror" type="password" name="password" autocomplete="off" />
												<!--end::Input-->
												<!--begin::Error-->
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												<!--end::Error-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="text-center">
												<!--begin::Submit button-->
												<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
													<span class="indicator-label">Continue</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Submit button-->
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Authentication - Sign-in-->
						</div>
						<!--end::Main-->
					@else
						<!--begin::Heading-->
						<div class="text-center mb-15 mt-10">
							<!--begin::Title-->
							<h3 class="fs-2x text-dark mb-5" id="how-it-works">Anda sudah masuk</h3>
							<!--end::Title-->
							<!--begin::Menu item-->
							<div class="d-flex justify-content-center align-items-center px-3 mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px me-5">
									<div class="symbol-label fs-2 fw-bold text-success">{{ substr(auth()->user()->name, 0, 1) }}</div>
								</div>
								<!--end::Avatar-->
								<!--begin::Username-->
								<div class="d-flex flex-column">
									<div class="fw-bolder d-flex align-items-center fs-5">{{ auth()->user()->name }}</div>
								</div>
								<!--end::Username-->
							</div>
							<!--end::Menu item-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<a href="{{ route('dashboard') }}" class="btn btn-flex btn-lg btn-primary mb-5">Masuk sebagai {{ auth()->user()->name }}</a>
								<!--end::Submit button-->
								<!--begin::Submit button-->
								<a onclick="$('#logout-form').submit();" class="btn btn-flex btn-lg btn-danger mb-5">Keluar</a>
								<!--end::Submit button-->
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Heading-->
					@endif
				</div>
				<!--end::Container-->
			</div>
			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-red-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-red-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-red-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">Apa motto kami?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-400">
										Melayani para jama’ah dengan sepenuh hati, sehingga tercipta hubungan yang harmonis, sesuai amanah yang telah Allah berikan
									</span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								<!--begin::Block-->
								<div class="rounded landing-red-border p-9">
									<!--begin::Title-->
									<h2 class="text-white">Anda ingin bertanya mengenai paket kami?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-400">Silahkan menghubungi kami melalui
									<a href="https://api.whatsapp.com/send?phone=6285335410141&text=undefined&type=phone_number&app_absent=0" class="text-white opacity-50 text-hover-success">WhatsApp</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 ps-lg-16">
								<!--begin::Navs-->
								<div class="d-flex justify-content-center">
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column me-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">Paket Kami</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Umroh Regular</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Umroh Plus Thaif</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Umroh Plus Turki</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Umroh Plus Dubai</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Umroh Plus Aqsho</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column ms-lg-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">Media Sosial</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="https://www.facebook.com/profile.php?id=61550213074048" class="mb-6">
											<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://www.instagram.com/adam_indonesia_official" class="mb-6">
											<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
										</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
								</div>
								<!--end::Navs-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-red-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="{{ request()->root() }}">
									<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/logos/adam-indonesia.png') }}" class="h-45px h-md-50px" />
								</a>
								<!--end::Logo-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="https://keenthemes.com">© 2023 Adam Indonesia</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Main-->
		<!--begin::Sign Out Form-->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <!--end::Sign Out Form-->
		<script>var hostUrl = "master/html/theme/dist/assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('master/html/theme/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('master/html/theme/dist/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('master/html/theme/dist/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
		<script src="{{ asset('master/html/theme/dist/assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('master/html/theme/dist/assets/js/custom/landing.js') }}"></script>
		<script src="{{ asset('js/dev/locations.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>