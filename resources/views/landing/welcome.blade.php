<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Metronic</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
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
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{ asset('master/html/theme/dist/assets/media/svg/illustrations/landing.svg') }})">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
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
									<a href="../../demo1/dist/landing.html">
										<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/logos/logo-landing.svg') }}" class="logo-default h-25px h-lg-30px" />
										<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/logos/logo-landing-dark.svg') }}" class="logo-sticky h-20px h-lg-25px" />
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
											<!--begin::Menu-->
											<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
												<!--begin::Menu item-->
												<div class="menu-item">
													<!--begin::Menu link-->
													<a class="menu-link nav-link{{ request()->root() == 'http://travel' ? (request()->url() == 'http://travel' ? ' active' : '') : (request()->url() == 'http://travel.test' ? ' active' : '') }} py-3 px-4 px-xxl-6" href="{{ request()->root() == 'http://travel' ? route('landing.main.welcome') : route('landing.test.welcome') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Landing Page</a>
													<!--end::Menu link-->
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item">
													<!--begin::Menu link-->
													<a class="menu-link nav-link{{ request()->root() == 'http://travel' ? (request()->url() == 'http://travel/package' ? ' active' : '') : (request()->url() == 'http://travel.test/package' ? ' active' : '') }} py-3 px-4 px-xxl-6" href="{{ request()->root() == 'http://travel' ? route('landing.main.welcome.packages') : route('landing.test.welcome.packages') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Packages</a>
													<!--end::Menu link-->
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item">
													<!--begin::Menu link-->
													<a class="menu-link nav-link{{ request()->root() == 'http://travel' ? (request()->url() == 'http://travel/package/register' ? ' active' : '') : (request()->url() == 'http://travel.test/package/register' ? ' active' : '') }} py-3 px-4 px-xxl-6" href="{{ request()->root() == 'http://travel' ? route('landing.main.welcome.register') : route('landing.test.welcome.register') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Register</a>
													<!--end::Menu link-->
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="{{ route('login') }}" class="btn btn-success">Sign In</a>
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
                        <!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							<!--begin::Title-->
							<h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">Build An Outstanding Solutions
							<br />with
							<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">The Best Theme Ever</span>
							</span></h1>
							<!--end::Title-->
							<!--begin::Action-->
							<a href="{{ route('login') }}" class="btn btn-primary">Try Metronic</a>
							<!--end::Action-->
						</div>
						<!--end::Heading-->
						<!--begin::Clients-->
						<div class="d-flex flex-center flex-wrap position-relative px-5">
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
								<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/fujifilm.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
								<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/vodafone.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
								<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/kpmg.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
								<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/nasa.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
								<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/aspnetzero.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="AON - Empower Results">
								<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/aon.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Hewlett-Packard">
								<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/hp-3.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
								<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/truman.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
						</div>
						<!--end::Clients-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<div class="mb-n10 mb-lg-n20 z-index-2">
				<!--begin::Container-->
				<div class="container">
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
					<div class="tns tns-default">
						<!--begin::Slider-->
						<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
							@foreach ($data as $i)
							<!--begin::Card-->
							<div class="card card-flush shadow-lg my-10 mx-10">
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
												<span class="fs-3x fw-bolder text-primary">{{ number_format($i->pkg_price, 0, ',', '.') }}</span>
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
											<div class="col-xl-6 col-sm-12 d-flex align-items-center">
												<span class="fw-bold fs-1 text-gray-800 text-start pb-3">
													<i class="bi bi-airplane fs-1 text-primary"></i>
													Durasi
													<div class="separator border-dark fw-bold opacity-25 border-3 rounded" style="width: 110%"></div>
												</span>
											</div>
											<div class="d-flex justify-content-end align-items-center col-xl-6 col-sm-12">
												<span class="fs-3 text-gray-800 text-end ps-3">
													{{ Carbon\Carbon::parse($i->pkg_start)->isoFormat('D MMMM Y') }}
												<span class="fs-7 fw-bold opacity-50">-</span>
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
							@endforeach
						</div>
						<!--end::Slider-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
					</div>
				</div>
				<!--end::Container-->
			</div>
			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">Would you need a Custom License?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Email us to
									<a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9">
									<!--begin::Title-->
									<h2 class="text-white">How About a Custom Project?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
									<a href="../../demo1/dist/pages/profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
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
										<h4 class="fw-bolder text-gray-400 mb-6">More for Metronic</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5">Tutorials</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column ms-lg-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">Stay Connected</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/github.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/twitter.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
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
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="../../demo1/dist/landing.html">
									<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/logos/logo-landing.svg') }}" class="h-15px h-md-20px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="https://keenthemes.com">© 2023 Eclipse</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item mx-5">
									<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
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